<?php include_once './includes/db/config.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $config['title']; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Poppins:wght@800&display=swap" rel="stylesheet">
	<script src="./js/jsLibs/jsLibs.min.js"></script>
	<script src="./js/main.js"></script>
	<script src="./js/jsLibs/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>
<body>
	<div class="wrapper">
		
		<?php 
			include './includes/sections/header.php'; 
			include './includes/sections/header_slider.php';
		?>

		<section class="content">
			<div class="container">

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>New Atricles</h2>

							<div class="card-deck">

								<?php  
									$articles = mysqli_query($connection, 
										"SELECT * FROM `articles` ORDER BY `pubdate` DESC LIMIT 3");
									while($article = mysqli_fetch_assoc($articles))
									{
								?>
										<div class="card wow animate__animated animate__zoomIn">
									    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">
									      	<?php echo mb_substr($article['title'], 0, 25, 'utf-8') . ' ...';?>
									      </h5>
									      <p class="card-text"><?php echo mb_substr($article['text'], 0, 100, 'utf-8') . ' ...';?></p>
									      <a href="#" class="btn btn-primary d-flex justify-content-center">Read More</a>
									    </div>
									    <div class="card-footer">
									    	<?php
                          $article_categorie = false;
                          foreach ($categories as $categorie) {
                            if ($categorie['id'] == $article['categorie_id']) {
                              $article_categorie = $categorie;
                              break;
                            }
                          }
                        ?>
									      <small class="text-muted">Категория: 
									      	<a href=""> <?php echo $article_categorie['title']; ?></a>
									    	</small>
									    </div>
									  </div>
										<?php
									}
								?>

							</div>

						</div>	
					</div>			
				</div>

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>Programming</h2>

							<div class="card-deck">

								<?php  
									$articles = mysqli_query($connection, 
										"SELECT * FROM `articles` WHERE `categorie_id` = 1 ORDER BY `views` DESC LIMIT 3");
									while($article = mysqli_fetch_assoc($articles))
									{
								?>
										<div class="card wow animate__animated animate__backInLeft">
									    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">
									      	<?php echo mb_substr($article['title'], 0, 25, 'utf-8') . ' ...';?>	
									      </h5>
									      <p class="card-text"><?php echo mb_substr($article['text'], 0, 100, 'utf-8') . ' ...';?></p>
									      <a href="#" class="btn btn-primary d-flex justify-content-center">Read More</a>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Колличество просмотров: 
									      	<?php echo $article['views']; ?>
									    	</small>
									    </div>
									  </div>
										<?php
									}
								?>

							</div>

						</div>	
					</div>			
				</div>

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>LifeStyle</h2>

							<div class="card-deck">

								<?php  
									$articles = mysqli_query($connection, 
										"SELECT * FROM `articles` WHERE `categorie_id` = 2 ORDER BY `views`DESC LIMIT 3");
									while($article = mysqli_fetch_assoc($articles))
									{
								?>
										<div class="card wow animate__animated animate__fadeInUp">
									    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">
									      	<?php echo mb_substr($article['title'], 0, 25, 'utf-8') . ' ...';?>		
									      </h5>
									      <p class="card-text"><?php echo mb_substr($article['text'], 0, 100, 'utf-8') . ' ...';?></p>
									      <a href="#" class="btn btn-primary d-flex justify-content-center">Read More</a>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Колличество просмотров: 
									      	<?php echo $article['views']; ?>
									    	</small>
									    </div>
									  </div>
										<?php
									}
								?>

							</div>

						</div>	
					</div>			
				</div>

				<div class="block mt-5">
					<div class="card border-secondary mb-5">
						<div class="article p-4">
							<h2>Books</h2>

							<div class="card-deck">

								<?php  
									$articles = mysqli_query($connection, 
										"SELECT * FROM `articles` WHERE `categorie_id` = 3 ORDER BY `views` DESC LIMIT 3");
									while($article = mysqli_fetch_assoc($articles))
									{
								?>
										<div class="card wow animate__animated animate__zoomInUp">
									    <img class="card-img-top" src="./src/images/nodejs.jpeg" alt="Card image cap">
									    <div class="card-body">
									      <h5 class="card-title">
									      	<?php echo mb_substr($article['title'], 0, 25, 'utf-8') . ' ...';?>	
									      </h5>
									      <p class="card-text"><?php echo mb_substr($article['text'], 0, 100, 'utf-8') . ' ...';?></p>
									      <a href="#" class="btn btn-primary d-flex justify-content-center">Read More</a>
									    </div>
									    <div class="card-footer">
									      <small class="text-muted">Колличество просмотров: 
									      	<?php echo $article['views']; ?>
									    	</small>
									    </div>
									  </div>
										<?php
									}
								?>

							</div>

						</div>	
					</div>			
				</div>

			</div>
		</section>

		<!-- Footer -->
		<?php include_once './includes/sections/footer.php' ?>		
		<!-- Footer -->

	</div>


</body>
</html>