<?php get_header(); ?>
        
        <div id="siteContentWrap" class="clearfix">
            <div id="content">
            
            <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h2 class="postTitle"><a href="<?php the_permalink(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <div class="postInfo">Posted on <?php the_time('F j, Y') ?> by, <?php the_author(); ?></div>

                        <div class="postText">
                            <?php the_content('Read the rest of this entry'); ?>
                        </div>
                        
                        <div class="postMetaData">
                            <?php if(has_tag()): ?><div class="postTags"><?php the_tags(); ?></div><?php endif; ?>
                            <div>                       
                                <span class="postCategory"><?php the_category(', ') ?></span> |
                                <?php edit_post_link('Edit', '', ' |'); ?>
                                <?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'postComments', 'Comments disabled'); ?>
                            </div>
                        </div>
                    </div>
                    
                <?php endwhile; ?>

                    <div id="pagination">
                        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                    </div>
                
                <?php else: ?>
                    <div class="hentry">
                        <h2>No Results Found</h2>
                        <p>Your search did not turn up any results, please try your search again.</p>
                    </div>
                <?php endif; ?>
                
            </div>
            <?php get_sidebar(); ?>
        </div>
        
<?php get_footer(); ?>