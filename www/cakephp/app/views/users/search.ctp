<?php
//debug($users);
?><div class="users index">
	<h2><?php echo 'Qualified Applicants for' . ' ' . $users[0]['Trait']['name'];?></h2>
	<table cellpadding="0" cellspacing="0">
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['first_name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['last_name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		
	</tr>
<?php endforeach; ?>
	</table>
</div>
