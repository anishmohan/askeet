<h1>Relevancy List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>User</th>
      <th>Answer</th>
      <th>Score</th>
      <th>Created at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($relevancyList as $relevancy): ?>
    <tr>
      <td><a href="<?php echo url_for('relevancy/edit?id='.$relevancy->getId()) ?>"><?php echo $relevancy->getId() ?></a></td>
      <td><?php echo $relevancy->getUserId() ?></td>
      <td><?php echo $relevancy->getAnswerId() ?></td>
      <td><?php echo $relevancy->getScore() ?></td>
      <td><?php echo $relevancy->getCreatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="<?php echo url_for('relevancy/create') ?>">Create</a>
