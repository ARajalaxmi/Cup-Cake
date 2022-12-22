<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Patty Controller
 *
 * @property \App\Model\Table\PattyTable $Patty
 * @method \App\Model\Entity\Patty[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PattyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $patty = $this->paginate($this->Patty);

        $this->set(compact('patty'));
    }

    /**
     * View method
     *
     * @param string|null $id Patty id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $patty = $this->Patty->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('patty'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $patty = $this->Patty->newEmptyEntity();
        if ($this->request->is('post')) {
            $patty = $this->Patty->patchEntity($patty, $this->request->getData());
            if ($this->Patty->save($patty)) {
                $this->Flash->success(__('The patty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patty could not be saved. Please, try again.'));
        }
        $this->set(compact('patty'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Patty id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $patty = $this->Patty->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $patty = $this->Patty->patchEntity($patty, $this->request->getData());
            if ($this->Patty->save($patty)) {
                $this->Flash->success(__('The patty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The patty could not be saved. Please, try again.'));
        }
        $this->set(compact('patty'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Patty id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $patty = $this->Patty->get($id);
        if ($this->Patty->delete($patty)) {
            $this->Flash->success(__('The patty has been deleted.'));
        } else {
            $this->Flash->error(__('The patty could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
