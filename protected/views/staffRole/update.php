<?php
/* @var $this StaffRoleController */
/* @var $model StaffRole */

$this->breadcrumbs=array(
	'Staff Roles'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StaffRole', 'url'=>array('index')),
	array('label'=>'Create StaffRole', 'url'=>array('create')),
	array('label'=>'View StaffRole', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage StaffRole', 'url'=>array('admin')),
);
?>

<h1>Update StaffRole <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>