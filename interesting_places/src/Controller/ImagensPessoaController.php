<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ImagensPessoa Controller
 *
 *
 * @method \App\Model\Entity\ImagensPessoa[] paginate($object = null, array $settings = [])
 */
class ImagensPessoaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $imagensPessoa = $this->paginate($this->ImagensPessoa);

        $this->set(compact('imagensPessoa'));
        $this->set('_serialize', ['imagensPessoa']);
    }

    /**
     * View method
     *
     * @param string|null $id Imagens Pessoa id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagensPessoa = $this->ImagensPessoa->get($id, [
            'contain' => []
        ]);

        $this->set('imagensPessoa', $imagensPessoa);
        $this->set('_serialize', ['imagensPessoa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagensPessoa = $this->ImagensPessoa->newEntity();
        if ($this->request->is('post')) {
            $imagensPessoa = $this->ImagensPessoa->patchEntity($imagensPessoa, $this->request->getData());
            if ($this->ImagensPessoa->save($imagensPessoa)) {
                $this->Flash->success(__('The imagens pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagens pessoa could not be saved. Please, try again.'));
        }
        $this->set(compact('imagensPessoa'));
        $this->set('_serialize', ['imagensPessoa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Imagens Pessoa id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagensPessoa = $this->ImagensPessoa->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagensPessoa = $this->ImagensPessoa->patchEntity($imagensPessoa, $this->request->getData());
            if ($this->ImagensPessoa->save($imagensPessoa)) {
                $this->Flash->success(__('The imagens pessoa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The imagens pessoa could not be saved. Please, try again.'));
        }
        $this->set(compact('imagensPessoa'));
        $this->set('_serialize', ['imagensPessoa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Imagens Pessoa id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagensPessoa = $this->ImagensPessoa->get($id);
        if ($this->ImagensPessoa->delete($imagensPessoa)) {
            $this->Flash->success(__('The imagens pessoa has been deleted.'));
        } else {
            $this->Flash->error(__('The imagens pessoa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
