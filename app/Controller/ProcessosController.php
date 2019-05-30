<?php
App::uses('AppController', 'Controller');
/**
 * Processos Controller
 *
 * @property Processo $Processo
 * @property PaginatorComponent $Paginator
 */
class ProcessosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Processo->recursive = 0;
		$this->set('processos', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Processo->exists($id)) {
			throw new NotFoundException(__(' processo inválido'));
		}
		$options = array('conditions' => array('Processo.' . $this->Processo->primaryKey => $id));
		$this->set('processo', $this->Processo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Processo->create();
			if ($this->Processo->save($this->request->data)) {
				$this->Session->setFlash(__(' processo gravado com sucesso!'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O processo não pode ser gravado!'), 'flash/error');
			}
		}
		$assessores = $this->Processo->Assessore->find('list');
		$this->set(compact('assessores'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Processo->id = $id;
		if (!$this->Processo->exists($id)) {
			throw new NotFoundException(__('Invalid processo'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Processo->save($this->request->data)) {
				$this->Session->setFlash(__('processo gravado com sucesso!'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O processo não pode ser gravado!'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Processo.' . $this->Processo->primaryKey => $id));
			$this->request->data = $this->Processo->find('first', $options);
		}
		$assessores = $this->Processo->Assessore->find('list');
		$this->set(compact('assessores'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Processo->id = $id;
		if (!$this->Processo->exists()) {
			throw new NotFoundException(__('processo inválido'));
		}
		if ($this->Processo->delete()) {
			$this->Session->setFlash(__('Processo removido'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Processo não foi removido'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
