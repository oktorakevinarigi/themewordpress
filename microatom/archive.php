<?php get_header(); ?>
<!-- struktur content -->
<div class="container" style="border: 1px solid #E6E6E6;background-color: white;">
<?php  ?>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <p class="sub_judul">
        <?php
        if (have_posts()) :
          if(is_category()){
            echo '<div class="alert alert-info">
                  Halaman  Kategori <strong><u>'; single_cat_title(); echo '</u></strong>
                  </div>';
          }elseif (is_author()) {
            echo '<div class="alert alert-info">
                  Halaman Author <strong><u>'. get_the_author(); echo '</u></strong>
                  </div>';
          }else{
            echo '<div class="alert alert-info">
                  Halaman Arsip
                  </div>';
        }
        ?>
      <?php else:
        echo '<div class="alert alert-warning">
              <strong>Maaf !</strong> Konten <u>'; single_cat_title(); echo '</u> Belum Tersedia
              </div>';
      ?>
        <?php endif; ?>
      </p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8 col-md-8" style="position:static">
      <?php
      if (have_posts()) : while(have_posts()) : the_post();
      get_template_part('content');
      ?>
      <div class="row text-center">
        <div class="col-md-12">
          <?php the_posts_pagination(array(
            'mid_size'  => '2',
            'perv_text' => 'Previous Posts',
            'next_text' => 'Next Posts') );
          ?>
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
<br>
<!-- penutup struktur content -->

<?php get_footer(); ?>
