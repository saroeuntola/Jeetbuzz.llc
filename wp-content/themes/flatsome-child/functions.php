<?php

function flatsome_related_post($content) {
    if(is_singular('post')) {
        global $post;
        ob_start();
        $categories = get_the_category($post->ID);
        if ($categories) {
            $category_ids = array();
            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
            $args=array(
                'category__in' => $category_ids,
                'post__not_in' => array($post->ID),
                'posts_per_page'=>6,
                'ignore_sticky_posts'=>1
            );
        
            $my_query = new wp_query( $args );
            if( $my_query->have_posts() ) {?>
                <div class="relatedcat">
                    <p class="related-post-title">সম্পর্কিত পোস্ট:</p>
                    <div class="row related-post">
                        <?php while ($my_query->have_posts()):$my_query->the_post(); ?>
                            <div class="col large-4">
                                <a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>">
                                    <div class="feature">
                                        <div class="image" style="background-image:url(<?php echo get_the_post_thumbnail_url();?>);"></div>
                                    </div>                            
                                </a>
                                <div class="related-title"><a href="<?php echo get_the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <style>
                    .relatedcat {padding-top: 10px;border-top: 1px solid #e8e8e8;margin-top: 20px;}p.related-post-title {font-size: 18px;font-weight: bold;}.feature {position: relative;overflow: hidden;}.feature::before {content: "";display: block;padding-top: 56.25%;}.feature .image{position: absolute;top: 0;left: 0;bottom: 0;right: 0;margin: auto;background-size: cover;background-position: center;}ul.row.related-post li {list-style: none;}.related-title {line-height: 1.3 !important;margin-top: 10px !important;}
                </style>
            <?php } // end if has post
        } // end if $categories
        $related_post = ob_get_contents();
        ob_end_clean();
        return $content.$related_post;
    } //end if is single post
    else return $content;
}
add_filter('the_content', 'flatsome_related_post');

if( !function_exists('redirect_404_to_homepage') ){

    add_action( 'template_redirect', 'redirect_404_to_homepage' );

    function redirect_404_to_homepage(){
       if(is_404()):
            wp_safe_redirect( home_url('/') );
            exit;
        endif;
    }
}
add_filter( 'wpseo_json_ld_output', '__return_false' );


if(is_admin()){
    add_action( 'admin_head', 'wpshare247_hide_editor' );
    function wpshare247_hide_editor() {
        remove_post_type_support('page', 'editor');
    }
}