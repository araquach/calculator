<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
?>

<div class="form">
<?php echo CHtml::beginForm() ?>
<ul class="tasks">
<?php for($i=0; $i<count($models); $i++): ?>
<?php $this->renderPartial('_task', array(
	'model'=>$models[$i],
	'index'=>$i,
)) ?>
<?php endfor ?>
</ul>
<div class="row buttons">
<?php echo CHtml::button('Add Task', array(
	'class'=>'tasks-add')) ?>
<?php echo CHtml::submitButton('Save') ?>
</div>
<?php echo CHtml::endForm() ?>
</div>