<h1>Question List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Title</th>
      <th>Body</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($questionList as $question): ?>
    <tr>
      <td><a href="<?php echo url_for('question/edit?id='.$question->getId()) ?>"><?php echo $question->getId() ?></a></td>
      <td><?php echo $question->getUserId() ?></td>
      <td><?php echo $question->getTitle() ?></td>
      <td><?php echo $question->getBody() ?></td>
      <td><?php echo $question->getCreatedAt() ?></td>
      <td><?php echo $question->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('question/create') ?>">Create</a>
