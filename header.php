<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package forward
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'forward' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="top">
            <div class="icon-menu">
            <div class="svg-container">
            <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
            </svg>
        </div>

        <div class="menu-items-s" style="display: none;">
            <ul>
                <a href="http://electronika.byethost33.com/shop/"><li>NEW</li></a> 
                <a href="http://electronika.byethost33.com/shop/"><li>CLOTHING</li></a>
                <a href="http://electronika.byethost33.com/shop/"><li>DRESSES</li></a>
                <a href="http://electronika.byethost33.com/shop/"><li>DESIGNERS</li></a>
                <a href="http://electronika.byethost33.com/shop/"><li>SHOPS</li></a>
            </ul>
        </div>

                <div class="svg-logo">
                    <a href="http://electronika.byethost33.com/">
                        <svg viewBox="0 0 420.23 102.23" aria-hidden="true" focusable="false" class="branding__logo branding__logo--sm">
                            <path d="M28.72,25.56V38.91H70.31V63H28.72v39.2H0V0H77.82V25.56Z"></path>
                            <path d="M226.27,0,198.7,102.23H166.54l-6.32-30.29c-2.58-12.35-5-24.85-6.89-37.34-2,12.49-4.45,25-7,37.34L140,102.23H107.81L80.25,0h30l6.61,29.43c3,13.5,6.17,27.57,8.61,40.93,2.3-13.36,4.89-27.43,7.61-40.93l6-29.43H167.4l6,29.43c2.73,13.5,5.31,27.57,7.61,40.93,2.44-13.36,5.6-27.43,8.62-40.93L196.26,0Z"></path>
                            <path d="M269.05,67.77H257v34.46H228.27V0h49.1c23.55,0,39.2,11.92,39.2,32.74,0,14.21-7.32,24.55-19.38,29.57l23.4,39.92h-32ZM257,46h18.23C282.83,46,288,41.21,288,34.17S282.83,22.4,275.22,22.4H257Z"></path>
                            <path d="M420.23,51.11c0,30.16-16.37,51.12-53,51.12H322.59V0h44.66C403.86,0,420.23,21,420.23,51.11Zm-29.87,0c0-19.95-10.05-27-23.69-27H351.31v54h15.36C380.31,78.11,390.36,71.07,390.36,51.11Z"></path>
                        </svg>
                    </a>
                </div>  
            </div>

            <div class="svg-icons">
                <a href="#" id="search-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                      <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                    </svg>
                </a>
                
               
                <a href="http://electronika.byethost33.com/cart/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                      <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
                    </svg>
                </a>

                <a href="http://electronika.byethost33.com/my-account/" aria-current="page">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
                </a>
            </div>
        </div>
        <div class="search-form-container" style="display: none;">
                    <?php get_search_form(); ?>
                </div>
    </header>

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

        document.getElementById('menu-icon').addEventListener('click', function() {
        var menuItems = document.querySelector('.menu-items-s');
        if (menuItems.style.display === 'none' || menuItems.style.display === '') {
            menuItems.style.display = 'block';
        } else {
            menuItems.style.display = 'none';
        }
    });
    </script>

    <?php wp_footer(); ?>
</body>
</html>

	