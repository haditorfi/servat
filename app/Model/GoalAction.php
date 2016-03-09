<?php
App::uses('AppModel', 'Model');
/**
 * GoalAction Model
 *
 * @property Goal $Goal
 */
class GoalAction extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'goal_id' => array(
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
		'Goal' => array(
			'className' => 'Goal',
			'foreignKey' => 'goal_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
