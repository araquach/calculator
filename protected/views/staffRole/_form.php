<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'staff-role-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model, 'description', array('maxlength' => 256)); ?>
		<?php echo $form->error($model,'description'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'cpm'); ?>
		<?php echo $form->textField($model, 'cpm', array('maxlength' => 4)); ?>
		<?php echo $form->error($model,'cpm'); ?>
		</div><!-- row -->

		<label><?php echo GxHtml::encode($model->getRelationLabel('staffs')); ?></label>
		<?php echo $form->checkBoxList($model, 'staffs', GxHtml::encodeEx(GxHtml::listDataEx(Staff::model()->findAllAttributes(null, true)), false, true)); ?>

<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->