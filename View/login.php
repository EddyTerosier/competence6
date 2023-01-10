<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>
<div class="banniere_4">
  <div class="row">
  	<div class="col l4 m6 s12 offset-l4 offset-m3">
  		<div class="card-panel">
  			<div class="row">
  				<div class="col s6 offset-s3 text-center">
  					<img src="static/img/admin.png" alt="connexion" width="150px">
  				</div>
  			</div>

  			<h4 class="text-center">Se connecter</h4>

        <center>
          <?php require 'inc/msg.php' ?>
        </center>

  			<form method="post">
  				<div class="row col-12">
  					<div class="input-field col s8 text-center">
						  <label for="email">Adresse email</label>
  						<input type="email" id="email" name="email" required="required">
  					</div>

  					<div class="input-field col s8 text-center">
						  <label for="password">Mot de passe</label>
  						<input type="password" id="password" name="password" required="required">
  					</div>
  				</div>

  				<center>
  					<button type="submit" name="submit" class="waves-effect waves-light btn light-blue">
  						<i class="material-icons left">perm_identity</i>
  						Se connecter
  					</button>
  				</center>
  			</form>

  		</div>
      <center>
        <a href="<?=ROOT_URL?>blog_registration.html">Pas encore inscrit ?</a>
      </center>
  	</div>
  </div>
</div>
<?php require 'inc/footer.php' ?>