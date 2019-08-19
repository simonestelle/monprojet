<?php ob_start(); ?>
<div class="container">
		<div class="col">
			<h2 class="text-center text-secondary">Listes des épisodes</h2>
		</div>
		
			<?php
			while ($data=$posts->fetch())
			{
			?>
			<section class="row">
				
<div class =" col-sm-3"><img  class="img-fluid" src="public/images/billet_pour_lalaska.jpg"><a  href="templateepisode.php"><?=htmlspecialchars($data['title'])?></a></div>
 <!-- <div class =" col-sm-3"><img  class="img-fluid" src="public/images/billet_pour_lalaska.jpg">épisode 2</div> -->
  			 <!-- <div class =" col-sm-3"><img  class="img-fluid" src="public/images/billet_pour_lalaska.jpg">épisode 3</div> -->
  			 <!-- <div class =" col-sm-3"><img  class="img-fluid" src="public/images/billet_pour_lalaska.jpg">épisode 4</div> -->
  			  <!-- <div class =" col-sm-3" class="pt" style="padding-top: 5px;" ><img  class="img-fluid" src="public/images/billet_pour_lalaska.jpg">épisode 5</div> -->
  			 <!-- <div class =" col-sm-3" class="pt" style="padding-top: 5px;"><img  class="img-fluid" src="public/images/billet_pour_lalaska.jpg">épisode 6</div> -->
		</section><br/>
		<?php
		}
		$post->closeCursor();
		?>
		<?php $content=ob_get_clean(); ?>
<?php require('views/template_blog.php');?>

		<!-- <section class="pagination"> -->
			<!-- <ul class="pagination"> -->
  				<!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
  				<!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
  				<!-- <li class="page-item active"><a class="page-link" href="#">2</a></li> -->
  				<!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
  				<!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
			<!-- </ul> -->
		<!-- </section> -->
	<!-- </div> -->