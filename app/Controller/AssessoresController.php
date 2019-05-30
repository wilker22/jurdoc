<?php
App::uses('AppController', 'Controller');
/**
 * Assessores Controller
 *
 * @property Assessore $Assessore
 * @property PaginatorComponent $Paginator
 */
class AssessoresController extends AppController {

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
		$this->Assessore->recursive = 0;
		$this->set('assessores', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->helpers[] = "Time";
		$this->helpers[] = "Number";
		
		if (!$this->Assessore->exists($id)) {
			throw new NotFoundException(__('Invalid assessore'));
		}
		$options = array('conditions' => array('Assessore.' . $this->Assessore->primaryKey => $id));
		$this->set('assessore', $this->Assessore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Assessore->create();
			if ($this->Assessore->save($this->request->data)) {
				$this->Session->setFlash(__('The assessore has been saved'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O assessor não pode ser gravado!'), 'flash/error');
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
        $this->Assessore->id = $id;
		if (!$this->Assessore->exists($id)) {
			throw new NotFoundException(__('Invalid assessore'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Assessore->save($this->request->data)) {
				$this->Session->setFlash(__('Assessor gravado com sucesso!'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('O assessor não pode ser gravado!'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Assessore.' . $this->Assessore->primaryKey => $id));
			$this->request->data = $this->Assessore->find('first', $options);
		}
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
		$this->Assessore->id = $id;
		if (!$this->Assessore->exists()) {
			throw new NotFoundException(__('Invalid assessore'));
		}
		if ($this->Assessore->delete()) {
			$this->Session->setFlash(__('Assessor removido'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Assessor não foi removido'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
