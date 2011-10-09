<?php
// debug($traits);
//debug($traits);
?>

<?php $html->script(array('jquery'), array('inline' => false)); ?>
<?php $html->script(array('jquery-ui-min.js'), array('inline' => false)); ?>
<?php $html->script(array('script.js'), array('inline' => false)); ?>

<p id="traitListHeading"> Please rank the following traits as most important(#1) to least important(#4). </p>
<div class="traits index noLeftB">
 <ol id="sortable">

<div class="traits index noLeftB">
  <?php echo $this->Form->create('User', array('action' => 'search')); ?>
  <ol id="sortable">

  <?php foreach ($traits as $trait):
  		$i = 0;
  		$class = null;
  		if ($i++ % 2 == 0) {
  			$class = ' class="altrow"';
  		}
  	?>
    <li class="row"<?php echo $class;?>>
      <?php echo $trait['Trait']['name']; ?>
      <input type="hidden" name="data[<?php echo $trait['Trait']['id']; ?>]" id="PostPublished_" value="<?php echo $trait['Trait']['id']; ?>" />
    </li>
  <?php endforeach; ?>
  </ol>
  <?php echo $this->Form->end(__('Submit', true));?>
</div><!-- .traits index -->