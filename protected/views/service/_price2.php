
<h2>Your Selected Services:</h2>

<p><strong>Level of stylist:</strong> <?php echo $role->description ?>

<ul>
	<li><strong><?php echo $service1->description . ':</strong> &pound;' . number_format($price['0'], 2); ?></li>
	<?php if (isset($service2->description)): ?>
	<li><strong><?php echo $service2->description . ':</strong> &pound;' . number_format($price['1'], 2);?></li>
	<?php endif; ?>
	<?php if (isset($service3->description)): ?>
	<li><strong><?php echo $service3->description . ':</strong> &pound;' . number_format($price['2'], 2);?></li>
	<?php endif; ?>
	<?php if (isset($treatment->description)): ?>
	<li><strong><?php echo $treatment->description . ':</strong> &pound;' . number_format($price['3'], 2);?></li>
	<?php endif; ?>
</ul>

<p><strong>Total cost: &pound;<?php echo number_format($data, 2) ?></strong></p>







