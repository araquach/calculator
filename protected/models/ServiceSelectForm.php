<?php

/**
 * ServiceSelectForm class.
 * This is the data structure for submitting the options
 * for getting a price based on role and service
 */
class ServiceSelectForm extends CFormModel
{
	public $level;
	public $service1;
	public $service2;
	public $service3;
	public $treatment;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			// name, email, subject and body are required
			array('level, service1', 'required'),
			array('service1, service2, service3, treatment', 'safe'),
		);
	}

	/**
	 * Declares customized attribute labels.
	 * If not declared here, an attribute would have a label that is
	 * the same as its name with the first letter in upper case.
	 */
	public function attributeLabels()
	{
		return array(
			'level' => 'Select a level',
			'service1' => 'Select a cutting/styling service',
			'service2' => 'Select a colour service',
			'service3' => 'Select a technical service',
			'treatment' => 'Select a treatment',
		);
		
	}
}