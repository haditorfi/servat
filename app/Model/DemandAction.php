<?php
App::uses('AppModel', 'Model');
/**
 * DemandAction Model
 *
 * @property Demand $Demand
 */
class DemandAction extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'demand_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'action' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Demand' => array(
			'className' => 'Demand',
			'foreignKey' => 'demand_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
