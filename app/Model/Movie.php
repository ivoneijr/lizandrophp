<?php
App::uses('AppModel', 'Model');
/**
 * Movie Model
 *
 * @property Session $Session
 * @property Actor $Actor
 */
class Movie extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'premiere_date' => array(
			'datetime' => array(
				'rule' => array('datetime'),
				//'message' => 'Your custom message here',
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
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'censorship' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sinopse' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $actAs = array(
		'Upload.Upload'=> array(
			'cover'
		)
	);

	public function beforeSave($options = array()){  
	    if(!empty($this->data[$this->alias]['cover']['name'])) {  
	        $this->data[$this->alias]['cover'] = $this->upload($this->data[$this->alias]['cover']);  
	    } else {  
	        unset($this->data[$this->alias]['cover']);  
	    }  
	}

	public function upload($imagem = array(), $dir = 'img'){  
	    $dir = WWW_ROOT.$dir.DS;  
	  
	    if(($imagem['error']!=0) and ($imagem['size']==0)) {  
	        throw new NotImplementedException('Alguma coisa deu errado, o upload retornou erro '.$imagem['error'].' e tamanho '.$imagem['size']);  
	    }  
	  
	    $this->checa_dir($dir);  
	  
	    $imagem = $this->checa_nome($imagem, $dir);  
	  
	    $this->move_arquivos($imagem, $dir);  
	  
	    return $imagem['name'];  
	}    
	public function checa_dir($dir)  
{  
    App::uses('Folder', 'Utility');  
    $folder = new Folder();  
    if (!is_dir($dir)){  
        $folder->create($dir);  
    }  
}  
  
	/** 
	 * Verifica se o nome do arquivo já existe, se existir adiciona um numero ao nome e verifica novamente 
	 * @access public 
	 * @param Array $imagem 
	 * @param String $data 
	 * @return nome da imagem 
	*/   
	public function checa_nome($imagem, $dir)  
	{  
	    $imagem_info = pathinfo($dir.$imagem['name']);  
	    $imagem_nome = $this->trata_nome($imagem_info['filename']).'.'.$imagem_info['extension'];  
	    debug($imagem_nome);  
	    $conta = 2;  
	    while (file_exists($dir.$imagem_nome)) {  
	        $imagem_nome  = $this->trata_nome($imagem_info['filename']).'-'.$conta;  
	        $imagem_nome .= '.'.$imagem_info['extension'];  
	        $conta++;  
	        debug($imagem_nome);  
	    }  
	    $imagem['name'] = $imagem_nome;  
	    return $imagem;  
	}  
	  
	/** 
	 * Trata o nome removendo espaços, acentos e caracteres em maiúsculo. 
	 * @access public 
	 * @param Array $imagem 
	 * @param String $data 
	*/   
	public function trata_nome($imagem_nome)  
	{  
	    $imagem_nome = strtolower(Inflector::slug($imagem_nome,'-'));  
	    return $imagem_nome;  
	}  
	  
	/** 
	 * Move o arquivo para a pasta de destino. 
	 * @access public 
	 * @param Array $imagem 
	 * @param String $data 
	*/   
	public function move_arquivos($imagem, $dir)  
	{  
	    App::uses('File', 'Utility');  
	    $arquivo = new File($imagem['tmp_name']);  
	    $arquivo->copy($dir.$imagem['name']);  
	    $arquivo->close();  
	}  


/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'MovieSession' => array(
			'className' => 'MovieSession',
			'foreignKey' => 'movie_id',
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


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Actor' => array(
			'className' => 'Actor',
			'joinTable' => 'actors_movies',
			'foreignKey' => 'movie_id',
			'associationForeignKey' => 'actor_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
