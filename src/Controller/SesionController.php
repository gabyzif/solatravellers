<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SesionController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->setLayout('sesion');
        return parent::beforeFilter($event); // TODO: Change the autogenerated stub
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();

            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));

        }
    }

    public function register()
    {
        $this->loadModel('Users');
        $this->loadModel('typeOfAccount');

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            // Prior to 3.4.0 $this->request->data() was used.
            $user = $this->Users->patchEntity($user, $this->request->getData());

            $user->type_of_account_id=1;

            //debug($user);die;
            if ($this->Users->save($user)) {

                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect($this->Auth->redirectUrl());
            }




            $this->Flash->error(__('Unable to add the user.'));
        }

       // $typeOfAccount = $this->Users->TypeOfAccounts->find('list',['valueField' => 'type'] );
        $nacionality = $this->Users->Nacionalities->find('list', [    'valueField' => 'description'
        ]);

        $this->set(compact('user','nacionality','typeOfAccount'));
    }

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout', 'add']);
    }

    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }


}
