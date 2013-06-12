<?php
/* @var $this StaffController */
/* @var $model Staff */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'staff-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->dropDownList($model, 'person_id', CHtml::listData(
		Person::model()->findAll(), 'id', 'fullName'),
		array('prompt' => 'Select Person')); ?>
		<?php echo $form->error($model,'person_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_role_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_role_id', CHtml::listData(
		StaffRole::model()->findAll(), 'id', 'description'),
		array('prompt' => 'Select Role')); ?>
		<?php echo $form->error($model,'staff_role_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->