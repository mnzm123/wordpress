<?php 
get_header();
// get_header('inner'); 
?>

    <!-- blog content-->
    <section class="blog-content">
        <div class="row">
            <div class="blog-left">
                
            <?php 
            while(have_posts()){
             the_post();
             $imagepath=wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
            
            ?>
               <img src="<?php echo $imagepath[0]?>">
               <h2><?php the_title(); ?></h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi necessitatibus velit temporibus, dolorum eveniet sed! Incidunt tempora reprehenderit aliquam nemo optio, id voluptas ab repellendus ducimus mollitia dolorum adipisci et!</p>
                
                <br />
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae est deserunt enim tempore, itaque, mollitia blanditiis velit nesciunt, voluptate quam totam minus sapiente ut officiis adipisci et corporis sunt ad.Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores sunt provident rerum quia aspernatur magnam. Quos voluptatem dolore corrupti distinctio. Inventore, distinctio earum. Consequatur eum nam doloribus voluptatum. Id, similique?</p>
                <br />
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod magnam quia consequuntur sit beatae praesentium accusantium earum est nemo eum accusamus deserunt sed, sequi explicabo debitis nobis alias, assumenda ratione?</p>
                <a href="<?php the_permalink(); ?>"><input type="button" value="Read more" /></a>
                <?php } ?>
                <?php
                wp_pagenavi();
                ?>
                <div class="comment-box">
                    <h2>Leave a comment</h2>
                    <form class="comment-form">
                        <input type="text" placeholder="Enter Name" />
                        <input type="emil" placeholder="Enter Email"/>
                        <textarea rows="5" placeholder="Your comment"></textarea>
                        <button type="submit" class="hero-btn read-btn">POST COMMENT</button>
                    </form>
                </div>
            </div>
           
            <div class="blog-right">
                <?php dynamic_sidebar('sidebar')?>
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
    <!-- Footer -->
  <?php 
  get_footer();?>


    
<!-- Javascript for Toggle Menu-->
    <script>
       var navlink= document.getElementById("navLinks");
        function showMenu(){
            navlink.style.right="0";
        }
        function hideMenu(){
            navlink.style.right="-200px";
        }
    </script>
</body>
</html>