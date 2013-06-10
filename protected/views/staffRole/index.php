<?php
/* @var $this StaffRoleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Staff Roles',
);

$this->menu=array(
	array('label'=>'Create StaffRole', 'url'=>array('create')),
	array('label'=>'Manage StaffRole', 'url'=>array('admin')),
);
?>

<h1>Staff Roles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
