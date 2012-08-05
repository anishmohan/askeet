<h1>Interest List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Question</th>
      <th>Created at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($interestList as $interest): ?>
    <tr>
      <td><a href="<?php echo url_for('interest/edit?id='.$interest->getId()) ?>"><?php echo $interest->getId() ?></a></td>
      <td><?php echo $interest->getUserId() ?></td>
      <td><?php echo $interest->getQuestionId() ?></td>
      <td><?php echo $interest->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('interest/create') ?>">Create</a>
