<?php
/**
 * Archive Perros
 *
 * @package wearecactus
 */

get_header();

$term = get_queried_object();

$args = array(
	'post_type'      => 'perros',
	'posts_per_page' => 9,
	'order'          => 'DESC',
	'tax_query'              => [
	   [
		  'taxonomy' => 'raza',
		  'field'    => 'slug',
		  'terms'    => $term->slug,
	   ],
	],
	'paged'          => get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1,
);

$custom_query = new WP_Query( $args );

$total_pages  = $custom_query->max_num_pages;
$current_page = max( 1, get_query_var( 'paged' ) );
?>

	<div id="perros" class="site-main">
		<div class="container">

            <div class="title-perros entry-title">
				<h1>Listado de perros de Raza: <span><?php echo $term->name; ?><span></h1>
            </div>

            <!-- Listado Perros -->
			<div class="row list-perros entry-content">
				<?php
					if ( $custom_query->have_posts() ):
						while ( $custom_query->have_posts() ):
							$custom_query->the_post();
							?>
							<article class="perro item-perro item-perro-<?php echo get_the_ID(); ?> col-12 col-md-4 col-lg-3">
								<div class="item-perro__thumbnail">
									<?php if ( has_post_thumbnail( get_the_ID() ) ): ?>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail( 'medium'); ?>
										</a>
									<?php else: ?>
										<a href="<?php the_permalink(); ?>">
											<img width="300" height="300" src="/wearecactus/wp-content/uploads/2023/06/post-default.png" class="attachment-medium size-medium wp-post-image" loading="lazy">
										</a>
									<?php endif; ?>
								</div>
								<div class="item-perro__info">
									<a href="<?php the_permalink(); ?>">
										<h3><?php the_title(); ?></h3>
									</a>
                                    <?php if(get_the_excerpt()): ?>
									<div class="item-perro__description">
										<p itemprop="description" class="excerpt">
											<?php echo get_the_excerpt(); ?>
										</p>
									</div>
                                    <?php endif; ?>

                                    <?php 
                                        /* Get categories Perro */
                                        $terms = get_the_terms($post->ID, 'raza');
                                    ?>

                                    <div class="item-perro__attributes">
                                        <ul>
                                            <?php 
                                            foreach ($terms as $term):
                                                echo '<li class="at-raza"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                                            endforeach;
                                            ?>
                                            <?php if('edad_perro'): ?> <li class="at-years"><?php echo get_field('edad_perro')?></li><?php endif; ?>
                                            <?php if('personalidad_perro'): ?><li class="at-personality"><?php echo get_field('personalidad_perro')?></li><?php endif; ?>
                                        </ul>

                                    </div>
									<a href="<?php the_permalink(); ?>" class="button-link">Ver ficha técnica</a>
								</div>
							</article>
							<?php
						endwhile;
					else:
						?>
						<h3 class="not-found-posts">No hemos encontrado resultados</p>
				<?php endif; ?>

				<div class="pagination">
					<?php
					echo paginate_links(
						array(
							'base'    => get_pagenum_link( 1 ) . '%_%',
							'format'  => '/page/%#%',
							'current' => $current_page,
							'total'   => $total_pages,
						)
					);
					?>
				</div>
			</div>

		</div>
	</div>

<?php
get_footer();
