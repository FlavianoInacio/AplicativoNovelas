<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Capitulos Controller
 *
 * @property \App\Model\Table\CapitulosTable $Capitulos
 */
class CapitulosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Novelas', 'Dias']
        ];
        $capitulos = $this->paginate($this->Capitulos);

        $this->set(compact('capitulos'));
        $this->set('_serialize', ['capitulos']);
    }

    /**
     * View method
     *
     * @param string|null $id Capitulo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $capitulo = $this->Capitulos->get($id, [
            'contain' => ['Novelas', 'Dias']
        ]);

        $this->set('capitulo', $capitulo);
        $this->set('_serialize', ['capitulo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $capitulo = $this->Capitulos->newEntity();
        if ($this->request->is('post')) {
            $capitulo = $this->Capitulos->patchEntity($capitulo, $this->request->data);
            if ($this->Capitulos->save($capitulo)) {
                $this->Flash->success(__('The capitulo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The capitulo could not be saved. Please, try again.'));
            }
        }
        $novelas = $this->Capitulos->Novelas->find('list', ['limit' => 200]);
        $dias = $this->Capitulos->Dias->find('list', ['limit' => 200]);
        $this->set(compact('capitulo', 'novelas', 'dias'));
        $this->set('_serialize', ['capitulo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Capitulo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $capitulo = $this->Capitulos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $capitulo = $this->Capitulos->patchEntity($capitulo, $this->request->data);
            if ($this->Capitulos->save($capitulo)) {
                $this->Flash->success(__('The capitulo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The capitulo could not be saved. Please, try again.'));
            }
        }
        $novelas = $this->Capitulos->Novelas->find('list', ['limit' => 200]);
        $dias = $this->Capitulos->Dias->find('list', ['limit' => 200]);
        $this->set(compact('capitulo', 'novelas', 'dias'));
        $this->set('_serialize', ['capitulo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Capitulo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $capitulo = $this->Capitulos->get($id);
        if ($this->Capitulos->delete($capitulo)) {
            $this->Flash->success(__('The capitulo has been deleted.'));
        } else {
            $this->Flash->error(__('The capitulo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
