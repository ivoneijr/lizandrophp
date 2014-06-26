<?php
App::uses('AppController', 'Controller');
/**
 * Movies Controller
 *
 * @property Movie $Movie
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MoviesController extends AppController {

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
		$this->Movie->recursive = 0;
		$this->set('movies', $this->Paginator->paginate());
		$current_movie_session = $this->Movie->MovieSession->find('first',array('conditions'=> array('NOW() BETWEEN MovieSession.start_date AND MovieSession.end_date')));
		$this->set(compact('current_movie_session'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Movie->exists($id)) {
			throw new NotFoundException(__('Invalid movie'));
		}
		$options = array('conditions' => array('Movie.' . $this->Movie->primaryKey => $id));
		$this->set('movie', $this->Movie->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Movie->create();
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash(__('The movie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.'));
			}
		}
		$actors = $this->Movie->Actor->find('list');
		$this->set(compact('actors'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Movie->exists($id)) {
			throw new NotFoundException(__('Invalid movie'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash(__('The movie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Movie.' . $this->Movie->primaryKey => $id));
			$this->request->data = $this->Movie->find('first', $options);
		}
		
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Movie->id = $id;
		if (!$this->Movie->exists()) {
			throw new NotFoundException(__('Invalid movie'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Movie->delete()) {
			$this->Session->setFlash(__('The movie has been deleted.'));
		} else {
			$this->Session->setFlash(__('The movie could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Movie->recursive = 0;
		$this->set('movies', $this->Paginator->paginate());
		$current_movie_session = $this->Movie->MovieSession->find('first',array('conditions'=> array('NOW() BETWEEN MovieSession.start_date AND MovieSession.end_date')));
		$this->set(compact('current_movie_session'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Movie->exists($id)) {
			throw new NotFoundException(__('Invalid movie'));
		}
		$options = array('conditions' => array('Movie.' . $this->Movie->primaryKey => $id));
		$this->set('movie', $this->Movie->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Movie->create();
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash(__('The movie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.'));
			}
		}
		$actors = $this->Movie->Actor->find('list');
		$this->set(compact('actors'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Movie->exists($id)) {
			throw new NotFoundException(__('Invalid movie'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Movie->save($this->request->data)) {
				$this->Session->setFlash(__('The movie has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The movie could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Movie.' . $this->Movie->primaryKey => $id));
			$this->request->data = $this->Movie->find('first', $options);
		}
		$actors = $this->Movie->Actor->find('list');
		$this->set(compact('actors'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Movie->id = $id;
		if (!$this->Movie->exists()) {
			throw new NotFoundException(__('Invalid movie'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Movie->delete()) {
			$this->Session->setFlash(__('The movie has been deleted.'));
		} else {
			$this->Session->setFlash(__('The movie could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
