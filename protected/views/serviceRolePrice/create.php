<?php
/* @var $this ServiceRolePriceController */
/* @var $model ServiceRolePrice */

$this->breadcrumbs=array(
	'Service Role Prices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ServiceRolePrice', 'url'=>array('index')),
	array('label'=>'Manage ServiceRolePrice', 'url'=>array('admin')),
);
?>

<h1>Create ServiceRolePrice</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>