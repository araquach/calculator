<?php
/* @var $this ServiceRolePriceController */
/* @var $model ServiceRolePrice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'service-role-price-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	
	<div class="row">
		<?php echo $form->labelEx($model,'service_id'); ?>
		<?php echo $form->dropDownList($model, 'service_id', CHtml::listData(
		Service::model()->findAll(), 'id', 'description'),
		array('prompt' => 'Select Service')); ?>
		<?php echo $form->error($model,'service_id'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'staff_role_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_role_id', CHtml::listData(
		StaffRole::model()->findAll(), 'id', 'description'),
		array('prompt' => 'Select Level')); ?>
		<?php echo $form->error($model,'staff_role_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->