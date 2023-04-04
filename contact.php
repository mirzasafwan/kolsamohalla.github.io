<!DOCTYPE HTML>
<html class="no-js">

<?php include 'head.php'; ?>
<style>
    @media screen and (min-width:1280px){
    .page-banner{
            min-height:500px;
        }
        .block-title{
            margin-bottom: 160px;
        }
}
</style>
<body class="contact">


    <!--[if lt IE 7]>
	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
<![endif]-->
    <div class="body">
        <!-- Site Header Wrapper -->
        <div class="site-header-wrapper">
            <!-- Site Header -->
            <?php include 'navbar.php'; ?>
        </div>
        <!-- Hero Area -->
        <div class="hero-area">
            <div class="page-banner parallax overlay" style="background-image:url(images/assets/banner/contact.jpg);">
                <div class="container">
                    <div class="page-banner-text">
                        <h1 class="block-title">Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="main-container">
            <div class="content">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-12 col-custom text-align-center">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Our Location</h4>
                                    <p>26, 28, Nakoda St, Nakhuda Mohalla,Pydhonie, Bhuleshwar,Mumbai 400003</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-custom text-align-center">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Contact us Anytime</h4>
                                    <p>Tel: <a class="color-898989" href="tel:+02223413900"> +022 23413900</a> / <a class="color-898989" href="tel:+02223443980"> 23443980</a> <br>Mobile:<a class="color-898989" href="tel:+917045823633" target="_blank">+91-7045823633</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-custom text-align-center">
                            <div class="contact-info-item">
                                <div class="con-info-icon">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <div class="con-info-txt">
                                    <h4>Support Overall</h4>
                                    <p>Email: <a class="color-898989" href="mailto:info@kolsamohallamemonjamat.com" target="_blank">info@kolsamohallamemonjamat.com</a><br>Email : <a class="color-898989" href="mailto:info@puresaff.in" target="_blank">info@puresaff.in</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="spacer-75"></div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.4998123635223!2d72.8304307144752!3d18.95352148715829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce24eaaaaaa9%3A0xe0973004138c5a7f!2sKolsa%20Mohalla%20(Ranavav)%20Halai%20Memon%20Jamat!5e0!3m2!1sen!2sin!4v1666083615059!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <div class="spacer-75"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 content-block">
                            <form method="post" id="contactform" name="contactform" class="contact-form clearfix" action="mail/contact.php">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <input type="text" id="fname" name="First Name" class="form-control input-lg" placeholder="First name*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="lname" name="Last Name" class="form-control input-lg" placeholder="Last name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control input-lg" placeholder="Email*">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" class="form-control input-lg" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <textarea cols="6" rows="8" id="comments" name="comments" class="form-control input-lg" placeholder="Message"></textarea>
                                        </div>
                                        <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                                    </div>
                                </div>
                            </form>
                            <div class="clearfix"></div>
                            <div id="message"></div>
                        </div>

                        <!-- Sidebar -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Site Footer -->
        <?php include 'footer.php'; ?>
    </div>
    <script src="js/jquery-2.1.3.min.js"></script> <!-- Jquery Library Call -->
    <script src="vendor/magnific/jquery.magnific-popup.min.js"></script> <!-- PrettyPhoto Plugin -->
    <script src="js/ui-plugins.js"></script> <!-- UI Plugins -->
    <script src="js/helper-plugins.js"></script> <!-- Helper Plugins -->
    <script src="vendor/owl-carousel/js/owl.carousel.min.js"></script> <!-- Owl Carousel -->
    <script src="js/bootstrap.js"></script> <!-- UI -->
    <script src="js/init.js"></script> <!-- All Scripts -->
    <script src="vendor/flexslider/js/jquery.flexslider.js"></script> <!-- FlexSlider -->
    <script src="js/circle-progress.js"></script> <!-- Circle Progress Bars -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script> <!-- Google maps api -->
    <script type="text/javascript">
        var geocoder = new google.maps.Geocoder();
        var address = "2500 CityWest Blvd. - Suite 300 Houston, Texas - 77042 USA"; //Add your address here, all on one line.
        var latitude;
        var longitude;
        var color = "#42b8d4"; //Set your tint color. Needs to be a hex value.

        function getGeocode() {
            geocoder.geocode({
                'address': address
            }, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    latitude = results[0].geometry.location.lat();
                    longitude = results[0].geometry.location.lng();
                    initGoogleMap();
                }
            });
        }

        function initGoogleMap() {
            var styles = [{
                stylers: [{
                    saturation: -100
                }]
            }];

            var options = {
                mapTypeControlOptions: {
                    mapTypeIds: ['Styled']
                },
                center: new google.maps.LatLng(latitude, longitude),
                zoom: 13,
                scrollwheel: false,
                navigationControl: false,
                mapTypeControl: false,
                zoomControl: true,
                disableDefaultUI: true,
                mapTypeId: 'Styled'
            };
            var div = document.getElementById('contact-map');
            var map = new google.maps.Map(div, options);
            marker = new google.maps.Marker({
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP,
                position: new google.maps.LatLng(latitude, longitude)
            });
            var styledMapType = new google.maps.StyledMapType(styles, {
                name: 'Styled'
            });
            map.mapTypes.set('Styled', styledMapType);

            var infowindow = new google.maps.InfoWindow({
                content: "<div class='iwContent'>" + address + "</div>"
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });


            bounds = new google.maps.LatLngBounds(
                new google.maps.LatLng(-84.999999, -179.999999),
                new google.maps.LatLng(84.999999, 179.999999));

            rect = new google.maps.Rectangle({
                bounds: bounds,
                fillColor: color,
                fillOpacity: 0.2,
                strokeWeight: 0,
                map: map
            });
        }
        google.maps.event.addDomListener(window, 'load', getGeocode);
    </script>
</body>

</html>