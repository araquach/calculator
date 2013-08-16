<?php
/* @var $this ServiceController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>This is the pricing page</h1>


<?php// echo $data ?>


<h2>Select a level of stylist</h2>



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
		<?php echo $form->labelEx($model,'service'); ?>
		<?php echo $form->dropDownList($model, 'service', CHtml::listData(
		Service::model()->findAll(), 'id', 'description'),
		array('prompt' => 'Select Service')); ?>
		<?php echo $form->error($model,'service'); ?>
	</div>	

	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->




