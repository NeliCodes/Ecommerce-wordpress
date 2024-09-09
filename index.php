<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package forward
 */

get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forward Clothing</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <?php wp_head(); // Important for WordPress themes ?>
</head>
<body>
    <?php wp_body_open(); // Ensures proper loading of the body ?>
 
    <hr class="hr-1">
   
    <div class="menu-items">
    <ul>
    <a href="http://electronika.byethost33.com/shop/"><li>NEW</li></a> 
    <a href="http://electronika.byethost33.com/shop/"><li>CLOTHING</li></a>
    <a href="http://electronika.byethost33.com/shop/"><li>DRESSES</li></a>
    <a href="http://electronika.byethost33.com/shop/"><li>DESIGNERS</li></a>
    <a href="http://electronika.byethost33.com/shop/"><li>SHOPS</li></a>
        
    </ul>
    </div>
   
    
    <hr class="hr-2">
    
    <div class="first-div">
        <img src="<?php echo get_template_directory_uri(); ?>/images/one.avif" alt="Description of the image" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/3.avif" alt="Description of the image" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/5.avif" alt="Description of the image" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/7.avif" alt="Description of the image" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/9.avif" alt="Description of the image" />
    </div>

    <ul class="arrows">
        <li>NEW ARRIVALS <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
        <li>DESIGNERS A-Z <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
        <li>CLOTHING <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
        <li>SHOES <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
        <li>BAGS <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
        <li>ACCESSORIES <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
        <li>BEAUTY <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
        <li>SALE <div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
</svg></div></li>
<hr>
    </ul>

    <br>
    <div class="edit-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ken.avif"  alt="Description of the image" />
    </div>
    
    <div class="third-cover">
        <div class="cover-flex">
    <img src="<?php echo get_template_directory_uri(); ?>/images/11.avif" alt="Description of the image" />
    <div class="drop-h">
    <h3>New Arrivals</h3>
    <p>Discover the latest arrivals to add to your new-season wardrobe.</p>
    </div>
        </div>
    
    <div class="cover-flex">
    <img src="<?php echo get_template_directory_uri(); ?>/images/12.avif" alt="Description of the image" />
    <div class="drop-h">
    <h3>The FWRD Summer Shop</h3>
    <p>Introducing the ultimate designation for everything you'll need for under the sun.</p>
    </div>
    </div>
    
    <div class="cover-flex">
    <img src="<?php echo get_template_directory_uri(); ?>/images/13.avif" alt="Description of the image" />
    <div class="drop-h">
    <h3>Sale</h3>
    <p>Take up to 65% off select designers.</p>
    </div>
    </div>
    
    </div>
    <div class="featured-banner">
    <h2 class="featured-heading">FEATURED ITEMS</h2>
    <div class="featured-img">
      <a href="http://electronika.byethost33.com/product/saint-laurent-gaby-card-case/"><img src="<?php echo get_template_directory_uri(); ?>/images/1-img.avif" alt="Description of the image" />
      </a>
      <a href="http://electronika.byethost33.com/product/saint-laurent-sm…velope-chain-bag/">
      <img src="<?php echo get_template_directory_uri(); ?>/images/2-img.avif" alt="Description of the image" />
      </a>
      <a href="http://electronika.byethost33.com/product/saint-laurent-jersey-tank-top/">
      <img src="<?php echo get_template_directory_uri(); ?>/images/3-img.avif" alt="Description of the image" />
      </a>
      <a href="http://electronika.byethost33.com/product/saint-laurent-mi…le-37-bucket-bag/">
      <img src="<?php echo get_template_directory_uri(); ?>/images/4-img.avif" alt="Description of the image" />
      </a>
    </div>
    </div>
    
    
    <div class="newsletter">
      <h2>NEWSLETTER</h2>
      <p>Be the first to know about new arrivals, sales & promos by submitting your email.
        You can opt out at any time. <a href="#">View privacy policy</a>
        <div>
          <input type="text" placeholder="email">
          <button>Sign Up</button>
        </div>
      </p>

    </div>

    <div class="second-footer">
      <div>
        <ul>
        <li>FWRD</li>
        <li>About Us</li>
        <li>562-407-3230</li>
        <li>Customer Care</li>
        <li>Track Your Order</li>
        <li>Shipping & Returns</li>
        <li>Live ChatChat</li>
        <li>Gift Certificates</li>
        <li>Accessibility Statement</li>

        </ul>
      </div>

      <div>
      <ul>
      <li>Ambassador Program</li>
      <li>Affiliate</li>
      <li>Careers</li>
      <li>Terms</li>
      <li>Privacy</li>
      <li>CA Privacy Rights</li>
      <li>Your Privacy Choices - CA</li>
      <li>CA Supply Chains</li>
      <li>Cookie PreferencesOpens in a modal window</li>
      </ul>
      </div>

      <div class="newsletter">
      <h2>NEWSLETTER</h2>
      <p>Be the first to know about new arrivals, sales & promos by submitting your email.
        You can opt out at any time. <a href="#">View privacy policy</a>
        <div>
          <input type="text" placeholder="email">
          <button>Sign Up</button>
        </div>
      </p>

    </div>

    <div>
    <ul>
   <li> JOIN US</li>
   <li>Facebook</li>
   <li>Instagram</li>
   <li>YouTube</li>
   <li>Twitter</li>
   <li>Pinterest</li>
    </ul>
    </div>

    <div>
    <ul>
    <li>OUR APPS</li>
    <li>iPhoneOpens in a modal window</li>
    <li>iPad</li>
    </ul>
    </div>

    </div>
    <footer>
      <div class="footer">
    <div>
        <p class="h1-footer">Help us Improve</p>
        <p>Take a brief survey about today's visit <a href="#">Begin Survey</a></p>
    </div>

    <div>
        <p class="h1-footer">Customer Care</p>
        <a href="#">Contact us</a> <br><a href="#">562-407-3230</a>
    </div>
      </div>
    </footer>
    

    <hr>
    <script>
        document.getElementById('search-icon').addEventListener('click', function(e) {
            e.preventDefault();
            var searchFormContainer = document.querySelector('.search-form-container');
            if (searchFormContainer.style.display === 'none' || searchFormContainer.style.display === '') {
                searchFormContainer.style.display = 'block';
            } else {
                searchFormContainer.style.display = 'none';
            }
        });
    </script>

    <?php wp_footer(); // Important for WordPress themes ?>
</body>
</html>

<?php
get_sidebar();
get_footer();
