<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

 <div class="type-1971">
    <div class="swiper-container">
        <div class="swiper-wrapper">
         <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="images/slider-2.jpg" alt="Flower">
                    <div class="caption slide2">
                        <div class="title">
                           <p>THE ULTIMATE GOAL</p>
                            <h2><strong>We are manufacturing products with world class quality.</strong></h2>
                            <span class="btn btn-primary b1"><strong>Read more</strong></span>
                        </div> 
                    </div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img class="img-responsive" src="images/slider-3.jpg" alt="Flower">
                    <div class="caption slide3">
                        <div class="title">
                           <p>THE ULTIMATE GOAL</p>
                            <h2><strong>Supplying the world with high quality chemical products.</strong></h2>
                            <span class="btn btn-primary b1"><strong>Read more</strong></span>
                        </div> 
                    </div>
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <div class="contact">
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
        </div>
    </div>
</div>
