
<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1964">
  <div class="container">
    <div class="dl">
      <div class="row">
        <div class="col-md-6 aa" > 
          <div class="feature">There are 4 products.</div>
        </div>
        <div class="col-md-6 ff">
          <span class="selected"> <span class="sort">Sort by:</span>
          <select id="soflow">
            <option>Relevance</option>
            <option>Name, A to Z</option>
            <option>Name, Z to A</option>
            <option>Price, low to high</option>
            <option>Price, high to low</option>
            <option>Price, low to high</option>
          </select>
        </span>
      </div>
    </div>
  </div>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide ">
        <div class="row">
         <div class="a text-center">
          <img src="images/designer-sunglasses.jpg" alt="" >
          <div class="new-1">
            <span class="new">NEW</span>
          </div>
          <div class="sale-1">
            <a href="#"><span class="sale">SALE</span></a>
          </div>        
        </div>
        <div class="giatien"><p>$69,00</p></div>
        <div class="thongtinsanpham">Ruby Necklace</div>
        <button class="btn-primary" data-button-action="add-to-cart" type="submit">
          <i class="fa fa-shopping-cart"></i>
        </button>  
      </div>
      

    </div>
    <div class="swiper-slide ">
     
      <div class="row">
       <div class="a text-center">
        <img src="images/premium-accessories.jpg" alt="" >
        <div class="new-1">
          <span class="new">NEW</span>
        </div>
        <div class="sale-1">
          <a href="#"><span class="sale">SALE</span></a>
        </div>        
      </div>
      <div class="giatien"><p>$59,00</p></div>
      <div class="thongtinsanpham">Necklace Ring</div>
      <button class="btn-primary" data-button-action="add-to-cart" type="submit">
        <i class="fa fa-shopping-cart"></i>
      </button>  
    </div>
    
  </div>
  <div class="swiper-slide ">
    
    <div class="row">
     <div class="a text-center">
      <img src="images/plain-casual-shirt.jpg" alt="" >
      <div class="new-1">
        <span class="new">NEW</span>
      </div>
      <div class="sale-1">
        <a href="#"><span class="sale">SALE</span></a>
      </div>        
    </div>
    <div class="giatien"><p>$19,00</p></div>
    <div class="thongtinsanpham">Golden Wedding Ring</div>
    <button class="btn-primary" data-button-action="add-to-cart" type="submit">
      <i class="fa fa-shopping-cart"></i>
    </button>  
  </div>
  
</div>
<div class="swiper-slide ">
  
  <div class="row">
   <div class="a text-center">
    <img src="images/jewellery-for-women.jpg" alt="" >
    <div class="new-1">
      <span class="new">NEW</span>
    </div>
    <div class="sale-1">
      <a href="#"><span class="sale">SALE</span></a>
    </div>        
  </div>
  <div class="giatien"><p>$380,00</p></div>
  <div class="thongtinsanpham">Platinium Diamond Rings</div>
  <button class="btn-primary" data-button-action="add-to-cart" type="submit">
    <i class="fa fa-shopping-cart"></i>
  </button>  
</div>       
</div>
</div>
<!-- Add Pagination -->
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<br>
<br>
<br>
<br>
<div class="swiper-pagination"></div>
</div>
</div>
</div>

