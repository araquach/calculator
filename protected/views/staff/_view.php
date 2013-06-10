<?php
/* @var $this StaffController */
/* @var $model Staff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('person_id')); ?>:</b>
	<?php echo CHtml::encode($data->person->getFullName()); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_role_id')); ?>:</b>
	<?php echo CHtml::encode($data->staffRole->description); ?>
	<br />


</div>