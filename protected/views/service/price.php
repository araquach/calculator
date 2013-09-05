<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/button.js');?>


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
	<ul class="checklist">
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
		
	<div class="row">
		<?php echo $form->labelEx($model,'service1'); ?>
		<ul class="checklist">
		<?php $list = CHtml::listData(
		Service::model()->findAll('category = 1'), 'id', 'description'); ?>
		<?php foreach ($list as $key => $value) : ?>
		<li>
			<?php echo $list[$key] ?>
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
	
	<div class="row">
		<?php echo $form->labelEx($model,'service2'); ?>
		<ul class="checklist">
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

	<div class="row">
		<?php echo $form->labelEx($model,'service3'); ?>
		<ul class="checklist">
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
	
	<div class="row">
		<?php echo $form->labelEx($model,'treatment'); ?>
		<ul class="checklist">
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
	
	<div class="row buttons">
	<?php echo CHtml::submitButton('submit'); ?>
	
	
	
	<?php /*echo CHtml::ajaxSubmitButton('Submit',
	Yii::app()->createUrl('service/price2'),
	    array(
	        'dataType' => 'html',
	        'type' => 'get',
	        'update' => '#totals'
		) //ajax
	);
	 */ ?>	
	</div>
	
<?php $this->endWidget(); ?>

<div id="totals"></div>


