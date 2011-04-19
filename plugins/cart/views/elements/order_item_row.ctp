<div class="yui3-g<?php echo $class;?>">    
    <div class="yui3-u-5-6">
        <div class="prod_main">
            <h5><?php echo $product['name'];?></h5>
            <div class="prod_desc">
                <?php echo substr(strip_tags($product['description']), 0, 150).'...';?>
            </div>
        </div>
    </div>
    <div class="yui3-u-1-6 price">
        R <?php echo $product['price'];?>
    </div>
</div>