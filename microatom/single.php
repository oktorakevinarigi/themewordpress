<?php get_header(); ?>
<!-- struktur content -->
<div class="container" style="border: 1px solid #E6E6E6;background-color: white;">
<div class="row">
      <div class="col-sm-8 col-md-8" style="position:static">
<div class="panel panel-info">
  <?php if (have_posts()) : while(have_posts()) : the_post();?>
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4">
        Author : <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><strong><?php the_author_meta( 'nickname' );?></strong>
        </a>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 text-center">
        <strong><?php the_category(', ');?></strong>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 text-right">
        <i><?php the_date();?></i>
      </div>
    </div>
  </div>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
  <div class="panel-body">
        <h4 class="media-heading text-center" style="margin-bottom:50px"><?php the_title();?></h4>
        <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
      <p>Silahkan download dalam bentuk pdf <?php if (function_exists("wpptopdfenh_display_icon")) echo wpptopdfenh_display_icon();?></p>
      <?php the_author_meta( 'nickname' ); ?>
    </div>
</div>
</div>
<div class="col-sm-4 col-md-4" style="position:static;">
  <div class="panel panel-info">
    <div class="panel-heading">Sidebar</div>
    <div class="panel-body">
      <div class="row">
        <div class="col-xs-12 col-sm-11 col-md-12">
          <?php get_search_form() ?>
        </div>
      </div>
      <?php if(!dynamic_sidebar('main-sidebar')){ echo "Geser dahulu sidebarnya"; } ?>
    </div>
  </div>
</div>
</div>
</div>
<!-- penutup struktur content -->

<?php get_footer(); ?>
