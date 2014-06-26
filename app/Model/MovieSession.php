<?php
App::uses('AppModel', 'Model');
/**
 * Session Model
 *
 * @property Room $Room
 * @property Movie $Movie
 * @property Ticket $Ticket
 */
class MovieSession extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'price' => array(
			'money' => array(
				'rule' => array('money'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'start_date' => array(
			'daterangeoverlap' => array(
				'rule' => array('daterangeoverlap'),
				'message' => 'Uma sessão não pode se sobrepor a outra.',
			),
			'datetime' => array(
				'rule' => array('datetime'),
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end_date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'room_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'movie_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
    );

    public function daterangeoverlap($check) {
   
        $countInnerOVerlap = $this->find('count',array('conditions'=> array(
        	'MovieSession.start_date >=' => $this->data[$this->alias]['start_date'],
        	'MovieSession.end_date <=' => $this->data[$this->alias]['end_date'],
        	'MovieSession.id <>' => isset($this->data[$this->alias]['id']) ? $this->data[$this->alias]['id'] : 0
        )));
        $countOuterOVerlap = $this->find('count',array('conditions'=> array(
        	'MovieSession.start_date <=' => $this->data[$this->alias]['start_date'],
        	'MovieSession.end_date >=' => $this->data[$this->alias]['end_date'],
        	'MovieSession.id <>' => isset($this->data[$this->alias]['id']) ? $this->data[$this->alias]['id'] : 0
        )));
        $count = $countInnerOVerlap + $countOuterOVerlap;
        return ($count < 1);
    }


	
	//WHERE new_start < existing_end AND new_end   > existing_start;

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Room' => array(
			'className' => 'Room',
			'foreignKey' => 'room_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Movie' => array(
			'className' => 'Movie',
			'foreignKey' => 'movie_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Ticket' => array(
			'className' => 'Ticket',
			'foreignKey' => 'movie_session_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
