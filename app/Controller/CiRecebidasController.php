<?php
App::uses('AppController', 'Controller');
/**
 * CiRecebidas Controller
 *
 * @property CiRecebida $CiRecebida
 * @property PaginatorComponent $Paginator
 */
class CiRecebidasController extends AppController {

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
		$this->CiRecebida->recursive = 0;
		$this->set('ciRecebidas', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CiRecebida->exists($id)) {
			throw new NotFoundException(__('Invalid ci recebida'));
		}
		$options = array('conditions' => array('CiRecebida.' . $this->CiRecebida->primaryKey => $id));
		$this->set('ciRecebida', $this->CiRecebida->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CiRecebida->create();
			if ($this->CiRecebida->save($this->request->data)) {
				$this->Session->setFlash(__('The ci recebida has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ci recebida could not be saved. Please, try again.'), 'flash/error');
			}
		}
		$assessores = $this->CiRecebida->Assessore->find('list');
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
        $this->CiRecebida->id = $id;
		if (!$this->CiRecebida->exists($id)) {
			throw new NotFoundException(__('Invalid ci recebida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CiRecebida->save($this->request->data)) {
				$this->Session->setFlash(__('The ci recebida has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ci recebida could not be saved. Please, try again.'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('CiRecebida.' . $this->CiRecebida->primaryKey => $id));
			$this->request->data = $this->CiRecebida->find('first', $options);
		}
		$assessores = $this->CiRecebida->Assessore->find('list');
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
		$this->CiRecebida->id = $id;
		if (!$this->CiRecebida->exists()) {
			throw new NotFoundException(__('Invalid ci recebida'));
		}
		if ($this->CiRecebida->delete()) {
			$this->Session->setFlash(__('Ci recebida deleted'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ci recebida was not deleted'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
