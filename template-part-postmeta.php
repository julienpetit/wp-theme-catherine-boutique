<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <p class="text-center">
        <span class="glyphicon glyphicon-time"></span> <?php the_time('j F Y'); ?>
        <span class="glyphicon glyphicon-edit"></span> <?php edit_post_link(__('Edit','devdmbootstrap3')); ?>

    <?php if( has_tag() ) : ?>
        <p class="text-right"><span class="glyphicon glyphicon-tags"></span>
        <?php the_tags(); ?>
        </p>
    <?php endif; ?>
<?php endif; ?>