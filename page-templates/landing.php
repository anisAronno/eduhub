<?php 
/**
* Template Name: Landing Page
*/
?>
<?php get_header();?>
<?php get_template_part("/page-templates/template-parts/menu")?>
<?php get_template_part("/page-templates/template-parts/slider")?>
<?php get_template_part("/page-templates/template-parts/featured")?>
<?php get_template_part("/page-templates/template-parts/about")?>
<?php get_template_part("/page-templates/template-parts/statistics")?>
<?php get_template_part("/page-templates/template-parts/expert")?>
<?php get_template_part("/page-templates/template-parts/testimonials")?>
<?php get_template_part("/page-templates/template-parts/blog")?>


<section class="ftco-intro" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Teaching Your Child Some Good Manners</h2>
                <p class="mb-0">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
            <div class="col-md-3 d-flex align-items-center">
                <p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Take a Course</a></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Our</span> Courses</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/course-1.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Arts Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/course-2.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Language Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/course-3.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Music Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="col-md-6 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/course-4.jpg);"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">Sports Lesson</a></h3>
                    <p class="subheading"><span>Class time:</span> 9:00am - 10am</p>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/bg_5.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 py-5 px-md-5 bg-primary">
                <div class="heading-section heading-section-white ftco-animate mb-5">
                    <h2 class="mb-4">Request A Quote</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <form action="#" class="appointment-form ftco-animate">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="form-field">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Select Your Course</option>
                                        <option value="">Art Lesson</option>
                                        <option value="">Language Lesson</option>
                                        <option value="">Music Lesson</option>
                                        <option value="">Sports</option>
                                        <option value="">Other Services</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Our</span> Pricing</h2>
                <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Basic</h3>
                        <p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/bg_1.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Standard</h3>
                        <p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/bg_2.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light active pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Premium</h3>
                        <p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/bg_3.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="pricing-entry bg-light pb-4 text-center">
                    <div>
                        <h3 class="mb-3">Platinum</h3>
                        <p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p>
                    </div>
                    <div class="img" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/bg_5.jpg);"></div>
                    <div class="px-4">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                    <p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">Take A Course</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            <div class="col-md-3 ftco-animate">
                <a href="<?php echo get_template_directory_uri()?>./assets/images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/course-1.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="<?php echo get_template_directory_uri()?>./assets/images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/image_2.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="<?php echo get_template_directory_uri()?>./assets/images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/image_3.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
            <div class="col-md-3 ftco-animate">
                <a href="<?php echo get_template_directory_uri()?>./assets/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo get_template_directory_uri()?>./assets/images/image_4.jpg);">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-instagram"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>
