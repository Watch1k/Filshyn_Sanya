<?php get_header(); ?>
        
        <div class="content pull-left">
                
                <form role="search" method="get" id="searchform" class="form-search" action="http://localhost/wordpress/">
                    <div class="input-append">
                        <input type="text" value="" name="s" id="s" class="search-query" placeholder="Поиск..." />
                        <button type="submit" class="btn">Искать</button>
                    </div>
                </form>

                <hr />

                <?php if (have_posts()) : ?>
                    <h3>Результаты поиска "<?php the_search_query(); ?>"</h3>
                <?php while (have_posts()) : the_post(); ?>
        	
        	<div class="post">
        		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <span><i class="icon-comment"></i> <?php comments_popup_link('0', '1', '%'); ?></h1>
        		<div class="image">

	        		<?php 
                        if ( function_exists( 'add_theme_support' ) )
                        the_post_thumbnail( array(250,9999), array('class' => 'img-polaroid') ); 
                    ?>

				</div>
        		<div class="text">
        			
                    <?php the_excerpt(); ?>
        			
        			<a href="<?php the_permalink(); ?>" class="btn btn-success">Читать полностью</a>
        		</div>
        	</div>
        	
        	<hr />
        	
        	<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
                <div class="pagenavi"><?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?></div><!--end pagination-->
            <?php else : ?>
                <div class="alert alert-error">Поиск не дал результатов.</div>
            <?php endif; ?>
        	
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>