<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lugar Controller
 *
 *
 * @method \App\Model\Entity\Lugar[] paginate($object = null, array $settings = [])
 */
class LugarController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $lugar = $this->paginate($this->Lugar);

        $this->set(compact('lugar'));
        $this->set('_serialize', ['lugar']);
    }

    /**
     * View method
     *
     * @param string|null $id Lugar id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lugar = $this->Lugar->get($id, [
            'contain' => []
        ]);

        $this->set('lugar', $lugar);
        $this->set('_serialize', ['lugar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lugar = $this->Lugar->newEntity();
        if ($this->request->is('post')) {
            $lugar = $this->Lugar->patchEntity($lugar, $this->request->getData());
            if ($this->Lugar->save($lugar)) {
                $this->Flash->success(__('The lugar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lugar could not be saved. Please, try again.'));
        }
        $this->set(compact('lugar'));
        $this->set('_serialize', ['lugar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lugar id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lugar = $this->Lugar->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lugar = $this->Lugar->patchEntity($lugar, $this->request->getData());
            if ($this->Lugar->save($lugar)) {
                $this->Flash->success(__('The lugar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lugar could not be saved. Please, try again.'));
        }
        $this->set(compact('lugar'));
        $this->set('_serialize', ['lugar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lugar id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lugar = $this->Lugar->get($id);
        if ($this->Lugar->delete($lugar)) {
            $this->Flash->success(__('The lugar has been deleted.'));
        } else {
            $this->Flash->error(__('The lugar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
