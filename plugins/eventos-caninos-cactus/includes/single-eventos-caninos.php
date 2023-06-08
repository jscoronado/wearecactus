<?php 
/**
 * Single Eventos Caninos
 *
 * @package wearecactus
 */

get_header();

global $post;
$post_id = $post -> ID;
$terms = get_the_terms($post->ID, 'Tipo');
?>

<article id="single-perro">
    <div class="container">
        <div class="row">
            <div class="single-perro__thumbnail col-12 col-md-6">
            <?php if ( has_post_thumbnail( get_the_ID() ) ): ?>
                <?php the_post_thumbnail( 'full'); ?>
            <?php else: ?>
                <img width="300" height="300" src="/wearecactus/wp-content/uploads/2023/06/post-default.png" class="attachment-medium size-medium wp-post-image" loading="lazy">
            <?php endif; ?>
            </div>

            <div class="single-perro__description col-12 col-md-6">
                <h1 class="name-perro"><?php the_title(); ?></h1>

                <?php if(get_the_excerpt()): ?>
                    <h4 class="subname-perro">
                        <?php echo get_the_excerpt(); ?>
                    </h4>
                <?php endif; ?>
                
                <?php if(the_content()): ?>
                    <div class="description-perro"><?php the_content(); ?></div>
                <?php endif; ?>

                <div class="single-perro__attributes">
                    <ul>
                        <?php 
                        foreach ($terms as $term):
                            echo '<li class="at-raza"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
                        endforeach;
                        ?>
                        <?php if('fecha_evento'): ?> <li class="at-years"><?php echo get_field('fecha_evento')?></li><?php endif; ?>
                        <?php if('ubicacion_evento'): ?><li class="at-personality"><?php echo get_field('ubicacion_evento')?></li><?php endif; ?>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</article>

<?php

get_footer();