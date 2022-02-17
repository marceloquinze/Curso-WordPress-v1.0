<?php get_header(); ?>

<div id="primary">
	<main id="main">
		<div class="container">

		<?php 

		while(have_posts()): the_post();

			// O conteúdo do template em si estará em content-single.php
			get_template_part('content', 'single');

			// Verificando se os comentários estão abertos no post e se há algum comentário publicado
			// Se houver um ou outro, chamamos o nosso template de comentários padrão 
			if( comments_open() || get_comments_number()):
				comments_template();
			endif;

		endwhile;

		?>
			
		</div>		
	</main>
</div>

<?php get_footer(); ?>
