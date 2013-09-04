

<p>The cost for a <?php echo $service1->description ?>
<?php if (isset($service2->description)): ?>
<br> plus a <?php echo $service2->description ?>
<?php endif; ?>
<?php if (isset($service3->description)): ?>
<br> plus a <?php echo $service3->description ?>
<?php endif; ?>
<?php if (isset($treatment->description)): ?>
<br> along with a <?php echo $treatment->description ?>
<?php endif; ?>
<br>with a <?php echo $role->description ?> is:</p>

<h2>Total: &pound;<?php echo $data ?></h2>




