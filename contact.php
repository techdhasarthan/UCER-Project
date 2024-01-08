<?php require_once "./libs/load.php" ?>


<?php load_template("navbar"); ?>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                </div>
                <div class="text">
                    <p><span>Address</span></p>
                    <p>University College of Engineering, Ramanathapuram District, Tamilnadu - 623 513</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                </div>
                <div class="text">
                    <p><span>Phone</span></p>
                    <p><a href="tel:04567-260262">04567-260262</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                </div>
                <div class="text">
                    <p><span>Email</span></p>
                    <p><a href="mailto:ucermd@gmail.com">ucermd@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                </div>
                <div class="text">
                    <p><span>Website</span></p>
                    <p><a href="https://www.aucermd.edu.in/">https://www.aucermd.edu.in/</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="locationmap">
            <div class="mapouter mb-20">
                <div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0"
                        marginwidth="0"
                        src="https://maps.google.com/maps?width=1150&amp;height=500&amp;hl=en&amp;q=University College of Engineering Ramanathapuram&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a
                        href="https://mcpenation.com/">UCER</a></div>
                <style>
                .mapouter {
                    position: relative;
                    text-align: right;
                    width: 1150px;
                    height: 500px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    width: 1200px;
                    height: 500px;
                }

                .gmap_iframe {
                    width: 100% !important;
                    height: 500px !important;
                }
                </style>
            </div>
        </div>
    </div>
</div>


<?php load_template("footer"); ?>