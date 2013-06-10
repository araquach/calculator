<?php
/* @var $this StaffRoleController */
/* @var $model StaffRole */

$this->breadcrumbs=array(
	'Staff Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StaffRole', 'url'=>array('index')),
	array('label'=>'Manage StaffRole', 'url'=>array('admin')),
);
?>

<h1>Create StaffRole</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>