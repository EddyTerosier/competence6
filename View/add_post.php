<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<div class="backgroundProgramme">
  <h1>Poster un programme</h1>
  <?php require 'inc/msg.php' ?>
  <form method="post" enctype="multipart/form-data">
	<div class="row">
		<div class="input-field col s12">
			<input type="text" name="title" id="title" required="required">
			<label for="title">Titre du programme</label>
		</div>

		<div class="input-field col s12">
      <label for="editable">Contenu du programme</label>
      <br><br>
			<textarea name="body" id="editable"></textarea>
		</div>

		<div class="col s12">
			<div class="input-field file-field">
				<div class="btn">
					<span>Image du programme</span>
					<input type="file" name="image">
				</div>
			</div>
		</div>

		<div class="col s12 right-align">
			<br><br>
			<button class="btn waves-effect waves-light" type="submit" name="add_submit">Publier</button>
		</div>

	</div>
</form>
</div>
<?php require 'inc/footer.php' ?>