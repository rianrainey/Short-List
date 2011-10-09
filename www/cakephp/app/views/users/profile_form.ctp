<div class="users view">
<h2>Job Skills Questionaire</h2>
    <?php echo $this->Form->create('User',array('action' => '../answers/add')); ?>
	<?php
		echo $this->Form->hidden('id',array('value' => $user['User']['id']));
		foreach ($questions as $key => $question) { ?>		
			<?php echo $this->Form->input($question['Questions']['id'], array('type' => 'radio', 'options' => array(1,2,3,4,5), 'legend' => $question['Questions']['name'])); ?>
	<?php } ?>

    <?php echo $this->Form->end('Complete Questionaire'); ?>

</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
    <li><?php echo $this->Html->link(__('View Profile', true), array('action' => 'view', $user['User']['id'])); ?> </li>
    <!-- <li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
    <li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
    <li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Role', true), array('controller' => 'roles', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
    <li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
    <li><?php echo $this->Html->link(__('Fill Out Questionnaire', true), array('controller' => 'users', 'action' => 'profile_form')); ?> </li> -->
	</ul>
</div>
<!-- <div class="related">
  <h3><?php __('Related Answers');?></h3>
  <?php if (!empty($user['Answer'])):?>
  <table cellpadding = "0" cellspacing = "0">
  <tr>
    <th><?php __('Id'); ?></th>
    <th><?php __('Value'); ?></th>
    <th><?php __('Question Id'); ?></th>
    <th><?php __('User Id'); ?></th>
    <th class="actions"><?php __('Actions');?></th>
  </tr>
  <?php
    $i = 0;
    foreach ($user['Answer'] as $answer):
      $class = null;
      if ($i++ % 2 == 0) {
        $class = ' class="altrow"';
      }
    ?>
    <tr<?php echo $class;?>>
      <td><?php echo $answer['id'];?></td>
      <td><?php echo $answer['value'];?></td>
      <td><?php echo $answer['question_id'];?></td>
      <td><?php echo $answer['user_id'];?></td>
      <td class="actions">
        <?php echo $this->Html->link(__('View', true), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
        <?php echo $this->Html->link(__('Edit', true), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
        <?php echo $this->Html->link(__('Delete', true), array('controller' => 'answers', 'action' => 'delete', $answer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answer['id'])); ?>
      </td>
    </tr>
  <?php endforeach; ?>
  </table>
<?php endif; ?>

  <div class="actions">
    <ul>
      <li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add'));?> </li>
    </ul>
  </div>
</div> -->
