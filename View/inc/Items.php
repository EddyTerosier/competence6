<!-- <?php
$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
$db = new PDO('mysql:host=localhost;dbname=bdd dream-gym','root','',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));

//$sql = 'SELECT * FROM `news`';
//$sql = 'SELECT auteur, titre, contenu FROM news';
$sql = 'SELECT * FROM programmes ';
$requete = $db->query($sql);

While ($news = $requete->fetch()) {
    echo '<div class="col-md-4">'.
    '<div class="card mb-4 text-white bg-dark">'.
    '<img class="card-img-top" src='.$news['image'].' alt="Card"/>'.
        '<div class="card-body">'.
        '<h5 class="card-title">'.$news['name'].'</h5>'.
        '<p class="card-text">'.$news['texte'].'</p>'.
        '<a href="#" class="btn btn-outline-custom btn-sm btn-read-more">'.$news['texte_btn'].'</a>'.
            '</div>'.
    '</div>'.
'</div>';
} 
    ?> -->
    <?php if (empty($this->oPosts)): ?>
        <h1>Il n'y a aucun prgramme.</h1>
        <p><button type="button" onclick="window.location='<?=ROOT_URL?>admin_add.html'" class="btn waves-effect waves-light">Ajoutez votre premier programme!</button></p>
    <?php else: ?>
    <?php foreach ($this->oPosts as $oPost): ?>
        <div class="col-md-4">
        <div class="card mb-4 text-white bg-dark">
        <img class="card-img-top" src="<?=ROOT_URL?>static/img/posts/<?= $oPost->image ?>"/>  
        <div class="card-body">
        <h5 class="card-title"><?=htmlspecialchars($oPost->title)?></h5>
        <p class="card-text"><?=($oPost->body)?></p>
        <a href="#" class="btn btn-outline-custom btn-sm btn-read-more">Voir plus</a>
        </div>
        </div>
        </div>
        <?php endforeach ?>
        <?php endif ?>