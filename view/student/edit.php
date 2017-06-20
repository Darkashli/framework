<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>student/editSave" method="post">
	
		<input type="text" name="firstname" value="<?= $st['student_firstname']; ?>">
		<input type="text" name="lastname" value="<?= $st['student_lastname']; ?>">
		
		<select name="gender">
			<option value="male" <?php if ($st['student_gender'] == "male") { echo "selected=\"true\""; } ?>>Male</option>
			<option value="female" <?php if ($st['student_gender'] == "female") { echo "selected=\"true\""; } ?>>Female</option>	
		</select>

		<input type="hidden" name="id" value="<?= $st['student_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
