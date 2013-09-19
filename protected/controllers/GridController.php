<?php 

class GridController extends Controller {
	
	public function actionArray() 
	{
		$staff = array(
			array(
				'name'=>'Adam Carter',
				'id'=>'2',
				'hobbies'=>array('football','golf','tennis'),
				'forumName'=>'Jakata',
				'memberSince'=>'November 2003',
				'location'=>'Warrington',
				'duty'=>'Salon Owner',
				'active'=>'true',
			),
			
			array(
				'name'=>'Jimmi Sharpe',
				'id'=>'3',
				'forumName'=>'Jakata',
				'memberSince'=>'August 2008',
				'location'=>'Warrington',
				'duty'=>'Salon Manager',
				'active'=>'true',
			),
			
			array(
				'name'=>'Daniel Anderson',
				'id'=>'1',
				'forumName'=>'Daniel Anderson Hairdressing',
				'memberSince'=>'April 2012',
				'location'=>'Warrington',
				'duty'=>'Self Employed',
				'active'=>'true',
			),
			
			array(
				'name'=>'Paul Kemp',
				'id'=>'5',
				'forumName'=>'Paul Kemp Hairdressing',
				'memberSince'=>'July 2010',
				'location'=>'Warrington',
				'duty'=>'Salon Director',
				'active'=>'true',
			),
			
			array(
				'name'=>'Phillip Ryan',
				'id'=>'6',
				'forumName'=>'Paul Kemp Hairdressing',
				'memberSince'=>'January 2010',
				'location'=>'Liverpool',
				'duty'=>'Salon Owner',
				'active'=>'false',
			),
		);
		
		$dataProvider = new CArrayDataProvider($staff); 
		
		
		$this->render('index', array(
			'dataProvider'=>$dataProvider,
		));
	
	
		
	}
	
	
	
}