<div class="container">
		<div class="col">
			<h2 class="text-center text-secondary">Listes des épisodes</h2>
		</div>

		<?php 
			while ($data = $posts ->fetch()) 
			{
				# code...
			?>
		<section class="row">
			
<div class =" col-sm-3">
	<?= htmlspecialchars($data['picture']) ?><a  href="index.php?action=post&id=<?=$data['id']?>">épisode 1</a></div>
 <div class =" col-sm-3">
 	<?= htmlspecialchars($data['picture']) ?>épisode 2</div>
  			 <div class =" col-sm-3"><?= htmlspecialchars($data['picture']) ?>épisode 3</div>
  			 <div class =" col-sm-3"><?= htmlspecialchars($data['picture']) ?>épisode 4</div>
  			  <div class =" col-sm-3" class="pt" style="padding-top: 5px;" ><?= htmlspecialchars($data['picture']) ?>épisode 5</div>
  			 <div class =" col-sm-3" class="pt" style="padding-top: 5px;"><?= htmlspecialchars($data['picture']) ?>épisode 6</div>
		</section><br/>
		<section class="pagination">
			<ul class="pagination">
  				<li class="page-item"><a class="page-link" href="#">Previous</a></li>
  				<li class="page-item"><a class="page-link" href="#">1</a></li>
  				<li class="page-item active"><a class="page-link" href="#">2</a></li>
  				<li class="page-item"><a class="page-link" href="#">3</a></li>
  				<li class="page-item"><a class="page-link" href="#">Next</a></li>
			</ul>
		</section>
	</div>
	<?php 
	{

	}