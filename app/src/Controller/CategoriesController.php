<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categories Controller
 *
 * @property \App\Model\Table\CategoriesTable $Categories
 *
 * @method \App\Model\Entity\Category[] paginate($object = null, array $settings = [])
 */
class CategoriesController extends AppController
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
            'contain' => ['Users']
        ];
        $categories = $this->paginate($this->Categories);

        $this->set(compact('categories'));
        $this->set('_serialize', ['categories']);
    }

    /**
     * View method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($access) {
            $category = $this->Categories->get($id, [
                'contain' => ['Users', 'Products']
            ]);

            $this->set('category', $category);
            $this->set('_serialize', ['category']);
        } else {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao tem permissao para acessar essa pagina');
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($access) {
            $category = $this->Categories->newEntity();
            if ($this->request->is('post')) {
                $category = $this->Categories->patchEntity($category, $this->request->getData());
                if ($this->Categories->save($category)) {
                    $this->Flash->success(__('The category has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The category could not be saved. Please, try again.'));
            }
            $users = $this->Categories->Users->find('list', ['limit' => 200]);
            $products = $this->Categories->Products->find('list', ['limit' => 200]);
            $this->set(compact('category', 'users', 'products'));
            $this->set('_serialize', ['category']);            
        } else {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao tem permissao para acessar essa pagina');
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($access) {
            $category = $this->Categories->get($id, [
                'contain' => ['Products']
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $category = $this->Categories->patchEntity($category, $this->request->getData());
                if ($this->Categories->save($category)) {
                    $this->Flash->success(__('The category has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The category could not be saved. Please, try again.'));
            }
            $users = $this->Categories->Users->find('list', ['limit' => 200]);
            $products = $this->Categories->Products->find('list', ['limit' => 200]);
            $this->set(compact('category', 'users', 'products'));
            $this->set('_serialize', ['category']);
        } else {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao tem permissao para acessar essa pagina');
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Category id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($access) {
            $this->request->allowMethod(['post', 'delete']);
            $category = $this->Categories->get($id);
            if ($this->Categories->delete($category)) {
                $this->Flash->success(__('The category has been deleted.'));
            } else {
                $this->Flash->error(__('The category could not be deleted. Please, try again.'));
            }

            return $this->redirect(['action' => 'index']);            
        } else {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao tem permissao para acessar essa pagina');
        }
    }    
}
