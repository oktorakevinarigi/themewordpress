<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div>
        <!-- <label class="screen-reader-text" for="s">Cari Post</label> -->
        <div class="row">
          <div class="col-xs-10 col-sm-9 col-md-9" style="padding-right:5px">
            <input type="text" class="form-control input-sm" value="<?php echo get_search_query(); ?>" name="s" id="s" />
          </div>
          <div class="col-xs-2 col-sm-3 col-md-3" style="padding:0">
            <input type="submit" class="btn btn-info btn-sm" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
          </div>
        </div>
    </div>
</form>
