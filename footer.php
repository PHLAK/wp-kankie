        <div id="siteFooter" class="clearfix">
        
                <ul class="footerBox left">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
                    <?php endif; ?>
                </ul>
        
                <ul class="footerBox center">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?>
                    <?php endif; ?>
                </ul>
        
                <ul class="footerBox center">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?>
                    <?php endif; ?>
                </ul>
            
            <div class="footerBox right">
                &copy; <?php echo date('Y'); ?> <a href="<?php echo(bloginfo('url')); ?>" title="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>"><?php bloginfo('name'); ?></a>
            </div>
            
        </div>
        
    </div>
    
    <?php wp_footer(); ?>
    
    <!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

    <!--
    22416e64206361666665696e652e2049206b6e6f77207468617420736f6d6520
    6f6620796f75207468696e6b2074686174206c69666520776974686f75742020
    6361666665696e652069732061637475616c6c7920776f727468206c6976696e
    672e204275742069742069736e27742e22202d53636f7474204164616d73
    -->

</body>
</html>
