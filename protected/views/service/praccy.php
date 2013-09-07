<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/scripts/praccy.js');?>


<h1>jQuery select a radio button example</h1>

<input type="radio" name="sex" value="Male">Male</input>
<input type="radio" name="sex" value="Female">Female</input>
<input type="radio" name="sex" value="Unknown">Unknown</input>
 
<br/>
<br/>
<br/>
 
<input type='button' value='Display Selected' id='isSelect'>
<input type='button' value='Select Male' id='selectMale'>
<input type='button' value='Select Female' id='selectFemale'>
<input type='button' value='Select Unknown' id='selectUnknown'>
<input type='button' value='Reset' id='reset'>