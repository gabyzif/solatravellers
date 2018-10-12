<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeOfPublications Controller
 *
 * @property \App\Model\Table\TypeOfPublicationsTable $TypeOfPublications
 *
 * @method \App\Model\Entity\TypeOfPublication[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeOfPublicationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typeOfPublications = $this->paginate($this->TypeOfPublications);

        $this->set(compact('typeOfPublications'));
    }

    /**
     * View method
     *
     * @param string|null $id Type Of Publication id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeOfPublication = $this->TypeOfPublications->get($id, [
            'contain' => ['Publications']
        ]);

        $this->set('typeOfPublication', $typeOfPublication);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeOfPublication = $this->TypeOfPublications->newEntity();
        if ($this->request->is('post')) {
            $typeOfPublication = $this->TypeOfPublications->patchEntity($typeOfPublication, $this->request->getData());
            if ($this->TypeOfPublications->save($typeOfPublication)) {
                $this->Flash->success(__('The type of publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type of publication could not be saved. Please, try again.'));
        }
        $this->set(compact('typeOfPublication'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Of Publication id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeOfPublication = $this->TypeOfPublications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeOfPublication = $this->TypeOfPublications->patchEntity($typeOfPublication, $this->request->getData());
            if ($this->TypeOfPublications->save($typeOfPublication)) {
                $this->Flash->success(__('The type of publication has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type of publication could not be saved. Please, try again.'));
        }
        $this->set(compact('typeOfPublication'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Of Publication id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeOfPublication = $this->TypeOfPublications->get($id);
        if ($this->TypeOfPublications->delete($typeOfPublication)) {
            $this->Flash->success(__('The type of publication has been deleted.'));
        } else {
            $this->Flash->error(__('The type of publication could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
