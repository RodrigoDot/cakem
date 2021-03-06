<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CategoriesProducts Controller
 *
 * @property \App\Model\Table\CategoriesProductsTable $CategoriesProducts
 *
 * @method \App\Model\Entity\CategoriesProduct[] paginate($object = null, array $settings = [])
 */
class CategoriesProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    
    public function initialize() {
        parent::initialize();
        $action = $this->request->param('action');
        if($this->Auth->user('role') !== 'admin' && $action !== 'index') {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao pode acessar essa area');
        }
    }
    
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Categories', 'Products']
        ];
        $categoriesProducts = $this->paginate($this->CategoriesProducts);

        $this->set(compact('categoriesProducts'));
        $this->set('_serialize', ['categoriesProducts']);
    }

    /**
     * View method
     *
     * @param string|null $id Categories Product id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categoriesProduct = $this->CategoriesProducts->get($id, [
            'contain' => ['Users', 'Categories', 'Products']
        ]);

        $this->set('categoriesProduct', $categoriesProduct);
        $this->set('_serialize', ['categoriesProduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categoriesProduct = $this->CategoriesProducts->newEntity();
        if ($this->request->is('post')) {
            $categoriesProduct = $this->CategoriesProducts->patchEntity($categoriesProduct, $this->request->getData());
            if ($this->CategoriesProducts->save($categoriesProduct)) {
                $this->Flash->success(__('The categories product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categories product could not be saved. Please, try again.'));
        }
        $users = $this->CategoriesProducts->Users->find('list', ['limit' => 200]);
        $categories = $this->CategoriesProducts->Categories->find('list', ['limit' => 200]);
        $products = $this->CategoriesProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('categoriesProduct', 'users', 'categories', 'products'));
        $this->set('_serialize', ['categoriesProduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Categories Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categoriesProduct = $this->CategoriesProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categoriesProduct = $this->CategoriesProducts->patchEntity($categoriesProduct, $this->request->getData());
            if ($this->CategoriesProducts->save($categoriesProduct)) {
                $this->Flash->success(__('The categories product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categories product could not be saved. Please, try again.'));
        }
        $users = $this->CategoriesProducts->Users->find('list', ['limit' => 200]);
        $categories = $this->CategoriesProducts->Categories->find('list', ['limit' => 200]);
        $products = $this->CategoriesProducts->Products->find('list', ['limit' => 200]);
        $this->set(compact('categoriesProduct', 'users', 'categories', 'products'));
        $this->set('_serialize', ['categoriesProduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Categories Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categoriesProduct = $this->CategoriesProducts->get($id);
        if ($this->CategoriesProducts->delete($categoriesProduct)) {
            $this->Flash->success(__('The categories product has been deleted.'));
        } else {
            $this->Flash->error(__('The categories product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
