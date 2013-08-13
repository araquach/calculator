<div class="view">

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::link(GxHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('person_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->person)); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('staff_role_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->staffRole)); ?>
	<br />

</div>