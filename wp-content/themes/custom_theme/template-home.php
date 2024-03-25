<?php 
//Template Name:home
get_header();
// get_header('inner'); 
?>

    <!-- Course -->
    <section class="course">
        <h1>Course We Offer</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        <div class="row">
            <div class="course-col">
                <h3>Intermediate</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, voluptate nobis quae corrupti quaerat </p>
            </div>
            <div class="course-col">
                <h3>Degree</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, voluptate nobis quae corrupti quaerat</p>
            </div>
            <div class="course-col">
                <h3>Post Graduation</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, voluptate nobis quae corrupti quaerat </p>
            </div>
        </div>
    </section>

    <!-- Caampus -->
    <section class="campus">
       <h1>Our Global Campuss</h1>
       <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
       <div class="row">
           <div class="campus-col">
               <img src="<?php bloginfo('template_directory') ?>/images/london.png" alt="london" />
               <div class="layer">
                   <h3>LONDON</h3>
               </div>
           </div>
           <div class="campus-col">
            <img src="<?php bloginfo('template_directory') ?>/images/newyork.png" alt="newyork" />
            <div class="layer">
                <h3>NEW YORK</h3>
            </div>
        </div>
        <div class="campus-col">
            <img src="<?php bloginfo('template_directory') ?>/images/washington.png" alt="WASHINGTON" />
            <div class="layer">
                <h3>WASHINGTON</h3>
            </div>
        </div>
       </div>
    </section>

    <!-- facilities-->
    <section class="facilities">
        <h1>Our Facilities</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="facilities-col">
                <img src="<?php bloginfo('template_directory') ?>/images/library.png"/>
                <h3>World Class Library</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, facere, quos a modi doloribus autem et inventore</p>
            </div>
            <div class="facilities-col">
                <img src="<?php bloginfo('template_directory') ?>/images/basketball.png"/>
                <h3>Largest Play Ground</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, facere, quos a modi doloribus autem et inventore</p>
            </div>
            <div class="facilities-col">
                <img src="<?php bloginfo('template_directory') ?>/images/cafeteria.png"/>
                <h3>Tasty and Healthy Food</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui, facere, quos a modi doloribus autem et inventore</p>
            </div>
        </div>
        
    </section>

    <!-- Testimonials-->
    <section class="testimonials">
        <h1>What Our Students Says</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
        <div class="row">
            <div class="testimonials-col">
                <img src="<?php bloginfo('template_directory') ?>/images/user1.jpg" alt="user-1"/>
                <div class="desc">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum perferendis commodi nam placeat, reiciendis vitae, est error tempore doloribus exercitationem sit. Ullam soluta nisi corrupti cumque, similique est rerum reiciendis!</p>
                    <div class="detail">
                    <h3>Christine Berklye</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                    </div>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="<?php bloginfo('template_directory') ?>/images/user2.jpg" alt="user-1"/>
                <div class="desc">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum perferendis commodi nam placeat, reiciendis vitae, est error tempore doloribus exercitationem sit. Ullam soluta nisi corrupti cumque, similique est rerum reiciendis!</p>
                    <div class="detail">
                    <h3>David Byer</h3>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="action">
        <h1>Enroll For Our Various Online Courses<br /> Anywhere From The World</h1>
        <a href="" class="hero-btn">CONTACT US</a>
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