            
    <div class="top">
        <div id="content">
          <div class="head">
            <h2>FAST & FURIOUS</h2>
            <p class="text-right"><a href="fast">See all</a></p>
          </div>
          <div class="box">
          
           
                <?php foreach($responses['data'] as $products)
                {
                  ?>
                    <div class="movie">  
                  <div class="movie-image"> 
                  
                  <a href="pages" value="<?php echo $products -> product_ID?>">
                    <span class="play">
                      <span class="name"><?php echo $products->NAME;?> </span>
                    </span> 
                      <img src="upload/<?php echo  $products->Product_IMG; ?>" alt="" />
                      </a>
                     </div>
              <div class="rating">
                <p>RATING</p>
                <div class="stars">
                  <div class="stars-in"> </div>
                </div>
                <span class="comments">12</span> </div>
                <form action="pages" method="post">
                  <button name="Product_ID" class="movie_btn" value="<?php echo $products -> product_ID?>">click</button>
                </form>
              </div>
                
                  <?php
                }  ?>
            
            
            <div class="cl">&nbsp;</div>
          </div>

          <div class="head">
            <h2>HARRY POTTER</h2>
            <p class="text-right"><a href="harry_potter">See all</a></p>
          </div>
          <div class="box">
          
           
          <?php foreach($harry['data'] as $product)
          {
            ?>
              <div class="movie">  
            <div class="movie-image"> 
            
            <!-- <a href="pages"> -->
              <span class="play">
                <span class="name"><?php echo $product->NAME;?> </span>
              </span> 
                <img src="upload/<?php echo  $product->Product_IMG; ?>" alt="" />
                <!-- </a> -->
               </div>
        <div class="rating">
          <p>RATING</p>
          <div class="stars">
            <div class="stars-in"> </div>
          </div>
          <span class="comments">12</span> </div>
          <form action="pages" method="post">
            <button name="harry_ID" class="movie_btn" value="<?php echo $product ->harry_ID?>">click</button>
          </form>
        </div>
          
            <?php
          }  ?>
      
      
      <div class="cl">&nbsp;</div>
    </div>
      
