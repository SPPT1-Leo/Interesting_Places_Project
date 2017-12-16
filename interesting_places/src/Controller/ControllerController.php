<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controller Controller
 *
 *
 * @method \App\Model\Entity\Controller[] paginate($object = null, array $settings = [])
 */
class ControllerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $controller = $this->paginate($this->Controller);

        $this->set(compact('controller'));
        $this->set('_serialize', ['controller']);
    }

    /**
     * View method
     *
     * @param string|null $id Controller id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controller = $this->Controller->get($id, [
            'contain' => []
        ]);

        $this->set('controller', $controller);
        $this->set('_serialize', ['controller']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controller = $this->Controller->newEntity();
        if ($this->request->is('post')) {
            $controller = $this->Controller->patchEntity($controller, $this->request->getData());
            if ($this->Controller->save($controller)) {
                $this->Flash->success(__('The controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controller could not be saved. Please, try again.'));
        }
        $this->set(compact('controller'));
        $this->set('_serialize', ['controller']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Controller id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controller = $this->Controller->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controller = $this->Controller->patchEntity($controller, $this->request->getData());
            if ($this->Controller->save($controller)) {
                $this->Flash->success(__('The controller has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controller could not be saved. Please, try again.'));
        }
        $this->set(compact('controller'));
        $this->set('_serialize', ['controller']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Controller id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controller = $this->Controller->get($id);
        if ($this->Controller->delete($controller)) {
            $this->Flash->success(__('The controller has been deleted.'));
        } else {
            $this->Flash->error(__('The controller could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
