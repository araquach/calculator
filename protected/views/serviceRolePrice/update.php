<?php
/* @var $this ServiceRolePriceController */
/* @var $model ServiceRolePrice */

$this->breadcrumbs=array(
	'Service Role Prices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ServiceRolePrice', 'url'=>array('index')),
	array('label'=>'Create ServiceRolePrice', 'url'=>array('create')),
	array('label'=>'View ServiceRolePrice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ServiceRolePrice', 'url'=>array('admin')),
);
?>

<h1>Update ServiceRolePrice <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>