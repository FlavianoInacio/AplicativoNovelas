<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Novelas Controller
 *
 * @property \App\Model\Table\NovelasTable $Novelas
 */
class NovelasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $novelas = $this->paginate($this->Novelas);

        $this->set(compact('novelas'));
        $this->set('_serialize', ['novelas']);
    }

    /**
     * View method
     *
     * @param string|null $id Novela id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $novela = $this->Novelas->get($id, [
            'contain' => ['Capitulos']
        ]);

        $this->set('novela', $novela);
        $this->set('_serialize', ['novela']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $novela = $this->Novelas->newEntity();
        if ($this->request->is('post')) {
            $novela = $this->Novelas->patchEntity($novela, $this->request->data);
            if ($this->Novelas->save($novela)) {
                $this->Flash->success(__('The novela has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The novela could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('novela'));
        $this->set('_serialize', ['novela']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Novela id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $novela = $this->Novelas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $novela = $this->Novelas->patchEntity($novela, $this->request->data);
            if ($this->Novelas->save($novela)) {
                $this->Flash->success(__('The novela has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The novela could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('novela'));
        $this->set('_serialize', ['novela']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Novela id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $novela = $this->Novelas->get($id);
        if ($this->Novelas->delete($novela)) {
            $this->Flash->success(__('The novela has been deleted.'));
        } else {
            $this->Flash->error(__('The novela could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
