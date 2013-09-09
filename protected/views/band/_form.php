<?php
/* @var $this BandController */
/* @var $model Band */
/* @var $form CActiveForm */
?>

<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'band-form',
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array(
		'onsubmit'=>"return false;")/* Disable normal form submit */
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>256)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rank'); ?>
		<?php echo $form->textField($model,'rank'); ?>
		<?php echo $form->error($model,'rank'); ?>
	</div>

	<div class="row buttons">
		 <?php echo CHtml::Button('SUBMIT',array('onclick'=>'send();')); ?> 
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<script type="text/javascript">
 
function send()
 {
 
   var data=$("#band-form").serialize();
 
 
  $.ajax({
   type: 'POST',
    url: '<?php echo Yii::app()->createAbsoluteUrl("band/create"); ?>',
   data:data,
success:function(data){
                $("#result").html(data); 
              },
   error: function(data) { // if error occured
         alert("Error occured.please try again");
         alert(data);
    },
  dataType:'html'
  });
 
}
 
</script>


<div id="result"></div>