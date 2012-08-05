<?php $interest = $form->getObject() ?>
<h1><?php echo $interest->isNew() ? 'New' : 'Edit' ?> Interest</h1>

<form action="<?php echo url_for('interest/update'.(!$interest->isNew() ? '?id='.$interest->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('interest/index') ?>">Cancel</a>
          <?php if (!$interest->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'interest/delete?id='.$interest->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['user_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['user_id']->renderError() ?>
          <?php echo $form['user_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['question_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['question_id']->renderError() ?>
          <?php echo $form['question_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>

        <?php echo $form['id'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
