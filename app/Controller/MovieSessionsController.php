<?php
App::uses('AppController', 'Controller');
/**
 * MovieSessions Controller
 *
 * @property MovieSession $MovieSession
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MovieSessionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MovieSession->recursive = 0;
		$this->set('movieSessions', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->MovieSession->exists($id)) {
			throw new NotFoundException(__('Invalid movie session'));
		}
		$options = array('conditions' => array('MovieSession.' . $this->MovieSession->primaryKey => $id));
		$this->set('movieSession', $this->MovieSession->find('first', $options));
	}

	public function admin_index() {
		$this->MovieSession->recursive = 0;
		$this->set('movieSessions', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->MovieSession->exists($id)) {
			throw new NotFoundException(__('Invalid movie session'));
		}
		$options = array('conditions' => array('MovieSession.' . $this->MovieSession->primaryKey => $id));
		$this->set('movieSession', $this->MovieSession->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MovieSession->create();
			if ($this->MovieSession->save($this->request->data)) {
				$this->Session->setFlash(__('The movie session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie session could not be saved. Please, try again.'));
			}
		}
		$rooms = $this->MovieSession->Room->find('list');
		$movies = $this->MovieSession->Movie->find('list');
		$this->set(compact('rooms', 'movies'));
	}

	public function admin_edit($id = null) {
		if (!$this->MovieSession->exists($id)) {
			throw new NotFoundException(__('Invalid movie session'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MovieSession->save($this->request->data)) {
				$this->Session->setFlash(__('The movie session has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie session could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MovieSession.' . $this->MovieSession->primaryKey => $id));
			$this->request->data = $this->MovieSession->find('first', $options);
		}
		$rooms = $this->MovieSession->Room->find('list');
		$movies = $this->MovieSession->Movie->find('list');
		$this->set(compact('rooms', 'movies'));
	}

	public function admin_delete($id = null) {
		$this->MovieSession->id = $id;
		if (!$this->MovieSession->exists()) {
			throw new NotFoundException(__('Invalid movie session'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MovieSession->delete()) {
			$this->Session->setFlash(__('The movie session has been deleted.'));
		} else {
			$this->Session->setFlash(__('The movie session could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
