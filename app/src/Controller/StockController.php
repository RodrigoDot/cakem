<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Stock Controller
 *
 * @property \App\Model\Table\StockTable $Stock
 *
 * @method \App\Model\Entity\Stock[] paginate($object = null, array $settings = [])
 */
class StockController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    
    public function initialize() {
        parent::initialize();
        if($this->Auth->user('role') !== 'admin') {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao pode acessar essa area');
        }
    }
    
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Products']
        ];
        $stock = $this->paginate($this->Stock);

        $this->set(compact('stock'));
        $this->set('_serialize', ['stock']);
    }

    /**
     * View method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $stock = $this->Stock->get($id, [
            'contain' => ['Users', 'Products']
        ]);

        $this->set('stock', $stock);
        $this->set('_serialize', ['stock']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $stock = $this->Stock->newEntity();
        if ($this->request->is('post')) {
            $stock = $this->Stock->patchEntity($stock, $this->request->getData());
            if ($this->Stock->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $users = $this->Stock->Users->find('list', ['limit' => 200]);
        $products = $this->Stock->Products->find('list', ['limit' => 200]);
        $this->set(compact('stock', 'users', 'products'));
        $this->set('_serialize', ['stock']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $stock = $this->Stock->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $stock = $this->Stock->patchEntity($stock, $this->request->getData());
            if ($this->Stock->save($stock)) {
                $this->Flash->success(__('The stock has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The stock could not be saved. Please, try again.'));
        }
        $users = $this->Stock->Users->find('list', ['limit' => 200]);
        $products = $this->Stock->Products->find('list', ['limit' => 200]);
        $this->set(compact('stock', 'users', 'products'));
        $this->set('_serialize', ['stock']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Stock id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $stock = $this->Stock->get($id);
        if ($this->Stock->delete($stock)) {
            $this->Flash->success(__('The stock has been deleted.'));
        } else {
            $this->Flash->error(__('The stock could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
