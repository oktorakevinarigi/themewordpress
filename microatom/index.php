<?php get_header(); ?>
<!-- struktur content -->
<div class="container" style="border: 1px solid #E6E6E6; background-color: white;">
  <div class="row">
    <div class="col-sm-8 col-md-8" style="position:static">
        <?php if (have_posts()) : while(have_posts()) : the_post();
        get_template_part('content');
        ?>
        <?php endwhile; ?>
        <div class="row text-center">
          <div class="col-md-12">
        <?php the_posts_pagination(array(
          'mid_size'  => '2',
          'perv_text' => 'Previous Posts',
          'next_text' => 'Next Posts') );
        ?>
          </div>
        </div>
        <?php else: ?>
        <?php endif; ?>
      </div>

<!-- //membuat sidebar       -->
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
<!-- penutup sidebar -->

  </div>
</div>
<!-- penutup struktur content -->

<br>

<?php get_footer(); ?>
