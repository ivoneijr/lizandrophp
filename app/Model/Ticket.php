<?php
App::uses('AppModel', 'Model');
/**
 * Ticket Model
 *
 * @property User $User
 * @property MovieSession $MovieSession
 */
class Ticket extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MovieSession' => array(
			'className' => 'MovieSession',
			'foreignKey' => 'movie_session_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
