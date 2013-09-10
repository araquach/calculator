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
<<<<<<< HEAD
			array('level', 'required', 'message'=>'<p>You must select a level of stylist</p>'),
			array('service1', 'required', 'message'=>'<p>You must select a cutting/styling service</p>'),
=======
			array('level, service1', 'required'),
>>>>>>> c7784216f3d04fb66888345dfa6dd8113f7699a6
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
			'level' => '<h3>Select a level of Stylist</h3>',
			'service1' => '<h3>Cutting/styling services</h3>',
			'service2' => '<h3>Colour services</h3>',
			'service3' => '<h3>Technical services</h3>',
			'treatment' => '<h3>Treatments</h3>',
		);
		
	}
}