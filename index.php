<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="container content">

    <?php //left sidebar ?>
    <?php get_sidebar( 'left' ); ?>





    <div class="col-md-10 col-md-offset-1<?php //devdmbootstrap3_main_content_width(); ?> main">

                
            <?php // theloop

                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    // single post
                    if ( is_single() ) : ?>

                        <div <?php post_class(); ?>>

                            <h2 class="page-header"><?php the_title() ;?></h2>
                            <div class="homedivider"></div>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                                <div class="clear"></div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <?php get_template_part('template-part', 'postmeta'); ?>
                            <?php comments_template(); ?>

                        </div>
                    <?php
                    // list of posts
                    else : ?>
                       <div <?php post_class(); ?>>

                            <h2 class="page-header">
                                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                            </h2>
                            <div class="homedivider"></div>

                            <?php if ( has_post_thumbnail() ) : ?>
                               <?php the_post_thumbnail(); ?>
                                <div class="clear"></div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <?php get_template_part('template-part', 'postmeta'); ?>
                            
                       </div>

                     <?php  endif; ?>

                <?php endwhile; ?>
                
                <div class="homedivider"></div>
                <nav class="post-navigation">
                  <div class="prev-entries">
                    <?php previous_posts_link('<span class="glyphicon glyphicon-chevron-left"></span><br /><span class="text">page précédente</span>') ?>
                  </div>
                  <div class="next-entries">    
                    <?php next_posts_link('<span class="glyphicon glyphicon-chevron-right"></span><br /><span class="text">page suivante</span>','') ?>
                  </div>
                </nav>
                <?php else: ?>

                    <?php get_404_template(); ?>

            <?php endif; ?>

   </div>

   <?php //get the right sidebar ?>
   <?php get_sidebar( 'right' ); ?>

</div>
<!-- end content container -->

<?php get_footer(); ?>

