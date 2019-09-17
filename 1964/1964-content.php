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
  <div class="type_test">
            <div class="row">
                 <div class="col-md-6">
                     <div class="feature">There are 4 products.</div>
                 </div>
                 <div class="col-md-6">
                    <span class="selected"><span class="sort">Sort by:</span><span>
                       <select id="soflow">
                         <option>Relevance</option>
                         <option>Name, A to Z</option>
                         <option>Name, Z to A</option>
                         <option>Price, low to high</option>
                         <option>Price, high to low</option>
                         <option>Price, low to high</option>
                       </select></span></span>
                 </div>
      </div>
  </div>
   <div class="type_potion">
         <div class="row">  
         <div class="col-md-3 col-sm-3">
            <div class="a text-center">
            <img src="images/designer-sunglasses (1).jpg">
            <div class="new-1">
               <span class="new">NEW</span>
            </div>
            <div class="sale-1">
               <span class="sale">SALE</span>
            </div>
         
         <div class="giatien">$69,00</div>
         <div class="thongtinsanpham">Ruby Necklace</div>
          <button class="btn-primary" data-button-action="add-to-cart" type="submit">
              <i class="fa fa-shopping-cart"></i>
         </button>
         </div>
         </div>
         <div class="col-md-3 col-sm-3">
            <div class="a text-center">
            <img src="images/premium-accessories.jpg">
       <div class="new-1">
               <span class="new">NEW</span>
            </div>
            <div class="sale-1">
               <span class="sale">SALE</span>
            </div>
            <div class="giatien">$59,00</div>
         <div class="thongtinsanpham">Necklace Ring</div>
         <button class="btn-primary" data-button-action="add-to-cart" type="submit">
              <i class="fa fa-shopping-cart"></i>
         </button>
         </div>
         
         </div>
         <div class="col-md-3 col-sm-3">
            <div class="a text-center">
            <img src="images/plain-casual-shirt.jpg">
            <div class="new-1">
               <span class="new">NEW</span>
            </div>
            <div class="sale-1">
               <span class="sale">SALE</span>
            </div>
              <div class="giatien">$19,00</div>
         <div class="thongtinsanpham">Golden Wedding Ring</div>
         <button class="btn-primary" data-button-action="add-to-cart" type="submit">
              <i class="fa fa-shopping-cart"></i>
         </button>
         </div>
       
         </div>

         <div class="col-md-3 col-sm-3">
            <div class="a text-center">
            <img src="images/jewellery-for-women.jpg">
           <div class="new-1">
               <span class="new">NEW</span>
            </div>
            <div class="sale-1">
               <span class="sale">SALE</span>
            </div>
             <div class="giatien">$380,00</div>
         <div class="thongtinsanpham">Platinium Diamond Rings</div>
         <button class="btn-primary" data-button-action="add-to-cart" type="submit">
              <i class="fa fa-shopping-cart"></i>
         </button>
      
          </div>
         </div>

      </div>
   </div>
   </div>
</div>