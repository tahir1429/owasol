<?php
    $title = 'Get Estimate | OWASOL TECH.';
    $pageClass  = 'estimate-page';
    $pageName   = 'get-estimate';
    $keywords = 'Owasol services, experties, owasol experties, owasol offers, our services';
    $description = 'Our services cover all aspects from designing to hosting on your server step by step.';
    include('components/header.php');
    include('components/sidebar.php');
?>

    <section class="services page-section" id="services">
        <div class="container-fluid">
            <div class="page-content">
                <p class="owasol-breadcumbs">
                    You are now visiting
                    <a href="index.php">Home</a> /
                    <a href="get-estimate.php">Get Estimate</a>
                </p>
                <h1 class="text-center text-white mb-1"><i class="fal fa-calculator"></i> Get Estimate</h1>
                <br>
                <form action="" class="estimate-form">
                    <div class="row mt-1">
                        <div class="col-md-12">
                            <div class="estimate-container text-center bg-light p-3">
                                <h2 class="bg-owasol text-white text-start p-2 px-3 mb-4">What type of Website you need?</h2>
                                <div class="row mb-3">
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fab fa-html5"></i> Static HTML Website</p>
                                        <label class="switch" for="static">
                                            <input type="radio" name="website_platform" id='static' value="50">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fab fa-wordpress"></i> Wordpress</p>
                                        <label class="switch" for="wordpress">
                                            <input type="radio" name="website_platform" id='wordpress' value="100">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-code"></i> Custom CMS</p>
                                        <label class="switch" for="custom">
                                            <input type="radio" name="website_platform" id='custom' value="100">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fab fa-angular"></i> Mean Stack</p>
                                        <label class="switch" for="mean-stack">
                                            <input type="radio" name="website_platform" id='mean-stack' value="200">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Website Type  -->
                                <h2 class="bg-owasol text-white text-start p-2 px-3 mb-4"><i class="fal fa-globe"></i> Website Type</h2>
                                <div class="row mb-3">
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-globe"></i> Regular Website</p>
                                        <label class="switch" for="regular-website">
                                            <input type="radio" name="website_type" id='regular-website' value="20">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-shopping-cart"></i> Ecommerce Website</p>
                                        <label class="switch" for="ecommerce-website">
                                            <input type="radio" name="website_type" id='ecommerce-website' value="50">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-box"></i> Online Store</p>
                                        <label class="switch" for="store-website">
                                            <input type="radio" name="website_type" id='store-website' value="60">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-newspaper"></i> Blog Website</p>
                                        <label class="switch" for="blog-website">
                                            <input type="radio" name="website_type" id='blog-website' value="40">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-users"></i> Social Website</p>
                                        <label class="switch" for="social-website">
                                            <input type="radio" name="website_type" id='social-website' value="100">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                                <!-- Website Pages  -->
                                <h2 class="bg-owasol text-white text-start p-2 px-3 mb-4"><i class="fal fa-file"></i> Number Of Pages</h2>
                                <div class="row mb-3">
                                    <div class="col-md-8">
                                        <input class="w-100 range-slider" name="total_pages" type="range" min="5" max="100" step="5" value="10" id="myRange">
                                    </div>
                                    <div class="col-md-4">
                                        <p class="m-0 total-pages">Total Pages: 5</p>
                                    </div>
                                </div>

                                <!-- Website Addons  -->
                                <h2 class="bg-owasol text-white text-start p-2 px-3 mb-4"><i class="fal fa-boxes"></i> Website add-ons</h2>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-newspaper"></i> Blog</p>
                                        <label class="switch" for="blog">
                                            <input type="checkbox" name="website_addon" id='blog' value="70">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-search"></i> Onsite Search</p>
                                        <label class="switch" for="search">
                                            <input type="checkbox" name="website_addon" id='search' value="50">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-dollar-sign"></i> Payment Gateway</p>
                                        <label class="switch" for="payment">
                                            <input type="checkbox" name="website_addon" id='payment' value="50">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-sign-in-alt"></i> Member login /‍‍‍<i class="fal fa-user"></i> Profiles</p>
                                        <label class="switch" for="profile">
                                            <input type="checkbox" name="website_addon" id='profile' value="150">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-comment"></i> Liv‍‍‍e chat</p>
                                        <label class="switch" for="chat">
                                            <input type="checkbox" name="website_addon" id='chat' value="100">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-users"></i> Social Media (share/lik‍‍‍e/reviews)</p>
                                        <label class="switch" for="social">
                                            <input type="checkbox" name="website_addon" id='social' value="80">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-images"></i> Gallery / <i class="fal fa-th"></i> Portfolio</p>
                                        <label class="switch" for="gallery">
                                            <input type="checkbox" name="website_addon" id='gallery' value="50">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <p class="mb-1"><i class="fal fa-comment-alt"></i> Testimonials</p>
                                        <label class="switch" for="testimonials">
                                            <input type="checkbox" name="website_addon" id='testimonials' value="40">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>

                                <hr>
                                <p class="text-dark text-start"><span class="text-danger">*</span> Price calculated is not the exact price. It changes/varies depending of many factors. We calculates this price keping in view the standard price all over the world. To get the exact price please feel free to contact us.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <div class="estimate-count">
        <h5>Starting Price:</h5>
        <h3>30 $</h3>
    </div>

    <?php
    include('components/footer.php');
    include('components/footer_scripts.php');
?>




    <script>

        $(document).ready(function(){
            $('input').on('change', function(){
                $('.estimate-form').submit();
                return false;
            });

            $('.estimate-form').on('submit', function(event){
                    event.preventDefault();
                    let form = $(this);
                    let total = 30;
                    // Calculate Price
                    // 1. Website Platform
                    total += parseInt((form[0].website_platform.value == '') ? 0 : form[0].website_platform.value);
                    // 2. Website Type
                    total += parseInt((form[0].website_type.value == '') ? 0 : form[0].website_type.value);
                    // 3. Total Pages
                    total += parseInt((form[0].total_pages.value-5)*10);
                    // 4. Addons
                    $(form[0].website_addon).each(function(){
                        if($(this).is(':checked'))
                            total += parseInt(this.value);
                    });
                    $('.estimate-count h5').html('Approx. Price:');
                    $('.estimate-count h3').html(total+' $');
                    return false;
            });

            $('.range-slider').on('change', function(){
                $('.total-pages').html('Total Approx. Pages: '+this.value);
            });
        });










        $(window).scroll(function () {
            var height = $(window).scrollTop();
            if (height > 200) {
                $('.scroll-top').removeClass('d-none');
            } else {
                $('.scroll-top').addClass('d-none');
            }


            const winTop = $(this).scrollTop();
            var $sections = $('section');
            let id = '';

            $.each($sections, function (key, item) {
                let scroll = 0;
                if ($(item).attr('id') != 'services')
                    scroll = winTop + 100;
                else
                    scroll = winTop + 300;

                if ($(item).position().top <= scroll) {
                    id = $(item).attr('id');
                }
            });
            $('.navbar-nav .nav-item').removeClass('active');
            $('.navbar-nav .nav-item.link-' + id).addClass('active');
        });
    </script>

</body>

</html>