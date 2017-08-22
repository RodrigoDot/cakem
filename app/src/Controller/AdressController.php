<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Adress Controller
 *
 * @property \App\Model\Table\AdressTable $Adress
 *
 * @method \App\Model\Entity\Adres[] paginate($object = null, array $settings = [])
 */
class AdressController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        if($this->Auth->user('role') === 'admin') {
            $this->paginate = [
                'contain' => ['Users']
            ];
            $adress = $this->paginate($this->Adress);

            $this->set(compact('adress'));
            $this->set('_serialize', ['adress']);
        } else {
            $userId = $this->Auth->user('id');
            $this->paginate = [
                'contain' => ['Users']
            ];
            $adress = $this->Adress->find('all', array('conditions' => array('user_id' => $userId)));
            $this->paginate($adress);
            $this->set(compact('adress'));
            $this->set('_serialize', ['adress']);    
            }
    }
    
    
    /**
    
        // Using a query
        $comments = $this->paginate($commentsTable->find());

        // Using the model name.
        $comments = $this->paginate('Comments');

        // Using a table object.
        $comments = $this->paginate($commentTable);
    */

    /**
     * View method
     *
     * @param string|null $id Adres id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $adres = $this->Adress->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('adres', $adres);
        $this->set('_serialize', ['adres']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $adres = $this->Adress->newEntity();
        if ($this->request->is('post')) {
            $adres = $this->Adress->patchEntity($adres, $this->request->getData());
            if ($this->Adress->save($adres)) {
                $this->Flash->success(__('The adres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adres could not be saved. Please, try again.'));
        }
        $users = $this->Adress->Users->find('list', ['limit' => 200]);
        $this->set(compact('adres', 'users'));
        $this->set('_serialize', ['adres']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Adres id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $adres = $this->Adress->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $adres = $this->Adress->patchEntity($adres, $this->request->getData());
            if ($this->Adress->save($adres)) {
                $this->Flash->success(__('The adres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The adres could not be saved. Please, try again.'));
        }
        $users = $this->Adress->Users->find('list', ['limit' => 200]);
        $this->set(compact('adres', 'users'));
        $this->set('_serialize', ['adres']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Adres id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $adres = $this->Adress->get($id);
        if ($this->Adress->delete($adres)) {
            $this->Flash->success(__('The adres has been deleted.'));
        } else {
            $this->Flash->error(__('The adres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
