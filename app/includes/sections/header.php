<div class="header">

	<div class="header__navbar">
		<div class="container">

			<?php
			  $categories_q = mysqli_query($connection, "SELECT * FROM `article_categories`");
			  $categories = array();
			  while ($categorie = mysqli_fetch_assoc($categories_q)) {
			    $categories[] = $categorie;
			  }
			?>

			<nav class="navbar navbar-expand-lg navbar-light">
			  <a class="navbar-brand mb-0 h1" href="#"><?php echo $config['title']; ?></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item">
			        <a class="nav-link" href="../../../../articlesAndAboutMe/app/index.php">Home</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="./includes/pages/article.php">About_Me</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">My_GitHub</a>
			      </li>
			      <li class="nav-menu dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Articles_Menu
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">All Articles</a>
			          <div class="dropdown-divider"></div>
			          <?php  
			          	foreach($categories as $categorie)
			            {
			              ?>
			                <a class="dropdown-item" href="./articles.php?categorie=<?php echo $categorie['id']; ?>">
			                  <?php echo $categorie['title']; ?>
			                </a>
			              <?php
			            }
			          ?>
			        </div>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</div>

</div>