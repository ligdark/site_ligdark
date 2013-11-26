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

<!-- Grid de postagens recente -->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2>Título do post</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, eos laboriosam ipsam doloremque libero quisquam deleniti autem officia aperiam facere. Alias, praesentium repellat officiis ipsam unde architecto nisi dicta aliquid.
			</p>
		</div>
		<div class="col-md-6">
			<h2>Título do post</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, eos laboriosam ipsam doloremque libero quisquam deleniti autem officia aperiam facere. Alias, praesentium repellat officiis ipsam unde architecto nisi dicta aliquid.
			</p>
		</div>
	</div>
	
	<hr>
	
	<div class="row">
		<div class="col-md-4">
			<h2>Título do post</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, eos laboriosam ipsam doloremque libero quisquam deleniti autem officia aperiam facere. Alias, praesentium repellat officiis ipsam unde architecto nisi dicta aliquid.
			</p>
		</div>
		<div class="col-md-4">
			<h2>Título do post</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, eos laboriosam ipsam doloremque libero quisquam deleniti autem officia aperiam facere. Alias, praesentium repellat officiis ipsam unde architecto nisi dicta aliquid.
			</p>
		</div>
		<div class="col-md-4">
			<h2>Título do post</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, eos laboriosam ipsam doloremque libero quisquam deleniti autem officia aperiam facere. Alias, praesentium repellat officiis ipsam unde architecto nisi dicta aliquid.
			</p>
		</div>
	</div>
</div>