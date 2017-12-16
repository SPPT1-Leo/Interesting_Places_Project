<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ImagensLugar Controller
 *
 *
 * @method \App\Model\Entity\ImagensLugar[] paginate($object = null, array $settings = [])
 */
class ImagensLugarController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $imagensLugar = $this->paginate($this->ImagensLugar);

        $this->set(compact('imagensLugar'));
        $this->set('_serialize', ['imagensLugar']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagens Lugar id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagensLugar = $this->ImagensLugar->get($id, [
            'contain' => []
        ]);

        $this->set('imagensLugar', $imagensLugar);
        $this->set('_serialize', ['imagensLugar']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagensLugar = $this->ImagensLugar->newEntity();
        if ($this->request->is('post')) {
            $imagensLugar = $this->ImagensLugar->patchEntity($imagensLugar, $this->request->getData());
            if ($this->ImagensLugar->save($imagensLugar)) {
                $this->Flash->success(__('The imagens lugar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagens lugar could not be saved. Please, try again.'));
        }
        $this->set(compact('imagensLugar'));
        $this->set('_serialize', ['imagensLugar']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagens Lugar id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagensLugar = $this->ImagensLugar->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagensLugar = $this->ImagensLugar->patchEntity($imagensLugar, $this->request->getData());
            if ($this->ImagensLugar->save($imagensLugar)) {
                $this->Flash->success(__('The imagens lugar has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagens lugar could not be saved. Please, try again.'));
        }
        $this->set(compact('imagensLugar'));
        $this->set('_serialize', ['imagensLugar']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagens Lugar id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagensLugar = $this->ImagensLugar->get($id);
        if ($this->ImagensLugar->delete($imagensLugar)) {
            $this->Flash->success(__('The imagens lugar has been deleted.'));
        } else {
            $this->Flash->error(__('The imagens lugar could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
