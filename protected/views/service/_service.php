<li>
<div class="row">
<?php echo CHtml::activeLabel($model, "[$index]level") ?>
<?php echo CHtml::activeDropDownList($model, "[$index]level", CHtml::listData(
StaffRole::model()->findAll(), 'id', 'description'),
array('prompt' => 'Select level')); ?>
</div>

<div class="row">
<?php echo CHtml::activeLabel($model, "[$index]service") ?>
<?php echo CHtml::activeDropDownList($model, "[$index]service", CHtml::listData(
Service::model()->findAll(), 'id', 'description'),
array('prompt' => 'Select Service')); ?>
</div>
</li>

