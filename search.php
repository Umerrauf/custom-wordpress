<?php get_header(); ?>

<h2 class="page-heading">Search Results for <?php echo  get_search_query();?></h2>


<?php if(have_posts()) { ?>


<section>

    <?php 
            //array defination for number of posts per page and post call
        //while loop for blog posts to show on main page //   
        
        while (have_posts())
            {
                the_post();
            
            ?>




    <div class="card">
        <div class="card-image">
            <a href="<?php the_permalink(); ?>">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
            </a>
        </div>

        <div class="card-description">
            <a href="<?php the_permalink(); ?>">
                <h3> <?php the_title();?></h3>
            </a>

            <div class="card-meta">

                Posted by <?php the_author();?> On <?php the_time('F j,Y'); //time format?>

                <?php if(get_post_type() == 'post'){ ?> in


                <a href="#"><?php echo get_the_category_list(', '); ?></a>

                <?php } ?>


            </div>
            <p>
                <?php echo wp_trim_words(get_the_excerpt(),30);?>
            </p>
            <a href="<?php the_permalink();?>" class="btn-readmore">Read More</a>
        </div>

    </div>

    <?php } //reseting query 
                wp_reset_query();
                
                ?>


</section>


<?php }else{ ?>

<div class="no-results">
    <h2>Couldn't find anything :( Did  you miss type something?</h2>
    <h3>Dont't Worry</h3>
    <h3>Check Out the Following Links:</h3>

    <ul>
        <li>
            <a href="<?php echo site_url('/blog');  ?>">Blog</a>
        </li>
        <li>
            <a href="<?php echo site_url('/projects');  ?>">Projects</a>
        </li>

        <li>
            <a href="<?php echo site_url('/about');  ?>">About Me</a>
        </li>
        
        <li>
            <a href="<?php echo site_url('/about');  ?>">Home</a>
        </li>

    </ul>

</div>
<?php } ?>


<div class="pagination">
    <?php echo paginate_links();?>

</div>




<?php 
            
            get_footer(); 


?>