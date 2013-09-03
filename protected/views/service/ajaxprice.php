<?php
/* @var $this ServiceController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>This is the pricing page</h1>



<?php
	Yii::app()->clientScript->registerCoreScript('jquery');
?>

<div class="form">
<?php echo CHtml::beginForm() ?>
<ul class="services">
<?php for($i=0; $i<count($models); $i++): ?>
<?php $this->renderPartial('_service', array(
	'model'=>$models[$i],
	'index'=>$i,
)) ?>
<?php endfor ?>
</ul>
<div class="row buttons">
<?php echo CHtml::button('Add Another Service', array(
	'class'=>'service-add')) ?>
	
<script>
			$(".service-add").click(function(){
				$.ajax({
					success: function(html){
						$(".services").append(html);
					},
					type: 'get',
					url: '<?php echo $this->createUrl('field')?>',
					data: {
						index: $(".services li").size()
					},
					cache: false,
					dataType: 'html'
				});
			});
</script>
	
<?php echo CHtml::submitButton('Save') ?>
</div>
<?php echo CHtml::endForm() ?>
</div>



