<?php get_header();
   the_post();
?>

  <!-- blog content-->
  <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                <h2><?php the_title(); ?></h2>
                <?php  $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');?>
                <img src="<?php echo $imagepath[0] ?>">

                <div><?php the_date();?></div>
                <div><b>Author Name: </b><?php the_author();?></div>
                <div><?php the_content(); ?></div>
                   <div>
                    <?php //comment_form();
                    comments_template();
                    ?>
                   </div>
            </div>
           
           
            <div class="blog-right">
                <h3>Pot Categories</h3>
                <div>
                    <span>Business Analytic</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Data Science</span>
                    <span>28</span>
                </div>
                <div>
                    <span>Machine Learning</span>
                    <span>21</span>
                </div>
                <div>
                    <span>Business Analytic</span>
                    <span>30</span>
                </div>
                <div>
                    <span>Computer Science</span>
                    <span>51</span>
                </div>
            </div>

            

        </div>
    </section>

<?php get_footer();?>
