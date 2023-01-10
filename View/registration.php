<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<div class="banniere_4">
  <div class="row col-10 mx-auto">
    <div class="col l4 m6 s12 offset-l4 offset-m3">
      <div class="card-panel">
        <div class="row">
          <div class="col s6 offset-s3 text-center">
            <img src="static/img/admin.png" alt="registration" width="150px">
          </div>
        </div>
        <h4 class="text-center">Inscription</h4>
        <center>
          <?php require 'inc/msg.php' ?>
        </center>
        <form method="post">
          <div class="row">
            <div class="input-field col s8">
              <label for="email">Adresse email</label>
              <input type="email" name="email" id="email">
            </div>
            <div class="input-field col s8">
              <label for="pseudo">Pseudo</label>
              <input type="text" name="pseudo" id="pseudo">
            </div>
            <div class="input-field col s8">
              <label for="password">Mot de passe</label>
              <input type="password" id="password" name="password">
            </div>
            <div class="input-field col s8">
              <label for="password_again">Répéter le mot de passe</label>
              <input type="password" name="password_again" id="password_again">
            </div>
            <center>
                <button type="submit" name="submit" class="btn waves-effect waves-light light-blue">
                <i class="material-icons left">perm_identity</i>
                Inscription
                </button>
            </center>
          </div>
        </form>
      </div>
      <center>
        <a href="<?=ROOT_URL?>blog_login.html">Déjà inscrit ?</a>
      </center>
    </div>
  </div>
</div>
<?php require 'inc/footer.php' ?>