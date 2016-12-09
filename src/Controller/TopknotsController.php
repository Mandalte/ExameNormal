<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Topknots Controller
 *
 * @property \App\Model\Table\TopknotsTable $Topknots
 */
class TopknotsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $topknots = $this->paginate($this->Topknots);

        $this->set(compact('topknots'));
        $this->set('_serialize', ['topknots']);
    }

    /**
     * View method
     *
     * @param string|null $id Topknot id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $topknot = $this->Topknots->get($id, [
            'contain' => ['Users', 'UsersTopknot']
        ]);

        $this->set('topknot', $topknot);
        $this->set('_serialize', ['topknot']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $topknot = $this->Topknots->newEntity();
        if ($this->request->is('post')) {
            $topknot = $this->Topknots->patchEntity($topknot, $this->request->data);
            if ($this->Topknots->save($topknot)) {
                $this->Flash->success(__('The topknot has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The topknot could not be saved. Please, try again.'));
            }
        }
        $users = $this->Topknots->Users->find('list', ['limit' => 200]);
        $this->set(compact('topknot', 'users'));
        $this->set('_serialize', ['topknot']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Topknot id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $topknot = $this->Topknots->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $topknot = $this->Topknots->patchEntity($topknot, $this->request->data);
            if ($this->Topknots->save($topknot)) {
                $this->Flash->success(__('The topknot has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The topknot could not be saved. Please, try again.'));
            }
        }
        $users = $this->Topknots->Users->find('list', ['limit' => 200]);
        $this->set(compact('topknot', 'users'));
        $this->set('_serialize', ['topknot']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Topknot id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $topknot = $this->Topknots->get($id);
        if ($this->Topknots->delete($topknot)) {
            $this->Flash->success(__('The topknot has been deleted.'));
        } else {
            $this->Flash->error(__('The topknot could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
