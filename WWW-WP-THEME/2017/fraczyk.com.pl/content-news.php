
 <div class="container"><div class="row">
               <div class="col-sm-1"></div>
   <div class="col-sm-5">
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
<div class="news-image" style='background-image: url("<?php the_field('pcf1-1');?>")'></div>
</a>
</div>


            <div class="col-sm-6 col-lg-5 content-news">
          <a href="<?php the_permalink(); ?>" class="more-link" title="<?php the_title(); ?>">  <h3><?php the_title(); ?></h3></a>
            <div><small><?php the_time( 'd/m/Y' ); ?></small></div>
            <p><?php the_field('intro-post'); ?></p>
			<span><a href="<?php the_permalink(); ?>" class="more-link" title="<?php the_title(); ?>"><?php pll_e( 'czytaj' ); ?> >></a></span>

            </div>


            <div class="col-sm-1"></div>
            <div class="clearfix"></div>
            <hr class="full">
            <div class="mobisemisepar"></div>
</div></div>
