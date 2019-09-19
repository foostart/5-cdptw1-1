<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1982">
    <div class="module-4_1">
        <div class="container">
            <!--TITLE-->
                <div class="menu-center">
                    <div class="sep-before"> 
                        <div class="sep-line"></div>
                    </div>
                    <div class="content">
                        <h2 class="text-divider-double">
                           Services
                        </h2>
                        <div class="text-divider-subtitle">Get 20% discount on orders over $300</div>
                    </div>
                    <div class="sep-after">
                        <div class="sep-line"></div>
                    </div>
                </div>
                <!--END TITLE-->
            <!--SERVICES-->
            <div class="type-1982_2">
                <div class="row">
                    <div class="m4-services">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                            <div class="m4-limit">
                                <div class="m4-limit-thumbnail">
                                    <a href="/" title="Coffee &amp; Tea" class="has-border">
                                    <img src="<?php echo $url_path ?>/images/anh1.jpg " alt="reponsive-img" class="size-full">  </a>
                                    </div>
                                    <h4 class="m4-limit-services-title">
                                        <a href="/" title="Child Friendly">Dishcloth</a>
                                    </h4>
                                    <div>
                                        <p>Handmade Shop WordPress WooCommerce Theme is a stylish responsive and easy to use WordPress theme. Handy Shop WooCommerce theme is a great start for any one who is looking to start his one handmade online shop or looking to create a handmade goods marketplace like Etsy or Amazon.</p>
                                    </div>
                                </div>
                            </div>
                        </div>   
                        <div class="m4-services">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                <div class="m4-limit">
                                    <div class="m4-limit-thumbnail">
                                        <a href="/" title="Coffee &amp; Tea" class="has-border">
                                        <img src="<?php echo $url_path ?>/images/anh2.jpg" alt="reponsive-img" class="size-full"> </a>
                                        </div>
                                        <h4 class="m4-limit-services-title">
                                            <a href="/" title="Child Friendly">Campfire</a>
                                        </h4>
                                        <div>
                                        <p>Handmade Shop WordPress WooCommerce Theme is a stylish responsive and easy to use WordPress theme. Handy Shop WooCommerce theme is a great start for any one who is looking to start his one handmade online shop or looking to create a handmade goods marketplace like Etsy or Amazon.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                            <div class="m4-services">
                                <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                    <div class="m4-limit">
                                        <div class="m4-limit-thumbnail">
                                            <a href="/" title="Coffee &amp; Tea" class="has-border">
                                            <img src="<?php echo $url_path ?>/images/anh3.jpg" alt="reponsive-img"  class="size-full"> </a>
                                            </div>
                                            <h4 class="m4-limit-services-title">
                                                <a href="/" title="Child Friendly">Yellow Pillow</a>
                                            </h4>
                                            <div>
                                        <p>Handmade Shop WordPress WooCommerce Theme is a stylish responsive and easy to use WordPress theme. Handy Shop WooCommerce theme is a great start for any one who is looking to start his one handmade online shop or looking to create a handmade goods marketplace like Etsy or Amazon.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                                <div class="m4-services">
                                    <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12 content1">
                                        <div class="m4-limit">
                                            <div class="m4-limit-thumbnail">
                                                <a href="/" title="Coffee &amp; Tea" class="has-border">
                                                <img src="<?php echo $url_path ?>/images/anh4.jpg" alt="reponsive-img" class="size-full">
                                                </a>
                                            </div>
                                            <h4 class="m4-limit-services-title">
                                                <a href="/" title="Child Friendly">Stylish Chair</a>
                                            </h4>
                                            <div>
                                        <p>Handmade Shop WordPress WooCommerce Theme is a stylish responsive and easy to use WordPress theme. Handy Shop WooCommerce theme is a great start for any one who is looking to start his one handmade online shop or looking to create a handmade goods marketplace like Etsy or Amazon.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <!--END SERVICES-->
                    </div>
                </div>
            </div>

