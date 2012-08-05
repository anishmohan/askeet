<?php $relevancy = $form->getObject() ?>
<h1><?php echo $relevancy->isNew() ? 'New' : 'Edit' ?> Relevancy</h1>

<form action="<?php echo url_for('relevancy/update'.(!$relevancy->isNew() ? '?id='.$relevancy->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          &nbsp;<a href="<?php echo url_for('relevancy/index') ?>">Cancel</a>
          <?php if (!$relevancy->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'relevancy/delete?id='.$relevancy->getId(), array('post' => true, 'confirm' => 'Are you sure?')) ?>
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
        <th><?php echo $form['answer_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['answer_id']->renderError() ?>
          <?php echo $form['answer_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['score']->renderLabel() ?></th>
        <td>
          <?php echo $form['score']->renderError() ?>
          <?php echo $form['score'] ?>
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
