<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Dias Controller
 *
 * @property \App\Model\Table\DiasTable $Dias
 */
class DiasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $dias = $this->paginate($this->Dias);

        $this->set(compact('dias'));
        $this->set('_serialize', ['dias']);
    }

    /**
     * View method
     *
     * @param string|null $id Dia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dia = $this->Dias->get($id, [
            'contain' => ['Capitulos']
        ]);

        $this->set('dia', $dia);
        $this->set('_serialize', ['dia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dia = $this->Dias->newEntity();
        if ($this->request->is('post')) {
            $dia = $this->Dias->patchEntity($dia, $this->request->data);
            if ($this->Dias->save($dia)) {
                $this->Flash->success(__('The dia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dia'));
        $this->set('_serialize', ['dia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Dia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dia = $this->Dias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dia = $this->Dias->patchEntity($dia, $this->request->data);
            if ($this->Dias->save($dia)) {
                $this->Flash->success(__('The dia has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The dia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('dia'));
        $this->set('_serialize', ['dia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Dia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dia = $this->Dias->get($id);
        if ($this->Dias->delete($dia)) {
            $this->Flash->success(__('The dia has been deleted.'));
        } else {
            $this->Flash->error(__('The dia could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
