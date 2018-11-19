<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\PhotosTable;
use Cake\Event\Event;

/**
 * Articles Controller
 *
 * @property \App\Model\Table\ArticlesTable $Articles
 * * @property PhotosTable $Photos

 * @method \App\Model\Entity\Article[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->viewBuilder()->setLayout('blog');
        return parent::beforeFilter($event); // TODO: Change the autogenerated stub
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {

        $articles = $this->paginate($this->Articles->find()->where(['active'=>true])
            ->contain(['Photos'])
            ->order('Created DESC')
        );



        $this->set(compact('articles'));
    }

    /**
     * View method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $article = $this->Articles->get($id, [
            'contain' => ['Photos']
        ]);



        $this->set('article', $article);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */


    public function add()
    {

        /*if($this->User->type_of_account_id != 5){

            $this->Auth->deny();

        }*/
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData(), ['associated' => 'Photos']);

            $article->active = true;

            if ($this->Articles->save($article)) {

                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)

    {
        $article = $this->Articles->get($id, [
            'contain' => ['Photos']
        ]);

        if ($this->request->is(['put'])) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());

            $article->active = true;
            if ($this->Articles->save($article)) {
                $photos = $this->Articles->Photos->newEntities($this->request->getData("photos"));
                foreach($photos as $photo)
                {
                    $photo->article_id = $article->id;
                    $this->Articles->Photos->save($photo);
                }
                $this->Flash->success(__('The article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The article could not be saved. Please, try again.'));
        }
        $this->set(compact('article'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Article id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        if($this->request->is('post')){
            $article = $this->Articles->get($id);
            $article->active = false;
            if($this->Articles->save($article)){
                $this->Flash->success('The article has been deleted.');
            }
            else{
                $this->Flash->error('The article could not be deleted. Please, try again.');
            }
        }
        else{
            $this->Flash->error("The page doesn't exisit ");
        }

        $this->redirect(['action' => 'index']);
    }



    public function deletephoto($id)
    {
        $photo = $this->Articles->Photos->get($id);

        if($this->request->is(['post', 'put', 'patch']))
        {
            if($this->Articles->Photos->delete($photo))
            {
                $this->Flash->success('The articles has been delete');
            }
            else{
                $this->Flash->error('Error');
            }
        }

        $this->redirect(['action' => 'edit', $photo->idArticle]);
    }
}
