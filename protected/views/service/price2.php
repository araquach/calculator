<?php
/* @var $this ServiceController */
/* @var $dataProvider CActiveDataProvider */
?>

<h1>This is the pricing page</h1>

<p>The cost with a <?php echo $role->description ?> </p>
<p>For a <?php echo $service->description ?> is:</p>

<h2>Total: &pound;<?php echo $data ?></h2>

<p>Cost per min: &pound;<?php echo $role->cpm ?></p>

<p>Time: <?php echo $service->time ?> min</p>

<p>Offset: &pound;<?php echo $service->offset ?></p>



