<?php
    $title = 'OWASOL TECH.';
    $pageClass  = 'home-page';
    $pageName   = 'home';
    $keywords = 'Web development, E-Commerce Store Development, Web app development, Wordpress development, web software house';
    $description = 'OWASOL Tech provides web based solutions by merging imagination and technology to grow your business by taking your it online.';
    include('components/header.php');
    include('components/sidebar.php');
?>
    <section id="home">
        <div class="banner">
            <div class="tagline">
                <h1 class="fw-bold">Welcome to <span class="owasol-tech-name">OWASOL TECH</span></h1>
                <h4>
                    We merge imagination and technology to help brands grow in an age of digital transformation by
                    Taking Your Business Online
                </h4>
            </div>
            <div class="explore-now text-center">
                <a href="#explore">
                    Explore
                    <i class="fal fa-chevron-down d-block"></i>
                </a>
            </div>
        </div>
    </section>

    <section id="explore">
        <div class="container-fluid">
            <div class="section-content">
                <h2 class="text-white">Use the menu button on the left to explore about us, our service, our team & much more.</h2>
                <button class="btn btn-light menu-btn"><i class="fas fa-bars"></i> Open Menu Now</button>
            </div>
        </div>
    </section>


<?php
    include('components/footer_scripts.php');
?>