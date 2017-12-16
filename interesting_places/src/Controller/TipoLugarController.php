<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoLugar Controller
 *
 *
 * @method \App\Model\Entity\TipoLugar[] paginate($object = null, array $settings = [])
 */
class TipoLugarController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tipoLugar = $this->paginate($this->TipoLugar);

        $this->set(compact('tipoLugar'));
        $this->set('_serialize', ['tipoLugar']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Lugar id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoLugar = $this->TipoLugar->get($id, [
            'contain' => []
        ]);

        $this->set('tipoLugar', $tipoLugar);
        $this->set('_serialize', ['tipoLugar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoLugar = $this->TipoLugar->newEntity();
        if ($this->request->is('post')) {
            $tipoLugar = $this->TipoLugar->patchEntity($tipoLugar, $this->request->getData());
            if ($this->TipoLugar->save($tipoLugar)) {
                $this->Flash->success(__('The tipo lugar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo lugar could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoLugar'));
        $this->set('_serialize', ['tipoLugar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Lugar id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoLugar = $this->TipoLugar->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoLugar = $this->TipoLugar->patchEntity($tipoLugar, $this->request->getData());
            if ($this->TipoLugar->save($tipoLugar)) {
                $this->Flash->success(__('The tipo lugar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo lugar could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoLugar'));
        $this->set('_serialize', ['tipoLugar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Lugar id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoLugar = $this->TipoLugar->get($id);
        if ($this->TipoLugar->delete($tipoLugar)) {
            $this->Flash->success(__('The tipo lugar has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo lugar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
