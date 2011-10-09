<?php
debug($users);
?>

<div class="users index">
	<h2><?php __('Users');?></h2>
	<ol>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
  <li><?php echo $user['User']['first_name'] . $user['User']['last_name']; ?></li>
  

<?php endforeach; ?>
	</ol>
</div>