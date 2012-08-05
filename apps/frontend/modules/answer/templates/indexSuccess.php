<h1>Answer List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Answer</th>
      <th>Body</th>
      <th>Created at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($answerList as $answer): ?>
    <tr>
      <td><a href="<?php echo url_for('answer/edit?id='.$answer->getId()) ?>"><?php echo $answer->getId() ?></a></td>
      <td><?php echo $answer->getUserId() ?></td>
      <td><?php echo $answer->getAnswerId() ?></td>
      <td><?php echo $answer->getBody() ?></td>
      <td><?php echo $answer->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('answer/create') ?>">Create</a>
