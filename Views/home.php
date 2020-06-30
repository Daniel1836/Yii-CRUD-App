<?php

use yii\helpers\html;

$this->title = 'Yii2 CRUD App';
?>
<h1> Yii2 CRUD App</h1>
<span><?= Html::a('Create',['/site/create'])?></span>
<table class="table table-striped table-hover">
<thead>
 <tr>
 <th>ID</th>
  <th>Title</th>
  <th>Description</th>
  <th>Action</th>
 </tr>
</thead>

<tbody>
<?php if(count($posts) > 0): ?>
<?php foreach($posts as $post): ?>
<tr>
  <td><?php echo $post->id; ?></td>
  <td><?php echo $post->title; ?></td>
  <td><?php echo $post->description; ?></td>
<td>
<span><?= Html::a('View', ['view', 'id' => $post->id]) ?></span>
<span><?= Html::a('Update', ['update', 'id' => $post->id]) ?></span>
<span><?= Html::a('Delete', ['delete', 'id' => $post->id]) ?></span>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr>
<td>No Records Found!</td>
</tr>
<?php endif; ?>

</tbody>
</table>

