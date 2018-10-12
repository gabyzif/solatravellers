<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TypeOfAccounts Controller
 *
 * @property \App\Model\Table\TypeOfAccountsTable $TypeOfAccounts
 *
 * @method \App\Model\Entity\TypeOfAccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TypeOfAccountsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $typeOfAccounts = $this->paginate($this->TypeOfAccounts);

        $this->set(compact('typeOfAccounts'));
    }

    /**
     * View method
     *
     * @param string|null $id Type Of Account id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $typeOfAccount = $this->TypeOfAccounts->get($id, [
            'contain' => []
        ]);

        $this->set('typeOfAccount', $typeOfAccount);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $typeOfAccount = $this->TypeOfAccounts->newEntity();
        if ($this->request->is('post')) {
            $typeOfAccount = $this->TypeOfAccounts->patchEntity($typeOfAccount, $this->request->getData());
            if ($this->TypeOfAccounts->save($typeOfAccount)) {
                $this->Flash->success(__('The type of account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type of account could not be saved. Please, try again.'));
        }
        $this->set(compact('typeOfAccount'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Type Of Account id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $typeOfAccount = $this->TypeOfAccounts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $typeOfAccount = $this->TypeOfAccounts->patchEntity($typeOfAccount, $this->request->getData());
            if ($this->TypeOfAccounts->save($typeOfAccount)) {
                $this->Flash->success(__('The type of account has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The type of account could not be saved. Please, try again.'));
        }
        $this->set(compact('typeOfAccount'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Type Of Account id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $typeOfAccount = $this->TypeOfAccounts->get($id);
        if ($this->TypeOfAccounts->delete($typeOfAccount)) {
            $this->Flash->success(__('The type of account has been deleted.'));
        } else {
            $this->Flash->error(__('The type of account could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
