<?php require 'header.php'; ?>

<?php
var_dump($DB->query('SELECT * FROM panier'));
?>

<div class="home">
			<div class="row">
				<div class="wrap">
					<div class="box">
						<div class="product full">
							<a href="#">
								<img src="./img/image.png">
							</a>
							<div class="description">
								Apple, <strong>Ipad :</strong>
								<a href="#" class="price">1500,00 €</a>
							</div>
							<a href="#" class="gift">
								Gift
							</a>
							<div class="rating">
								<span>Rating :</span>
								<ul>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#" class="off">5</a></li>
								</ul>
							</div>
							<a class="add" href="#">
								add
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="pagination">
			<ul class="wrap">
				<li><a href="#"> Prev </a></li>
				<li class="page"> Page : <a href="#">2</a> of 3</li>
				<li><a href="#"> Next</a></li>
			</ul>
		</div>
	</div>

	<?php require 'footer.php' ;?>
