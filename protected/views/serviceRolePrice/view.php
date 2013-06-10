<?php
/* @var $this ServiceRolePriceController */
/* @var $model ServiceRolePrice */

$this->breadcrumbs=array(
	'Service Role Prices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ServiceRolePrice', 'url'=>array('index')),
	array('label'=>'Create ServiceRolePrice', 'url'=>array('create')),
	array('label'=>'Update ServiceRolePrice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ServiceRolePrice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ServiceRolePrice', 'url'=>array('admin')),
);
?>

<h1>View ServiceRolePrice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'staffRole.description',
		'service.description',
		'price',
	),
)); ?>
