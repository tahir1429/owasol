<?php
    $title = 'Testimonials | OWASOL TECH.';
    $pageClass  = 'testimonials-page';
    $pageName   = 'testimonials';
    $keywords = 'Owasol authentication, Owasol review, reviws, testimonials, owasol testimonials';
    $description = 'OWASOL Tech provides web based solutions by merging imagination and technology to grow your business by taking your it online.';
    include('components/header.php');
    include('components/sidebar.php');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <section class="testimonials page-section" id="testimonials">
        <div class="container-fluid">
            <div class="page-content">
                <p class="owasol-breadcumbs">
                    You are now visiting
                    <a href="index.php">Home</a> /
                    <a href="testimonials.php">Testimonials</a>
                </p>
                <h1 class="text-center text-white mb-0"><i class="fal fa-comment-alt"></i> Testimonials</h1>
                <p class="text-light text-italic text-center">See yourself! what our clients say about us</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="slick-testimonials mt-5 mb-5">
                            <?php
                                include_once('data/testimonials.php');
                                foreach ($testimonials as $key => $testimonial) {
                            ?>
                                    <div class="user-review text-center">
                                        <div class="icon border"><i class="fal fa-user"></i></div>
                                        <div class="name">
                                            <h4><?php echo $testimonial['name']; ?></h4>
                                        </div>
                                        <div class="review"><?php echo $testimonial['review']; ?></div>
                                        <div class="country">
                                            <i class="fal fa-globe"></i> 
                                            <?php echo $testimonial['country']; ?>
                                        </div>
                                    </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include('components/footer.php');
    include('components/footer_scripts.php');
?>

    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.slick-testimonials').slick({
                dots: true,
                centerMode: true,
                centerBackground: '60px',
                slidesToShow: 3,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>