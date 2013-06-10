<?php
/* @var $this ServiceRolePriceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Service Role Prices',
);

$this->menu=array(
	array('label'=>'Create ServiceRolePrice', 'url'=>array('create')),
	array('label'=>'Manage ServiceRolePrice', 'url'=>array('admin')),
);
?>

<h1>Service Role Prices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
