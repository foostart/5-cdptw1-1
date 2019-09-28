<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-983">
    <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
           <a href="#">
               <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide1_image.jpg" alt="Chania">
           </a>
       </div>
       <div class="swiper-slide"> 
        <a href="#">
            <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide2_image.jpg" alt="Chania">
        </a></div>
        <div class="swiper-slide">
            <a href="#">
                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide3_image.jpg" alt="Flower">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide4_image.jpg" alt="Flower">
            </a>
        </div>
        <div class="swiper-slide">
            <a href="#">
                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/slide5_image.jpg" alt="Flower">
            </a>
        </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
        <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
        <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
</div>
</div>

