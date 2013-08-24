<?php  
class TaskController extends Controller
{
	public function filters() {
		return array(
			'ajaxOnly + field'
		);
	}
	
	public function actionIndex() {
		$models = array();
		if(!empty($_POST['Task']))
		{
			foreach ($_POST['Task'] as $taskData) 
			{
				$model = new Task();
				$model->setAttributes($taskData);
				
			}
		}
	}
}