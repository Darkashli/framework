<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>homework/editSave" method="post">
	
		<input type="text" name="subject" value="<?= $homework['subject']; ?>">
		<input type="text" name="contents" value="<?= $homework['contents']; ?>">
		<input type="text" name="pages" value="<?= $homework['pages']; ?>">



		<input type="hidden" name="id" value="<?= $homework['id']; ?>">
		<input type="submit" value="Finish">
	
	</form>

</div>
