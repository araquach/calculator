
<h2>Your Selected Services:</h2>
<ul>
	<li><?php echo $service1->description ?></li>
	<?php if (isset($service2->description)): ?>
	<li><?php echo $service2->description ?></li>
	<?php endif; ?>
	<?php if (isset($service3->description)): ?>
	<li><?php echo $service3->description ?></li>
	<?php endif; ?>
	<?php if (isset($treatment->description)): ?>
	<li><?php echo $treatment->description ?></li>
	<?php endif; ?>
</ul>

<p>Level of stylist: <?php echo $role->description ?>

<p><strong>Total cost: &pound;<?php echo number_format($data, 2) ?></strong></p>







