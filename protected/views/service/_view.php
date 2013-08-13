<?php
/* @var $this ServiceController */
/* @var $model Service */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iris_code')); ?>:</b>
	<?php echo CHtml::encode($data->iris_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
	<?php echo CHtml::encode($data->time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('offset')); ?>:</b>
	<?php echo CHtml::encode($data->offset); ?>
	<br />
	
	<?php echo CHtml::encode($data->calculatePrice()); ?>


</div>