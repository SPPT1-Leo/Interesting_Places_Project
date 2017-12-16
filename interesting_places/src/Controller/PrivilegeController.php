<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Privilege Controller
 *
 *
 * @method \App\Model\Entity\Privilege[] paginate($object = null, array $settings = [])
 */
class PrivilegeController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $privilege = $this->paginate($this->Privilege);

        $this->set(compact('privilege'));
        $this->set('_serialize', ['privilege']);
    }

    /**
     * View method
     *
     * @param string|null $id Privilege id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $privilege = $this->Privilege->get($id, [
            'contain' => []
        ]);

        $this->set('privilege', $privilege);
        $this->set('_serialize', ['privilege']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $privilege = $this->Privilege->newEntity();
        if ($this->request->is('post')) {
            $privilege = $this->Privilege->patchEntity($privilege, $this->request->getData());
            if ($this->Privilege->save($privilege)) {
                $this->Flash->success(__('The privilege has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The privilege could not be saved. Please, try again.'));
        }
        $this->set(compact('privilege'));
        $this->set('_serialize', ['privilege']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Privilege id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $privilege = $this->Privilege->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $privilege = $this->Privilege->patchEntity($privilege, $this->request->getData());
            if ($this->Privilege->save($privilege)) {
                $this->Flash->success(__('The privilege has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The privilege could not be saved. Please, try again.'));
        }
        $this->set(compact('privilege'));
        $this->set('_serialize', ['privilege']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Privilege id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $privilege = $this->Privilege->get($id);
        if ($this->Privilege->delete($privilege)) {
            $this->Flash->success(__('The privilege has been deleted.'));
        } else {
            $this->Flash->error(__('The privilege could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
