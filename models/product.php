<?php
class Product extends AppModel {
	var $name = 'Product';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Company' => array(
			'className' => 'Company',
			'joinTable' => 'products_companies',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'company_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
