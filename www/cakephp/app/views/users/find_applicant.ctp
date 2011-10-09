

<?php $html->script(array('jquery'), array('inline' => false)); ?>
<?php $html->script(array('jquery-ui-min.js'), array('inline' => false)); ?>
<?php $html->script(array('script.js'), array('inline' => false)); ?>

<div class="traits index">
 <ul id="sortable">
  <?php foreach ($traits as $trait):
  		$i = 0;
  		$class = null;
  		if ($i++ % 2 == 0) {
  			$class = ' class="altrow"';
  		}
  	?>
    <li class="row"<?php echo $class;?>>
      <?php echo $trait; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</div><!-- .traits index -->