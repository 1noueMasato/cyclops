<?php
declare(strict_types=1);

namespace App\Controller;

// use App\Controller\Component\S3Component;

/**
 * Content Controller
 *
 * @method \App\Model\Entity\Content[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContentController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('S3');
        $this->loadComponent('Security', ['blackholeCallback' => 'blackhole']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        // $s3 = new S3Component();
        $this->S3->listingAllBuckets();
        $this->S3->putObjectBuckets();
        // $content = $this->paginate($this->Content);

        // $this->set(compact('content'));
    }

    /**
     * View method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        // $content = $this->Content->get($id, [
        //     'contain' => [],
        // ]);

        // $this->set(compact('content'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        // $content = $this->Content->newEmptyEntity();
        // if ($this->request->is('post')) {
        //     $content = $this->Content->patchEntity($content, $this->request->getData());
        //     if ($this->Content->save($content)) {
        //         $this->Flash->success(__('The content has been saved.'));

        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The content could not be saved. Please, try again.'));
        // }
        // $this->set(compact('content'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        // $content = $this->Content->get($id, [
        //     'contain' => [],
        // ]);
        // if ($this->request->is(['patch', 'post', 'put'])) {
        //     $content = $this->Content->patchEntity($content, $this->request->getData());
        //     if ($this->Content->save($content)) {
        //         $this->Flash->success(__('The content has been saved.'));

        //         return $this->redirect(['action' => 'index']);
        //     }
        //     $this->Flash->error(__('The content could not be saved. Please, try again.'));
        // }
        // $this->set(compact('content'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Content id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        // $this->request->allowMethod(['post', 'delete']);
        // $content = $this->Content->get($id);
        // if ($this->Content->delete($content)) {
        //     $this->Flash->success(__('The content has been deleted.'));
        // } else {
        //     $this->Flash->error(__('The content could not be deleted. Please, try again.'));
        // }

        // return $this->redirect(['action' => 'index']);
    }
}
