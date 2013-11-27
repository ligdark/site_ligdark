<!-- Grid posts recentes -->
<?php  
	$html = '<div class="col-md-3">
				<div class="list-group">';
	foreach ($postsGridRecentes['postsGridRecentes'] as $key => $post) {
		$html .= '<a href="#" class="list-group-item">
					<h3 class="list-group-item-heading">'.$post['titulo'].'</h3>
					<p class="list-group-item-text">'.$post['minidescricao'].'</p>
				  </a>';
	}
	$html .= '	</div>
				<center>';
				
				for ($cont = 1; $cont <= ceil($postsGridRecentes['contPosts'] / 4); $cont++) { 
					$html .= $cont.',';
				}

	$html .= '	</center>
			 </div>';
	echo $html;
?>
		