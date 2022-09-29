<?php
    $title = 'Portfolio | OWASOL TECH.';
    $pageClass  = 'portfolio-page';
    $pageName   = 'portfolio';
    $keywords = 'Owasol work, portfolio, owasol portfolio, owasol gallery, owasol experience';
    $description = 'OWASOL Tech provides web based solutions by merging imagination and technology to grow your business by taking your it online.';
    include('components/header.php');
    include('components/sidebar.php');
?>
<link rel="stylesheet" href="libraries/slick-1.8.1/slick/slick.css">
<link rel="stylesheet" href="libraries/slick-1.8.1/slick/slick-theme.css">


    <section class="portfolio page-section" id="portfolio">
        <div class='container-fluid'>
            <div class="page-content">
                <p class="owasol-breadcumbs">
                    You are now visiting
                    <a href="index.php">Home</a> /
                    <a href="portfolio.php">Our Portfolio</a>
                </p>
                <h1 class='text-center text-white mb-0 font-weight-bold'><i class="fal fa-images"></i> Our Portfolio</h1>
                <p class="text-center">Have a look at our work we have completed for clients all over the world</p>
                
                <?php
                    include('data/portfolio.php');
                ?>
                
                <!-- Grid row -->
                <div class="row mb-5"> 
                    <!-- Grid column -->
                    <div class="col-md-12 text-center">
                        <div class="custom-radio">
                            <input type="radio" name="filter" class="filter" id="all" data-rel="all" checked />
                            <label for="all">All</label>
                        </div>
                        <?php
                            foreach ($categoroes as $key => $category) {
                        ?>
                                <div class="custom-radio">
                                    <input type="radio" name="filter" class="filter" id="<?php echo $category; ?>" data-rel="<?php echo $category; ?>" />
                                    <label for="<?php echo $category; ?>"><?php echo $category; ?></label>
                                </div>
                        <?php
                            }
                        ?>
                        <div class="custom-radio d-none">
                            <input type="radio" name="filter" class="filter" id="Health" data-rel="1" />
                            <label for="Health"><i class="fal fa-briefcase-medical"></i> Health</label>
                        </div>
                    </div>
                    <!-- Grid column -->
                
                </div>
                <!-- Grid row -->
                
                <!-- Grid row -->
                <div class="gallery" id="gallery">
                    <?php
                        foreach ($portfolio as $key => $project) {
                    ?>
                        <!-- Grid column -->
                        <div class="pics animation all <?php echo $project['category']; ?>">
                            <img class="img-fluid" data-index='<?php echo $key; ?>' src="media/gallery/<?php echo $project['imgDir'].'/'.$project['images'][0]; ?>" alt="<?php echo $project['website_title']; ?>">
                        </div>
                        <!-- Grid column -->
                    <?php
                        }
                    ?>                
                </div>
                <!-- Grid row -->
            </div>
        </div>
        <!-- Container End -->
    </section>

<?php
    include('components/footer.php');
    include('components/footer_scripts.php');
?>

<script src="libraries/slick-1.8.1/slick/slick.min.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fal fa-times"></i>
                </button>
                <div class="row">
                    <div class="col-md-12">
                        <div class="project-content py-2 px-1">
                            <h3 class="project-name text-white fw-light mb-2"></h3>
                            <h4 class="tech text-dark">
                                <p class="mb-1 text-white">Technologies Used:</p>
                                <div class="tech-list"></div>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="project-portfolio"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script>
        // Tooptip
        $(document).ready(function () {
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Gallery Filter
        $(function () {
            var selectedClass = "";
            $(".filter").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#gallery").fadeTo(100, 0.1);
                $("#gallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function () {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#gallery").fadeTo(300, 1);
                }, 300);
            });
        });
        // Display image on modal
        $(document).on('click', '.gallery .pics img', function () {
            let index = $(this).data('index');
            console.log(index);
            $.ajax({
                method: "POST",
                url: "data/portfolio.php",
                data: { index: index }
            })
            .done(function( msg ) {
                let response = JSON.parse(msg);
                $('.project-portfolio').slick('removeSlide', null, null, true);
                // Images
                response.images.forEach(element => {
                    let imagePath = 'media/gallery/'+response.imgDir+'/'+element;
                    let image = '<div><div class="loading-overlay"><i class="fal fa-spin fa-spinner"></i> Loading Image </div><img class="w-100 img-thumbnail img-fluid" src="'+imagePath+'" alt=""></div>';
                    $('.project-portfolio').slick('slickAdd',image);
                });
                // Technologies
                let tech = '';
                response.technologies.forEach(element => {
                    tech += '<span style="background-color:rgba(255,255,255,0.6);" class="badge fw-light text-dark p-1 me-1">'+element+'</span>';
                });
                $('.tech-list').html(tech);
                $('.project-name').text(response.website_title);
                $('#galleryModal').modal('show');
            });
        });

        initSlick();

        function initSlick(){
            $('.project-portfolio')
            .on('init', function(slick) {
                console.log('fired!');
                //$('.slider').fadeIn(3000);
            })
            .slick({
                dots: true,
                infinite: true,
                arrows: false,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                centerMode: true,
                centerBackground: '60px',
            });
        }
    </script>