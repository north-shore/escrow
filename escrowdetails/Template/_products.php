<!--   product  -->
<?php
    $item_id = $_GET['item_id'] ?? 1;
    foreach ($product->getData() as $item) :
        if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="<?php echo $item['item_image'] ?? "./assets/products/1.png" ?>" alt="product"class="border-irregular1 img-fluid hover-opacity">
                        </div>

                        <div class="item">
                            <img src="<?php echo $item['item_image1'] ?? "./assets/products/1.png" ?>" alt="product"class="border-irregular1 img-fluid hover-opacity">
                        </div>

                        <div class="item">
                            <img src="<?php echo $item['item_image2'] ?? "./assets/products/1.png" ?>" alt="product"class="border-irregular1 img-fluid hover-opacity">
                        </div>
                        <div class="item">
                            <img src="<?php echo $item['item_image3'] ?? "./assets/products/1.png" ?>" alt="product"class="border-irregular1 img-fluid hover-opacity">
                        </div>

                        <div class="item">
                            <img src="<?php echo $item['item_image4'] ?? "./assets/products/1.png" ?>" alt="product"class="border-irregular1 img-fluid hover-opacity">
                        </div>

                        <div class="item">
                            <img src="<?php echo $item['item_image5'] ?? "./assets/products/1.png" ?>" alt="product"class="border-irregular1 img-fluid hover-opacity">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">Proceed to Buy</button>
                    </div>
                    <div class="col">
                        <?php
                        if (in_array($item['item_id'], $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?? "Unknown"; ?></h5>
                <small> GENDER : <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <a href="#" class="px-2 font-rale font-size-14">10,534 ratings | 500+ answered questions</a>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">

                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price=</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price'] ?? 0; ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>

                </table>
                <!---    !product price       -->

                <!--    #policy -->
                <div id="policy">
                    <div class="d-flex">
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-retweet border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-truck  border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"> COMPLEETE  <br>CARE </a>
                        </div>
                        <div class="return text-center mr-5">
                            <div class="font-size-20 my-2 color-second">
                                <span class="fas fa-check-double border p-3 rounded-pill"></span>
                            </div>
                            <a href="#" class="font-rale font-size-12"> .<br>VACINATED</a>
                        </div>
                    </div>
                </div>
                <!--    !policy -->
                <hr>


                <div class="row">
                    <div class="col-6">

                    </div>

                </div>



            </div>


            <div class="col-12">
                <h6 class="font-rubik">ABOUT BET</h6>
                <div id="pet" style=" line-height: 2.2em; margin-left: -2em;">
                    <ul>
                        <li>
                            <img src="./assets/paw2.png"><span>  Friendly to other pets     </span> <img src="./assets/paw2.png"><span>   Inteligent       </span> <img src="./assets/paw2.png"><span>  Great with kids    </span>
                        </li>
                        <li>
                            <img src="./assets/paw2.png"><span>  Reliable    </span>

                        </li>
                        <li>
                            <img src="./assets/paw2.png"><span>   Devoted      </span>

                        </li>


                    </ul>


                </div>
                <hr>

                <p class="font-rale font-size-14"><?php echo $item['about_pet'] ?? 'text' ; ?></p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
        endif;
        endforeach;
?>