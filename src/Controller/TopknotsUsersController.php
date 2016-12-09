<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TopknotsUsers Controller
 *
 * @property \App\Model\Table\TopknotsUsersTable $TopknotsUsers
 */
class TopknotsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Topknots', 'Users']
        ];
        $topknotsUsers = $this->paginate($this->TopknotsUsers);

        $this->set(compact('topknotsUsers'));
        $this->set('_serialize', ['topknotsUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Topknots User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $topknotsUser = $this->TopknotsUsers->get($id, [
            'contain' => ['Topknots', 'Users']
        ]);

        $this->set('topknotsUser', $topknotsUser);
        $this->set('_serialize', ['topknotsUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $topknotsUser = $this->TopknotsUsers->newEntity();
        if ($this->request->is('post')) {
            $topknotsUser = $this->TopknotsUsers->patchEntity($topknotsUser, $this->request->data);
            if ($this->TopknotsUsers->save($topknotsUser)) {
                $this->Flash->success(__('The topknots user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The topknots user could not be saved. Please, try again.'));
            }
        }
        $topknots = $this->TopknotsUsers->Topknots->find('list', ['limit' => 200]);
        $users = $this->TopknotsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('topknotsUser', 'topknots', 'users'));
        $this->set('_serialize', ['topknotsUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Topknots User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $topknotsUser = $this->TopknotsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $topknotsUser = $this->TopknotsUsers->patchEntity($topknotsUser, $this->request->data);
            if ($this->TopknotsUsers->save($topknotsUser)) {
                $this->Flash->success(__('The topknots user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The topknots user could not be saved. Please, try again.'));
            }
        }
        $topknots = $this->TopknotsUsers->Topknots->find('list', ['limit' => 200]);
        $users = $this->TopknotsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('topknotsUser', 'topknots', 'users'));
        $this->set('_serialize', ['topknotsUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Topknots User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $topknotsUser = $this->TopknotsUsers->get($id);
        if ($this->TopknotsUsers->delete($topknotsUser)) {
            $this->Flash->success(__('The topknots user has been deleted.'));
        } else {
            $this->Flash->error(__('The topknots user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
