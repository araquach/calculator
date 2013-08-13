<?php
/* @var $this StaffRoleController */
/* @var $model StaffRole */

$this->breadcrumbs=array(
	'Staff Roles'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List StaffRole', 'url'=>array('index')),
	array('label'=>'Create StaffRole', 'url'=>array('create')),
	array('label'=>'Update StaffRole', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete StaffRole', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StaffRole', 'url'=>array('admin')),
);
?>

<h1>View StaffRole #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'description',
		'cpm',
	),
)); ?>
