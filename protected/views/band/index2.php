<?php
/* @var $this BandController */
/* @var $dataProvider CActiveDataProvider */

Yii::app()->clientScript->registerCoreScript('jquery');
?>

<h1>Bands</h1>

<?php echo CHtml::ajaxButton('Get Info',
Yii::app()->createUrl('band/json'),
	array(
		'dataType' => 'html',
		'type' => 'get',
		'update' => '#result'
		)
); ?>


<div id="result"></div>