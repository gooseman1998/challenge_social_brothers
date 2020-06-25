<!DOCTYPE html>
<html>

<head>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>

    <div class="container">
        <div class="header-img img">
            <nav class="navbar">
                <a class="navbar-brand" href="/">
                    <img src="http://challengesan.wpengine.com/wp-content/uploads/2020/06/social-brother-logo-white.png">
                </a>

                <?php wp_nav_menu(

                        array(

                            'theme_location' => 'top-menu',
                            'menu_class'=> 'top-menu-nav'

                        )

                );?>
            </nav>
            <?php  if (is_archive()) : echo "<h1 class='cat-name'>" . get_the_category()[0] -> name . "</h1>"?>  <?php endif; ?>
        </div>
    </div>
</header>



