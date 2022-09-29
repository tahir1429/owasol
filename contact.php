<?php
    $title = 'Contact Us | OWASOL TECH.';
    $pageClass  = 'contact-page';
    $pageName   = 'contact';
    $keywords = 'Owasol contact, contact us, contact owasol, company contact, contact';
    $description = 'Contact us. Owasol support team is always available to answer your any query 24/7/.';
    include('components/header.php');
    include('components/sidebar.php');
?>

    <section class="contact-us page-section" id="contact-us">
        <div class="container-fluid">
            <div class="page-content">
                <p class="owasol-breadcumbs">
                    You are now visiting:
                    <a href="index.php">Home</a> /
                    <a href="contact.php">Contact Us</a>
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="border rounded px-3">
                            <h1 class="text-center mb-0 text-white font-weight-bold mt-5">Get In Touch</h1>
                            <p class="text-white text-italic text-center">We're here to help & answer any question you might have.
                                We look forward to hearing from you.</p>
                            <form action="" class="contact-form mb-5">
                                <div class="form-group mb-2">
                                    <label for="full_name">Full Name</label>
                                    <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Your Full Name"
                                        required />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="email">Email</label>
                                    <span data-toggle="tooltip"
                                        title="Please provide your orgional email address. So we'll be able to reach you back at this email address."><i
                                            class="fas fa-question-circle"></i></span>
                                    <input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address"
                                        required />
                                </div>
                                <div class="form-group mb-2">
                                    <label for="message">Your Message</label>
                                    <span data-toggle="tooltip"
                                        title="Please explain your query well. So we'd be able to understand & help you accordingly."><i
                                            class="fas fa-question-circle"></i></span>
                                    <textarea name="message" id="message" rows="3" class="form-control" placeholder="Enter Here"
                                        required></textarea>
                                </div>
                                <div class="form-group mb-2">
                                    <button class="btn btn-outline-light float-right"><i class="fal fa-paper-plane"></i> Send Message</button>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 map">
                        <iframe class="w-100"
                            src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1701.7876970151435!2d74.29478896590687!3d31.453354412078447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d31.45378!2d74.2945798!4m0!5e0!3m2!1sen!2s!4v1543758231015"
                            style="width:100%;height: 100%;" frameborder="0" allowfullscreen="">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include('components/footer.php');
    include('components/footer_scripts.php');
?>