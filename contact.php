<!DOCTYPE html>
<html lang="zxx">

<?php require_once 'components/header.php'; ?>

<body>
  
<!-- Header Start --> 

<?php require_once 'components/navigation.php'; ?>

<!-- Header Close --> 


<section class="page-title section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-center">
          <h1 class="text-capitalize mb-0 text-lg">Get in Touch</h1>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->
<section class="contact section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-4 mb-lg-0 col-md-4">
                <h4>Contact Info</h4>
                <p>Lorem ipsum dolor sit amet, conse adipisicing elit libero incidunt quod.</p>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0 col-md-4">
                <h4>Address</h4>
                <p>3971 Wines Lane Houston, Texas 77036 <br>363 Detroit Street</p>
            </div>
            <div class="col-lg-4 col-md-4">
                <h4>Contact</h4>
                 <p class="mb-0">info@example.com</p>
                <p class="mb-0">1800 667 3322</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="google-map">
                    <div id="map"></div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5 contact-title">
                    <h2>Contact us</h2>
                </div>

                <form id="contact-form" class="contact__form mt-5" method="post" action="mail.php">
             <!-- form message -->
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                    </div>
                </div>
                <!-- end message -->
                <div class="form-row">
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group mb-3">
                            <input name="name" type="text" class="form-control" placeholder="Your Subject">
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group mb-3">
                            <input name="email" type="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="col-lg-12">
                         <div class="form-group-2 mb-4">
                            <textarea name="message" class="form-control" rows="6" placeholder="Your Message"></textarea>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-main" name="submit" type="submit">Send Message</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>  
        </div>
    </div>
</section>

<?php require_once 'components/footer.php'; ?>

</html>