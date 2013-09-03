<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'select-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
		<?php echo $form->dropDownList($model, 'level', CHtml::listData(
		StaffRole::model()->findAll(), 'id', 'description'),
		array('prompt' => 'Select level')); ?>
		<?php echo $form->error($model,'level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'service1'); ?>
		<?php echo $form->dropDownList($model, 'service1', CHtml::listData(
		Service::model()->findAll(), 'id', 'description'),
		array('prompt' => 'Select Service')); ?>
		<?php echo $form->error($model,'service1'); ?>
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($model,'service2'); ?>
		<?php echo $form->dropDownList($model, 'service2', CHtml::listData(
		Service::model()->findAll(), 'id', 'description'),
		array('prompt' => 'Select Service')); ?>
		<?php echo $form->error($model,'service2'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div> 
