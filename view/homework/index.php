<div>
	<table border="2">
	  <tr>
	  	<th>Subject</th>
	  	<th>Contents</th>
	  	<th>Notes</th>
	  	<th>Pages</th>
	  	<th colspan="2">Actions</th>
  	  </tr>

 <?php foreach ($homeworks as $homework) { ?>
		<tr>
			<td><?= $homework['id']; ?></td>
			<td><?= $homework['subject']; ?></td>
			<td><?= $homework['contents']; ?></td>
			<td><?= $homework['pages']; ?></td>
			<td><a href="<?= URL ?>homework/edit/<?= $homework['id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>homework/delete/<?= $homework['id'] ?>">Delete</a></td>
		</tr>
<?php } ?>
	</table>
	<a href="<?= URL ?>homework/create">Toevoegen</a>

</div>