<?php if ( is_single() || is_page() ) : ?>
    <div class="page-comments">

        <?php if ( have_comments() && comments_open() ) : ?>
            <div class="homedivider"></div>
            <h4 id="comments">
                <?php comments_number(__('Laisser un message','devdmbootstrap3'), __('Un Commentaire','devdmbootstrap3'), '%' . __(' Commentaires','devdmbootstrap3') );?>
            </h4>
            <ul class="commentlist">
                <?php wp_list_comments(); ?>
                <?php paginate_comments_links(); ?>
                <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
            </ul>
            
            <div class="well"><?php comment_form(); ?></div>
        <?php else :
                if ( comments_open() ) : ?>
                    <div class="well"><?php comment_form(); ?></div>
               <?php
                endif;
        endif; ?>

    </div>
<?php endif; ?>