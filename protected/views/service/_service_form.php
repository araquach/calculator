<?php
/* @var $this ServiceController */
/* @var $model Service */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'select-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<div class="row" id="row1">
	<?php echo $form->labelEx($model,'level'); ?>
	<ul class="checklist level">
		<?php $list = CHtml::listData(
		StaffRole::model()->findAll(), 'id', 'description'); ?>
		<?php foreach ($list as $key => $value) : ?>
		<li>
			<?php echo $list[$key] ?>
			<?php echo $form->radioButton($model,'level', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
			<a class="checkbox-select" href="#">Select</a>
			<a class="checkbox-deselect" href="#">Cancel</a>
		</li>		
		<?php endforeach; ?>
		</ul>
		<?php echo $form->error($model,'level'); ?>
	</div> <!--.row-->
	<p>Use the menu below to select services by type</p>
	<ul class="selector">
		<li><a href="#row2">Cutting/Styling</a></li>
		<li><a href="#row3">Colouring</a></li>
		<li><a href="#row4">Technical</a></li>
		<li><a href="#row5">Treatments</a></li>
	</ul>
		
	<div class="choice row" id="row2">
		<?php echo $form->labelEx($model,'service1'); ?>
		<ul class="checklist service1">
		<?php $list = CHtml::listData(
		Service::model()->findAll('category = 1'), 'id', 'description'); ?>
		<?php foreach ($list as $key => $value) : ?>
		<li>
			<p><?php echo $list[$key] ?></p>
			<?php echo $form->radioButton($model,'service1', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
			<a class="checkbox-select" href="#">Select</a>
			<a class="checkbox-deselect" href="#">Cancel</a>
		</li>
		<?php endforeach; ?>
		</ul>
		<?php echo $form->error($model,'service1'); ?>
	</div> <!--.row-->
	
	<div class="choice row" id="row3">
		<?php echo $form->labelEx($model,'service2'); ?>
		<ul class="checklist service2">
		<?php $list = CHtml::listData(
		Service::model()->findAll('category = 2'), 'id', 'description'); ?>
		<?php foreach ($list as $key => $value) : ?>
		<li>
			<?php echo $list[$key] ?>
			<?php echo $form->radioButton($model,'service2', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
			<a class="checkbox-select" href="#">Select</a>
			<a class="checkbox-deselect" href="#">Cancel</a>
		</li>
		<?php endforeach; ?>
		</ul>
		<?php echo $form->error($model,'service2'); ?>
	</div> <!--.row-->	

	<div class="choice row" id="row4">
		<?php echo $form->labelEx($model,'service3'); ?>
		<ul class="checklist service3">
		<?php $list = CHtml::listData(
		Service::model()->findAll('category = 3'), 'id', 'description'); ?>
		<?php foreach ($list as $key => $value) : ?>
		<li>
			<?php echo $list[$key] ?>
			<?php echo $form->radioButton($model,'service3', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
			<a class="checkbox-select" href="#">Select</a>
			<a class="checkbox-deselect" href="#">Cancel</a>
		</li>
		<?php endforeach; ?>
		</ul>
		<?php echo $form->error($model,'service3'); ?>
	</div> <!--.row-->
	
	<div class="choice row" id="row5">
		<?php echo $form->labelEx($model,'treatment'); ?>
		<ul class="checklist treatment">
		<?php $list = CHtml::listData(
		Service::model()->findAll('category = 4'), 'id', 'description'); ?>
		<?php foreach ($list as $key => $value) : ?>
		<li>
			<?php echo $list[$key] ?>
			<?php echo $form->radioButton($model,'treatment', array(
			'value'=>$key,
			'uncheckValue'=>null)); ?>
			<a class="checkbox-select" href="#">Select</a>
			<a class="checkbox-deselect" href="#">Cancel</a>
		</li>
		<?php endforeach; ?>
		</ul>
		<?php echo $form->error($model,'treatment'); ?>
	</div> <!--.row-->	
	
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row buttons">
	<?php // echo CHtml::submitButton('submit'); ?>
	
	<?php echo CHtml::ajaxSubmitButton('Submit',
	Yii::app()->createUrl('service/price2'),
	    array(
	        'dataType' => 'json',
	        'type' => 'get',
	        'success' => 'function(result) {
	        	$("#totals").html(result.level + " " + result.service1 + " " + result.service2);
	        }'
		) //ajax
	);
	  ?>	
	</div>
	
<?php $this->endWidget(); ?>