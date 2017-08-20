<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    
    public function initialize() {
        parent::initialize();
    }
    
    public function logout() {
        $this->Flash->success('Voce nao esta mais logado');
        return $this->redirect($this->Auth->logout());
    }
    
    
    public function login () {
        if($this->request->is('post')) {
            $user = $this->Auth->identify();
            if($user) {
                $this->Auth->setUser($user);
                $this->Users->save($user);
                if($user['role'] == 'admin'){
                    return $this->redirect($this->Auth->redirectUrl(['controller'=>'users', 'action'=>'index'])); 
                } else {
                    return $this->redirect($this->Auth->redirectUrl(['controller'=>'users', 'action'=>'indexUser'])); 
                }
            }
            $this->Flash->error('Nao foi possivel fazer login, usuario ou senha invalidos');
        }
    }    
    
    public function index()
    {
        if($this->Auth->user('role') == 'admin') {
            $users = $this->paginate($this->Users);
            $this->set(compact('users'));
            $this->set('_serialize', ['users']);
        } else {
            return $this->redirect($this->Auth->redirectUrl(['controller'=>'users', 'action'=>'indexUser'])); 
        }
    }

    public function indexUser()
    {
        $userId = $this->Auth->user('id');
        $user = $this->Users->get($userId);
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }
    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        if($this->Auth->user('role') == 'admin') {
            $user = $this->Users->get($id, [
                'contain' => ['Categories', 'CategoriesProducts', 'Products', 'Stock', 'StockIn', 'StockOut']
            ]);
            $this->set('user', $user);
            $this->set('_serialize', ['user']);
        } else if($this->Auth->user('role') == 'user' && $this->Auth->user('id') == $id) {
            $user = $this->Users->get($id, [
                'contain' => ['Categories', 'CategoriesProducts', 'Products', 'Stock', 'StockIn', 'StockOut']
            ]);

            $this->set('user', $user);
            $this->set('_serialize', ['user']);
        } else {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao pode acessar essa pagina');
        }  
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if($this->Auth->user()) {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao pode acessar essa pagina agora');
        } else {
            $user = $this->Users->newEntity();

            if ($this->request->is('post')) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));
                    var_dump($user);
                    //$this->Auth->setUser($user); //seta como usuario logado
                    //return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        if($this->Auth->user('role') == 'admin') {
            $user = $this->Users->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
        } else if($this->Auth->user('role') == 'user' && $this->Auth->user('id') == $id) {
            $user = $this->Users->get($id, [
                'contain' => []
            ]);
            if ($this->request->is(['patch', 'post', 'put'])) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('The user has been saved.'));

                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
            $this->set(compact('user'));
            $this->set('_serialize', ['user']);
        } else {
            $this->redirect(['controller'=>'users', 'action'=>'index']);
            $this->Flash->error('Voce nao pode acessar essa pagina');
        }    
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        if($this->Auth->user('role') == 'admin' || $this->Auth->user('id') == $id) {
            $this->request->allowMethod(['post', 'delete']);
            $user = $this->Users->get($id);
            if ($this->Users->delete($user)) {
                $this->Flash->success(__('The user has been deleted.'));
            } else {
                $this->Flash->error(__('The user could not be deleted. Please, try again.'));
            }
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Voce nao tem permissao para deletar esse usuario'));
    }
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']);
    }
}
