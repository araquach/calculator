<?php $list = CHtml::listData(
Band::model()->findAll(), 'id', 'name'); ?>
<?php foreach ($list as $key => $value) : ?>
<li>
	<?php echo $list[$key] ?>
</li>	
<?php endforeach; ?>
