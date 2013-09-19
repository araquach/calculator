<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/service_selector.js');?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/button.js');?>



<?php echo $this->renderPartial('_service_form', array('model'=>$model)); ?>


<div id="totals"></div>


