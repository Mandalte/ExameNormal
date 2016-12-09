<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UsersTopknots Controller
 *
 * @property \App\Model\Table\UsersTopknotsTable $UsersTopknots
 */
class UsersTopknotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Topknots']
        ];
        $usersTopknots = $this->paginate($this->UsersTopknots);

        $this->set(compact('usersTopknots'));
        $this->set('_serialize', ['usersTopknots']);
    }

    /**
     * View method
     *
     * @param string|null $id Users Topknot id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $usersTopknot = $this->UsersTopknots->get($id, [
            'contain' => ['Users', 'Topknots']
        ]);

        $this->set('usersTopknot', $usersTopknot);
        $this->set('_serialize', ['usersTopknot']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $usersTopknot = $this->UsersTopknots->newEntity();
        if ($this->request->is('post')) {
            $usersTopknot = $this->UsersTopknots->patchEntity($usersTopknot, $this->request->data);
            if ($this->UsersTopknots->save($usersTopknot)) {
                $this->Flash->success(__('The users topknot has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users topknot could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersTopknots->Users->find('list', ['limit' => 200]);
        $topknots = $this->UsersTopknots->Topknots->find('list', ['limit' => 200]);
        $this->set(compact('usersTopknot', 'users', 'topknots'));
        $this->set('_serialize', ['usersTopknot']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Users Topknot id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $usersTopknot = $this->UsersTopknots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $usersTopknot = $this->UsersTopknots->patchEntity($usersTopknot, $this->request->data);
            if ($this->UsersTopknots->save($usersTopknot)) {
                $this->Flash->success(__('The users topknot has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The users topknot could not be saved. Please, try again.'));
            }
        }
        $users = $this->UsersTopknots->Users->find('list', ['limit' => 200]);
        $topknots = $this->UsersTopknots->Topknots->find('list', ['limit' => 200]);
        $this->set(compact('usersTopknot', 'users', 'topknots'));
        $this->set('_serialize', ['usersTopknot']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Users Topknot id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $usersTopknot = $this->UsersTopknots->get($id);
        if ($this->UsersTopknots->delete($usersTopknot)) {
            $this->Flash->success(__('The users topknot has been deleted.'));
        } else {
            $this->Flash->error(__('The users topknot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
