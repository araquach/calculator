<?php
/* @var $this ServiceController */
/* @var $model Service */
?>

<div class="view">

<br>
	<?php echo CHtml::encode($data['name'])  ?>
<br>
	<?php echo CHtml::encode($data['id']); ?>
<br>
	<?php echo CHtml::encode($data['hobbies'][0]); ?>
<br>
	<?php echo CHtml::encode($data['forumName']); ?>
<br>
	<?php echo CHtml::encode($data['memberSince']); ?>
<br>	
	<?php echo CHtml::encode($data['location']); ?>
<br>	
	<?php echo CHtml::encode($data['active']); ?>
<br>
</div>