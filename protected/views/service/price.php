<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
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
	
	<div class="boxRow">
		<?php echo $form->labelEx($model,'level'); ?>
		
		<?php $list = CHtml::listData(
		StaffRole::model()->findAll(), 'id', 'description'); ?>
		
		<?php foreach ($list as $key => $value) : ?>
		
		<div class="formBox">
			<?php echo $list[$key] ?>
			<?php echo $form->radioButton($model,'level', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
		</div>
		<?php endforeach; ?>
		<?php echo $form->error($model,'level'); ?>
		
	</div> <!--.boxRow-->
	
	<div class="boxRow">
	
		<?php echo $form->labelEx($model,'service1'); ?>
		<?php $list = CHtml::listData(
		Service::model()->findAll('category = 1'), 'id', 'description'); ?>
		
		<?php foreach ($list as $key => $value) : ?>
		
		<div class="formBox">
			<?php echo $list[$key] ?>
			<?php echo $form->radioButton($model,'service1', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
		</div>
		<?php endforeach; ?>
		<?php echo $form->error($model,'service1'); ?>
		
	</div> <!--.boxRow-->
	
	<div class="boxRow">
		<?php echo $form->labelEx($model,'service2'); ?>
		
		<?php $list = CHtml::listData(
		Service::model()->findAll('category = 2'), 'id', 'description'); ?>
		
		<?php foreach ($list as $key => $value) : ?>
		
		<div class="formBox">
			<?php echo $list[$key] ?>
			<?php echo $form->radioButton($model,'service2', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
		</div>
		<?php endforeach; ?>
		<?php echo $form->error($model,'service2'); ?>
	</div> <!--.boxRow-->
	

	<div class="row buttons">
	<?php echo CHtml::submitButton('Submit'); ?>	
	</div>
	
<?php $this->endWidget(); ?>


