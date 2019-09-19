<?php
$url_host = $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2014">  
    <footer id="footer">
        <div class="footer-container">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-3 links about_ft">
                            <div class="h3">
                                <span style="display: none;"></span>
                                <img src="images/logo_ft.png" alt="">
                            </div>
                            <div id="footer_sub_menu_col_1" class="collapse">
                                <div class="footer_sub_menu_col_p">
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Morbi dui placerat ornare.</p>
                                </div>
                                <div class="social_footer">
                                    <a href="#" class="fa  fa-facebook"></a>
                                    <a href="#" class="fa  fa-google-plus"></a>
                                    <a href="#" class="fa  fa-twitter"></a>
                                    <a href="#" class="fa  fa-youtube"></a>
                                    <a href="#" class="fa  fa-rss"></a>
                                    <a href="#" class="fa  fa-linkedin"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 links bullet">
                            <h3>Information</h3>
                            <div id="footer_sub_menu_col_2" class="collapse">
                                <div class="footer_sub_menu_col_50">
                                    <ul>
                                        <li><a href="#" title="">About us</a></li>
                                        <li><a href="#" title="">Our Team</a></li>
                                        <li><a href="#" title="">We are hiring</a></li>
                                        <li><a href="#" title="">Enter your location</a></li>
                                        <li><a href="#" title="">Choose restaurant</a></li>
                                        <li><a href="#" title="">Choose meal</a></li>
                                        <li><a href="#" title="">Pay via credit card</a></li>
                                        <li><a href="#" title="">Pay via credit card</a></li>
                                        <li><a href="#" title="">Wait for delivery</a></li>
                                    </ul>
                                </div>
                                <div class="footer_sub_menu_col_50">
                                    <ul>
                                        <li><a href="#" title="">Search results page</a></li>
                                        <li><a href="#" title="">User Sing Up Page</a></li>
                                        <li><a href="#" title="">Pricing page</a></li>
                                        <li><a href="#" title="">Make order</a></li>
                                        <li><a href="#" title="">Add to cart</a></li>
                                        <li><a href="#" title="">Contact us</a></li>
                                        <li><a href="#" title="">Our Service</a></li>
                                        <li><a href="#" title="">Return</a></li>
                                        <li><a href="#" title="">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 links bullet">
                            <h3>Recent work</h3>
                            <div id="footer_sub_menu_col_3" class="collapse">
                                <div class="block_fotter"><img class="img-responsive" src="images/block_footer.jpg" alt=""></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 links contact_ft">
                            <h3>Contact us</h3>
                            <div id="footer_sub_menu_col_5" class="collapse">
                                <div class="row1 blockft"><i class="fa fa-map-marker"></i>
                                    <div class="blockft"><span>121 King Street, Melbourne Victoria</span> <span class="colorf">3000 Australia ABN 11 119 159 741</span></div>
                                </div>
                                <div class="row1 blockft"><i class="fa fa-phone"></i>
                                    <div class="blockft"><span>0123 456 789 - (+61) 3 8376 6284</span></div>
                                </div>
                                <div class="row1 blockft"><i class="fa fa-envelope"></i>
                                    <div class="blockft"><a href="mailto:Sales@yoursite.com" target="_blank">Sales@yoursite.com</a> <a href="mailto:fieldthemes@gmail.com" target="_blank">fieldthemes@gmail.com</a></div>
                                </div>
                                <img class="img-responsive" src="images/payment_footer.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="footer-address fieldFullWidth" style="left: 50%; position: relative; width: 1519px; margin-left: -759.5px;">
                            <div class="container">
                                <p>Copyright © 2018, Organic, All Rights Reserved.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
