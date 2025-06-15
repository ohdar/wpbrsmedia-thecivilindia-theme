<?php
/*
* This is used to display about us single pages
* Template Name: Single Quizzes
*/

get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-9 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                            <!-- Content -->
                            <article class="box post">
                          		
                          		                                 
                                <header>
                          			
                                    <h1><?php the_title() ?></h1>
                                </header>
                          		<?php the_content() ?>
								
                          		
                            </article>
                    <?php }
                    }
                ?>




            </div>
            <?php //get_sidebar() ?>
            <?php 
            function is_blog () {
                global  $post;
                $posttype = get_post_type($post );
                return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
                }
            function check_post_type(){
                $postType;
                if (is_blog())
                {
                    $postType = 'I am post';
                } else
                {
                    //$postType = 'administration';
                    $postType = get_post_type( $post->ID );
                    //echo $post_type;
                };
                return $postType;
            }
            $postType=check_post_type();
            //echo $postType;
            get_sidebar("$postType")
            ?>
 			
        </div>
    </div>

</section>

<?php get_footer() ?>