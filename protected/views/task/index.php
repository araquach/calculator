<div class="form">
<?php echo CHtml::beginForm() ?>
<ul class="tasks">
<?php for ($i = 0; $i < count($models); $i++): ?>
<?php $this->renderPartial('_task', array(
	'model'=>$model[$i],
	'index'=>$i,
)) ?>
<?php endfor; ?>
</ul>
<div class="row buttons">
<?php echo CHtml::button('Add Task', array(
	'class'=>'tasks-add'
)) ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<script>
$('.tasks-add').click(function(){
	$.ajax({
		success: function(html){
			$('.tasks').append(html);
		},
		type: 'get',
		url: '<?php echo $this->createUrl('field') ?>',
		data: {
			index: $('.tasks li').size()
		},
		cache: false,
		dataType: 'html'
	}); // end Ajax
}); //end function
</script>
<?php echo CHtml::submitButton('save') ?>
</div>
<?php echo CHtml::endForm() ?>
</div>