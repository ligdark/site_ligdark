<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-default">
				<!-- <div class="panel-heading">
					<h3>Título do post <small>Posted on July 26th</small></h3>
				</div> -->
				<div class="panel-body">
					
					<div id="meuCarrossel" class="carousel slide">
						<!-- <ol class="carousel-indicators">
							<li data-target="#meuCarrossel" data-slide-to="0" class="active"></li>
							<li data-target="#meuCarrossel" data-slide-to="1"></li>
						</ol> -->
						<div class="carousel-inner">
							<?php  
								$html = "";
								$active = "active";
								foreach ($postsCarrossel as $key => $post) {
									$html .= '<div class="item '.$active.'">
											  	<a href="'.action('SiteController@listarTutorial', array('id' => $post['id'])).'">
											  		<img width="100%" src="'.asset('assets/imgs/'.$post['nomeimagem']).'">
											  	
												  	<div class="container">
														<div class="row">
															<div class="col-md-8">
																<h3>'.$post['titulo'].' <small>Posted on July 26th</small></h3>
																<h5>
																	'.$post['minidescricao'].'
																</h5>
															</div>
														</div>
												  	</div>
												</a>
											  </div>';

									if ($active == "active") {
										$active = "";
									}
								}

								echo $html;
							?>
						</div>

						<a href="#meuCarrossel" class="left carousel-control" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a href="#meuCarrossel" class="right carousel-control" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>

				</div>
			</div>
		</div>
		<?php include(app_path() . '/views/layouts/front-end/paginas/_gridPosts.php'); ?>
	</div>
</div>

<!-- Grid de postagens mais vistos -->
<div class="container">
	<?php  

		$doisPostsGridMaisVistos[] = $postsGridMaisVistos[0];
		$doisPostsGridMaisVistos[] = $postsGridMaisVistos[1];
		
		$tresPostsGridMaisVistos[] = $postsGridMaisVistos[2];
		$tresPostsGridMaisVistos[] = $postsGridMaisVistos[3];
		$tresPostsGridMaisVistos[] = $postsGridMaisVistos[4];

		$html = "";
		$html .= '<div class="row">';
		foreach ($postsGridMaisVistos as $key => $post) {
			if($key < 2){
				$html .= '<div class="col-md-6">
							<h2>'.$post['titulo'].'</h2>
							<p>'.$post['minidescricao'].'</p>
					  	  </div>';
			}elseif ($key == 2) {
				$html .= '</div>
						  <div class="row">
						  	<div class="col-md-4">
								<h2>'.$post['titulo'].'</h2>
								<p>'.$post['minidescricao'].'</p>
					  	  	</div>';
			}else{
				$html .= '<div class="col-md-4">
								<h2>'.$post['titulo'].'</h2>
								<p>'.$post['minidescricao'].'</p>
					  	  	</div>';
			}
		}
		$html .= '</div>';
		echo $html;
	?>
</div>