
<header>
	<nav class="navbar navbar-expand-md navbar-light bg-custom">
		<div class="container">
			<Link to="/"><a id="0" onclick="activeAccueil()" href="<?=ROOT_URL?>" class="navbar-brand"><img src="Static/Assets/Logo transparent.png" alt="Logo" width="115px"/></a></Link>
			<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<ul class="navbar-nav align-items-end">

					<li class="nav-item <?php echo ($_GET['a']=="index")?"active" : ""; ?>"><Link to="/"><a id = "1" class="nav-link active" href="<?=ROOT_URL?>blog_index.html" aria-current="page" onclick="activeState()">Accueil</a></Link></li>
					<li class="nav-item <?php echo ($_GET['a']=="chapters")?"active" : ""; ?>"><a id = "2" class="nav-link" href="<?=ROOT_URL?>blog_chapters.html" onclick="activeState()">Programmes</a></li>
					<?php if (empty($_SESSION['is_admin']) && empty($_SESSION['is_user'])): ?>
					<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Giga+</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" id="4" href="blog_registration.html">Inscription</a>
                            <a class="dropdown-item" id="5" href="<?=ROOT_URL?>blog_login.html"">Connexion</a>
                        </div>
                    </li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="nav-item <?php echo ($_GET['a']=="dashboard")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_dashboard.html"><i class="material-icons">dashboard</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="nav-item <?php echo ($_GET['a']=="edit")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_edit.html"><i class="material-icons">edit</i></a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])): ?>
					<li class="nav-item"><a href="<?=ROOT_URL?>?p=blog&amp;a=logout" class="btn red waves-effect waves-light">Déconnexion<i class="material-icons right">lock_outline</i></a></li>
					<?php endif ?>
				</ul>

				<!-- <ul class="side-nav" id="mobile-menu">
					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="dashboard")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_login.html">Dashboard</a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin'])): ?>
					<li class="<?php echo ($_GET['a']=="edit")?"active" : ""; ?>"><a href="<?=ROOT_URL?>admin_edit.html">Edition</a></li>
					<?php endif ?>

					<?php if (!empty($_SESSION['is_admin']) || !empty($_SESSION['is_user'])): ?>
					<li><a href="<?=ROOT_URL?>?p=blog&amp;a=logout">Déconnexion</a></li>
					<?php endif ?>
				</ul> -->
			</div>
		</div>
	</nav>
</header>
