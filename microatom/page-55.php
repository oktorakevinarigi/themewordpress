<?php get_header(); ?>



<div class="container" style="border: 1px solid #E6E6E6; background-color: white;">
  <div class="row">
    <div class="col-sm-12 col-md-12" style="position:static">
      <div class="panel panel-info">
        <div class="panel-heading">
          <p>Contact</p>
        </div>

        <div class="panel-body">



        </div>


      </div>

</div>

</div>
</div>





<!-- <div class="container">
  <div class="row">
    <div class="col-md-5">
      <?php if (have_posts()) :
        if(is_category(single_cat_title())){
          get_template_part('content');
        }else{

        }
        while(have_posts()) : the_post(); ?>
        <?php the_title( $before = '<h3>', $after = '</h3>', $echo = true ) ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    <?php else: ?>
    <?php endif; ?>
    </div>
    <div class="col-md-7">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div> -->


<?php get_footer(); ?>
