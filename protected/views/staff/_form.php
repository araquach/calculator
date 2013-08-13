<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'staff-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		<?php echo Yii::t('app', 'Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('app', 'are required'); ?>.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'person_id'); ?>
		<?php echo $form->dropDownList($model, 'person_id', GxHtml::listDataEx(Person::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'person_id'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'staff_role_id'); ?>
		<?php echo $form->dropDownList($model, 'staff_role_id', GxHtml::listDataEx(StaffRole::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'staff_role_id'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget();
?>
</div><!-- form -->