<nav aria-label="breadcrumb" class="bg_light-gray ps-2 mt-3 br5">
  <ol class="breadcrumb lh-lg">
    <li class="breadcrumb-item"><a class="link-secondary text-decoration-none" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></li>
        <?php $categories = get_the_category(); ?>
        <?php if(@$args['type'] != 'archive'): ?>

        <?php foreach( $categories as $category ): ?>
          <li class="breadcrumb-item">
          <a class="link-secondary text-decoration-none" href="<?php echo get_category_link( $category->term_id ); ?>">
              <?php echo $category->name; ?>
          </a>
          </li>
        <?php endforeach; ?>
        <li class="breadcrumb-item active" aria-current="page"><?php
        if( $cat ) {
          $catdata = get_category( $cat );
          if( $catdata->parent ) {
            echo get_category_parents( $catdata->parent, true, '</li><li>' );
          }
        } ?>
    <a><?php the_title(); ?></a></li>
    <?php else: ?>
      <li class="breadcrumb-item active" aria-current="page"><a><?php echo $args['title'] ?></a></li>
    <?php endif; ?>
  </ol>
</nav>
