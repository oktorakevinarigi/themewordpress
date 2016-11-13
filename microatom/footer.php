<div class="container-fluid" style="background-color:white; height:480px; padding:40px;">
<!-- <div class="row text-center">
  <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
  <div class="col-sm-4">
    <div class="thumbnail">
      <?php the_post_thumbnail(); ?>
      <p><strong><?php the_title(); ?>sd</strong></p>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="btn btn-primary">read more</a>
    </div>
  </div>
<?php endwhile; ?>
<?php else: ?>
<?php endif; ?>
    </div> -->

    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">

              <p class="text-center"><strong>Identitas</strong></p><br>
              <a href="#demo" data-toggle="collapse">
                <img src="<?php echo get_stylesheet_directory_uri();?>/asset/img/paralayang.jpg" class="img-circle person" onContextMenu='return false;'>
              </a>
              <div id="demo" class="collapse">
                <p><strong>Oktora Kevin Arigi</strong></p>
                <p>Programmer</p>
                <p>Hobby Traveling</p>
              </div>


        </div>
      </div>
    </div>




  </div>
<footer class="container-fluid">
  <div class="container" style="border:none; margin:none;">
    <div class="row" align="center" style="margin-top:40px">
      <div class="col-md-12">
        <a href="https://www.facebook.com/erik.ektrada"><img class="facebook" src="<?php echo get_stylesheet_directory_uri();?>/asset/img/facebook.png"></a>
        <a href="https://twitter.com/oktora_kevin_A"><img class="twitter" src="<?php echo get_stylesheet_directory_uri();?>/asset/img/twitter.png"></a>
      </div>
    </div>


    <div class="row" align="center" style="margin-top:20px">
      <div class="col-md-12">
        <p>&#169; Copyright 2016 by Oktora Kevin Arigi, All rights reserved.</p>
      </div>
    </div>
    <div class="row" align="center">
      <div class="col-md-12">
        <p>Template By Atom.com</p>
      </div>
    </div>

</div>
</footer>

</body>
</html>
