<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Nacionalities Controller
 *
 * @property \App\Model\Table\NacionalitiesTable $Nacionalities
 *
 * @method \App\Model\Entity\Nacionality[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NacionalitiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $nacionalities = $this->paginate($this->Nacionalities);

        $this->set(compact('nacionalities'));
    }

    /**
     * View method
     *
     * @param string|null $id Nacionality id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nacionality = $this->Nacionalities->get($id, [
            'contain' => []
        ]);

        $this->set('nacionality', $nacionality);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nacionality = $this->Nacionalities->newEntity();
        if ($this->request->is('post')) {
            $nacionality = $this->Nacionalities->patchEntity($nacionality, $this->request->getData());
            if ($this->Nacionalities->save($nacionality)) {
                $this->Flash->success(__('The nacionality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nacionality could not be saved. Please, try again.'));
        }
        $this->set(compact('nacionality'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nacionality id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nacionality = $this->Nacionalities->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nacionality = $this->Nacionalities->patchEntity($nacionality, $this->request->getData());
            if ($this->Nacionalities->save($nacionality)) {
                $this->Flash->success(__('The nacionality has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nacionality could not be saved. Please, try again.'));
        }
        $this->set(compact('nacionality'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nacionality id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nacionality = $this->Nacionalities->get($id);
        if ($this->Nacionalities->delete($nacionality)) {
            $this->Flash->success(__('The nacionality has been deleted.'));
        } else {
            $this->Flash->error(__('The nacionality could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
