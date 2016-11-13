<div class="panel panel-info">
  <div class="panel-heading">
    <div class="row">
      <div class="col-xs-4 col-sm-4 col-md-4">
        Author : <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><strong><?php the_author();?></strong>
        </a>
      </div>
      <div class="col-xs-4 col-sm-4 col-md-4 text-center">
        <strong><?php the_category(', ');?></strong>
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
        <?php the_post_thumbnail('small_thumb');?>
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?php the_title();?></h4>
        <?php echo get_the_excerpt(); ?>
        <a href="<?php the_permalink()?>"class="btn btn-info btn-xs">Read More</a>
      </div>
    </div>
    </div>
</div>
