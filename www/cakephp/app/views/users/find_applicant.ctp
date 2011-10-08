<?php $html->script(array('jquery-ui-min.js'), array('inline' => false)); ?>

<div class="traits index">
 <table>
  <?php foreach ($traits as $trait):
  		$i = 0;
  		$class = null;
  		if ($i++ % 2 == 0) {
  			$class = ' class="altrow"';
  		}
  	?>
    <tr<?php echo $class;?>>
      <td><?php echo $trait; ?></td>
    </tr>
  <?php endforeach; ?>
  </table>
</div><!-- .traits index -->