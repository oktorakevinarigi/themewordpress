<?php get_header(); ?>
<!-- struktur content -->
<div class="container" style="border: 1px solid #E6E6E6;background-color: white;">
  <div class="row">
    <div class="col-sm-8 col-md-8" style="position:static">
        <?php if (have_posts()) : while(have_posts()) : the_post();
        if($post->post_type == 'page') continue;
         ?>
  <div class="panel panel-info">
    <div class="panel-heading">
      <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4">
          Author : <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><strong><?php the_author()?></strong>
          </a>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 text-center">
          <strong><?php the_category(', ')?></strong>
        </div>
        <div class="col-xs-4 col-sm-4 col-md-4 text-right">
          <i><?php the_date(); ?></i>
        </div>
      </div>
    </div>
    <div class="panel-body">

      <div class="media">
        <div class="media-left">
          <a href="<?php the_permalink()?>">
            <img class="media-object" src="<?php echo get_stylesheet_directory_uri();?>/asset/img/64.svg" alt="<?php the_title();?>">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php the_title();?></h4>
          <?php echo get_the_excerpt(); ?>
          <a href="<?php the_permalink()?>"class="btn btn-primary btn-sm">Read More</a>
        </div>
      </div>

      </div>
  </div>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>

</div>
  <div class="col-sm-4 col-md-4" style="position:static;">
    <div class="panel panel-info">
      <div class="panel-heading">Sidebar</div>
      <div class="panel-body">
        <?php get_search_form() ?><?php if(!dynamic_sidebar('main-sidebar')){ echo "Geser dahulu sidebarnya"; } ?>
      </div>
    </div>
  </div>
</div>
</div>
<br>
<!-- penutup struktur content -->

<?php get_footer(); ?>
