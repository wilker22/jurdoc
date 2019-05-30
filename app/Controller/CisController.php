<?php
App::uses('AppController', 'Controller');
/**
 * Cis Controller
 *
 * @property Ci $Ci
 * @property PaginatorComponent $Paginator
 */
class CisController extends AppController {



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

		$this->helpers[] = "Time";
		$this->helpers[] = "Number";
		
		$this->Ci->recursive = 0;
		$this->set('cis', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Ci->exists($id)) {
			throw new NotFoundException(__('Invalid ci'));
		}
		$options = array('conditions' => array('Ci.' . $this->Ci->primaryKey => $id));
		$this->set('ci', $this->Ci->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Ci->create();
			if ($this->Ci->save($this->request->data)) {
				$this->Session->setFlash(__('CI gravada com sucesso!'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A CI não foi gravada, tente novamente!'), 'flash/error');
			}
		}
		$assessores = $this->Ci->Assessore->find('list');
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
        $this->Ci->id = $id;
		if (!$this->Ci->exists($id)) {
			throw new NotFoundException(__('Invalid ci'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ci->save($this->request->data)) {
				$this->Session->setFlash(__('CI gravada com sucesso!'), 'flash/success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('A CI não foi gravada, tente novamente!'), 'flash/error');
			}
		} else {
			$options = array('conditions' => array('Ci.' . $this->Ci->primaryKey => $id));
			$this->request->data = $this->Ci->find('first', $options);
		}
		$assessores = $this->Ci->Assessore->find('list');
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
		$this->Ci->id = $id;
		if (!$this->Ci->exists()) {
			throw new NotFoundException(__('Invalid ci'));
		}
		if ($this->Ci->delete()) {
			$this->Session->setFlash(__('CI removida'), 'flash/success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ci não foi removida!'), 'flash/error');
		$this->redirect(array('action' => 'index'));
	}}
