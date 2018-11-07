<?php
namespace App\Controller;
use Cake\Event\Event;


use App\Controller\AppController;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');

        if ($this->request->is('json')) {
            $this->Auth->allow('jason');
        }

        $this->loadComponent('Search.Prg', [
            // This is default config. You can modify "actions" as needed to make
            // the PRG component work only for specified methods.
            'actions' => ['index', 'lookup']
        ]);

    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->setLayout('forum');
        return parent::beforeFilter($event); // TODO: Change the autogenerated stub



    }

    public function jason(){

            $events = $this->paginate($this->Events->find()
                ->contain(['City'])
                ->contain(['Photos']));

            $this->set(compact('events'));

    }

    public function index()
    {


        $this->loadModel('Users');
        $this->loadModel('UsersEvents');

        $is_empty=false;

        $events = $this->paginate($this->Events
            ->find('search', ['search' => $this->request->getQueryParams()])

            ->contain(['City'])
            ->contain(['Photos'])
            ->where(['description IS NOT' => null]));


        $this->set([
            'events' => $events,
            '_serialize' => ['events']
        ]);



        $my_events= $this->UsersEvents->find()
            ->contain(["Events"=>"Photos"])
            ->contain(["Users"])
            ->where(["Users.id" => $this->User->id]);

        if($my_events->isEmpty()) {

            $is_empty=true;

        }

        foreach ($events as $event){
            $cant_users[$event->id] = $this->UsersEvents->find()
                ->where(['event_id' => $event->id])
                ->count(); }


        $this->set(compact('events','cant_users', 'my_events','is_empty'));
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $this->loadModel('UsersEvents');
        $this->loadModel('Users');
        $this->loadModel('Photos');


        $event = $this->Events->get($id, [
            'contain' => ['Photos', 'Users','City']
        ]);

        $cant_users = $this->UsersEvents->find()
            ->where(['event_id' => $event->id])
            ->count();

        $users_events = $this->UsersEvents->find()
            ->contain (["Users"=>"Photos"])
            ->where(['event_id' => $event->id]);


        $this->set(compact('event',  'cant_users','users_events'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->getData(), ['associated' => 'Photos']);
            $event->active = true;

            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $photos = $this->Events->Photos->find('list', ['limit' => 200]);
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $this->set(compact('event', 'photos', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->getData());
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $photos = $this->Events->Photos->find('list', ['limit' => 200]);
        $users = $this->Events->Users->find('list', ['limit' => 200]);
        $this->set(compact('event', 'photos', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
