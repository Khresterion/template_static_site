<?php require_once 'view/view_header.php' ?>
<?php require_once 'view/view_footer.php' ?>


<?php callHead("LogOn Company", "style/index.css") ?>
<?php callNav() ?>


<section id="section1">
    <div class="content">

        <div class="container">
            <div class="row align-items-stretch no-gutters contact-wrap">
                <div class="col-md-8">
                    <div class="form h-100">
                        <h3>Send us a message</h3>
                        <form class="mb-5" method="post" id="contactForm" name="contactForm">
                            <div class="row">
                                <div class="col-md-6 form-group mb-5">
                                    <label for="" class="col-form-label">Name *</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                </div>
                                <div class="col-md-6 form-group mb-5">
                                    <label for="" class="col-form-label">Email *</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 form-group mb-5">
                                    <label for="" class="col-form-label">Phone</label>
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                                </div>
                                <div class="col-md-6 form-group mb-5">
                                    <label for="" class="col-form-label">Company</label>
                                    <input type="text" class="form-control" name="company" id="company" placeholder="Company  name">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group mb-5">
                                    <label for="message" class="col-form-label">Message *</label>
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                                    <span class="submitting"></span>
                                </div>
                            </div>
                        </form>

                        <div id="form-message-warning mt-4"></div>
                        <div id="form-message-success">
                            Your message was sent, thank you!
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-info h-100">
                        <h3>Contact Information</h3>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, magnam!</p>
                        <ul class="list-unstyled">
                            <li class="d-flex">
                                <span class="wrap-icon icon-room mr-3"></span>
                                <span class="text">9757 Aspen Lane South Richmond Hill, NY 11419</span>
                            </li>
                            <li class="d-flex">
                                <span class="wrap-icon icon-phone mr-3"></span>
                                <span class="text">+1 (291) 939 9321</span>
                            </li>
                            <li class="d-flex">
                                <span class="wrap-icon icon-envelope mr-3"></span>
                                <span class="text">info@mywebsite.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- this section is slanted using the 'skew' attribute -->
<section id="section2">



</section>

<section id="section3">

</section>

<!-- Chevron pattern SVG -->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 377.74 55.15">
    <defs>
        <style>
            .cls-1 {
                fill: #d1d5db;
            }

            .cls-2 {
                fill: #374151;
            }

            .cls-3 {
                fill: #111827;
            }
        </style>
    </defs>
    <g id="Layer_2" data-name="Layer 2">
        <g id="Layer_1-2" data-name="Layer 1">
            <polygon class="cls-1" points="360.74 16.47 368.74 0.47 376.74 16.47 368.74 33.47 360.74 16.47" />
            <g>
                <polygon class="cls-1" points="0 16 8 0 16 16 8 33 0 16" />
                <polygon class="cls-1" points="16.48 16.15 24.48 0.15 32.48 16.15 24.48 33.15 16.48 16.15" />
                <polygon class="cls-1" points="32.48 16.15 40.48 0.15 48.48 16.15 40.48 33.15 32.48 16.15" />
                <polygon class="cls-1" points="49.48 16.15 57.48 0.15 65.48 16.15 57.48 33.15 49.48 16.15" />
                <polygon class="cls-1" points="66 16 74 0 82 16 74 33 66 16" />
                <polygon class="cls-1" points="82.48 16.15 90.48 0.15 98.48 16.15 90.48 33.15 82.48 16.15" />
                <polygon class="cls-1" points="98.48 16.15 106.48 0.15 114.48 16.15 106.48 33.15 98.48 16.15" />
                <polygon class="cls-1" points="115 16 123 0 131 16 123 33 115 16" />
                <polygon class="cls-1" points="131.48 16.15 139.48 0.15 147.48 16.15 139.48 33.15 131.48 16.15" />
                <polygon class="cls-1" points="147.48 16.15 155.48 0.15 163.48 16.15 155.48 33.15 147.48 16.15" />
                <polygon class="cls-1" points="164.48 16.15 172.48 0.15 180.48 16.15 172.48 33.15 164.48 16.15" />
                <polygon class="cls-1" points="180.48 16.15 188.48 0.15 196.48 16.15 188.48 33.15 180.48 16.15" />
                <polygon class="cls-1" points="197 16 205 0 213 16 205 33 197 16" />
                <polygon class="cls-1" points="213.48 16.15 221.48 0.15 229.48 16.15 221.48 33.15 213.48 16.15" />
                <polygon class="cls-1" points="230 16 238 0 246 16 238 33 230 16" />
                <polygon class="cls-1" points="246.48 16.15 254.48 0.15 262.48 16.15 254.48 33.15 246.48 16.15" />
                <polygon class="cls-1" points="263 16 271 0 279 16 271 33 263 16" />
                <polygon class="cls-1" points="279.48 16.15 287.48 0.15 295.48 16.15 287.48 33.15 279.48 16.15" />
                <polygon class="cls-1" points="296 16 304 0 312 16 304 33 296 16" />
                <polygon class="cls-1" points="312.48 16.15 320.48 0.15 328.48 16.15 320.48 33.15 312.48 16.15" />
                <polygon class="cls-1" points="329 16 337 0 345 16 337 33 329 16" />
                <polygon class="cls-1" points="345.48 16.15 353.48 0.15 361.48 16.15 353.48 33.15 345.48 16.15" />
            </g>
            <g>
                <polygon class="cls-2" points="8.32 28.29 16.32 12.29 24.32 28.29 16.32 45.29 8.32 28.29" />
                <polygon class="cls-2" points="24.79 28.44 32.79 12.44 40.79 28.44 32.79 45.44 24.79 28.44" />
                <polygon class="cls-2" points="40.79 28.44 48.79 12.44 56.79 28.44 48.79 45.44 40.79 28.44" />
                <polygon class="cls-2" points="57.79 28.44 65.79 12.44 73.79 28.44 65.79 45.44 57.79 28.44" />
                <polygon class="cls-2" points="74.32 28.29 82.32 12.29 90.32 28.29 82.32 45.29 74.32 28.29" />
                <polygon class="cls-2" points="90.79 28.44 98.79 12.44 106.79 28.44 98.79 45.44 90.79 28.44" />
                <polygon class="cls-2" points="106.79 28.44 114.79 12.44 122.79 28.44 114.79 45.44 106.79 28.44" />
                <polygon class="cls-2" points="123.32 28.29 131.32 12.29 139.32 28.29 131.32 45.29 123.32 28.29" />
                <polygon class="cls-2" points="139.79 28.44 147.79 12.44 155.79 28.44 147.79 45.44 139.79 28.44" />
                <polygon class="cls-2" points="155.79 28.44 163.79 12.44 171.79 28.44 163.79 45.44 155.79 28.44" />
                <polygon class="cls-2" points="172.79 28.44 180.79 12.44 188.79 28.44 180.79 45.44 172.79 28.44" />
                <polygon class="cls-2" points="188.79 28.44 196.79 12.44 204.79 28.44 196.79 45.44 188.79 28.44" />
                <polygon class="cls-2" points="205.32 28.29 213.32 12.29 221.32 28.29 213.32 45.29 205.32 28.29" />
                <polygon class="cls-2" points="221.79 28.44 229.79 12.44 237.79 28.44 229.79 45.44 221.79 28.44" />
                <polygon class="cls-2" points="238.32 28.29 246.32 12.29 254.32 28.29 246.32 45.29 238.32 28.29" />
                <polygon class="cls-2" points="254.79 28.44 262.79 12.44 270.79 28.44 262.79 45.44 254.79 28.44" />
                <polygon class="cls-2" points="271.32 28.29 279.32 12.29 287.32 28.29 279.32 45.29 271.32 28.29" />
                <polygon class="cls-2" points="287.79 28.44 295.79 12.44 303.79 28.44 295.79 45.44 287.79 28.44" />
                <polygon class="cls-2" points="304.32 28.29 312.32 12.29 320.32 28.29 312.32 45.29 304.32 28.29" />
                <polygon class="cls-2" points="320.79 28.44 328.79 12.44 336.79 28.44 328.79 45.44 320.79 28.44" />
                <polygon class="cls-2" points="337.32 28.29 345.32 12.29 353.32 28.29 345.32 45.29 337.32 28.29" />
                <polygon class="cls-2" points="353.79 28.44 361.79 12.44 369.79 28.44 361.79 45.44 353.79 28.44" />
            </g>
            <g>
                <polygon class="cls-3" points="0 38 8 22 16 38 8 55 0 38" />
                <polygon class="cls-3" points="16.48 38.15 24.48 22.15 32.48 38.15 24.48 55.15 16.48 38.15" />
                <polygon class="cls-3" points="32.48 38.15 40.48 22.15 48.48 38.15 40.48 55.15 32.48 38.15" />
                <polygon class="cls-3" points="49.48 38.15 57.48 22.15 65.48 38.15 57.48 55.15 49.48 38.15" />
                <polygon class="cls-3" points="66 38 74 22 82 38 74 55 66 38" />
                <polygon class="cls-3" points="82.48 38.15 90.48 22.15 98.48 38.15 90.48 55.15 82.48 38.15" />
                <polygon class="cls-3" points="98.48 38.15 106.48 22.15 114.48 38.15 106.48 55.15 98.48 38.15" />
                <polygon class="cls-3" points="115 38 123 22 131 38 123 55 115 38" />
                <polygon class="cls-3" points="131.48 38.15 139.48 22.15 147.48 38.15 139.48 55.15 131.48 38.15" />
                <polygon class="cls-3" points="147.48 38.15 155.48 22.15 163.48 38.15 155.48 55.15 147.48 38.15" />
                <polygon class="cls-3" points="164.48 38.15 172.48 22.15 180.48 38.15 172.48 55.15 164.48 38.15" />
                <polygon class="cls-3" points="180.48 38.15 188.48 22.15 196.48 38.15 188.48 55.15 180.48 38.15" />
                <polygon class="cls-3" points="197 38 205 22 213 38 205 55 197 38" />
                <polygon class="cls-3" points="213.48 38.15 221.48 22.15 229.48 38.15 221.48 55.15 213.48 38.15" />
                <polygon class="cls-3" points="230 38 238 22 246 38 238 55 230 38" />
                <polygon class="cls-3" points="246.48 38.15 254.48 22.15 262.48 38.15 254.48 55.15 246.48 38.15" />
                <polygon class="cls-3" points="263 38 271 22 279 38 271 55 263 38" />
                <polygon class="cls-3" points="279.48 38.15 287.48 22.15 295.48 38.15 287.48 55.15 279.48 38.15" />
                <polygon class="cls-3" points="296 38 304 22 312 38 304 55 296 38" />
                <polygon class="cls-3" points="312.48 38.15 320.48 22.15 328.48 38.15 320.48 55.15 312.48 38.15" />
                <polygon class="cls-3" points="329 38 337 22 345 38 337 55 329 38" />
                <polygon class="cls-3" points="345.48 38.15 353.48 22.15 361.48 38.15 353.48 55.15 345.48 38.15" />
            </g>
            <polygon class="cls-3" points="361.74 37.47 369.74 21.47 377.74 37.47 369.74 54.47 361.74 37.47" />
        </g>
    </g>
</svg>

<section id="section4">


</section>

<?php callFooter() ?>