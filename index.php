<?php
    require_once("functions/function.php");
    get_part('header.php');
?>
        <section id="banner-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 p0">
                        <div id="myCarousel" class="carousel slide slidering_first" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                          </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="images/banner.jpg" class="img-responsive" alt="banner.jpg">
                            </div>
                            <div class="item">
                              <img src="images/banner-5.jpg" class="img-responsive" alt="mens-banner.jpg">
                            </div>
                            <div class="item">
                              <img src="images/banner-6.jpeg" class="img-responsive" alt="kids-banner.jpg">
                            </div>
                            <div class="item">
                              <img src="images/banner-4.jpg" class="img-responsive" alt="kids-banner.jpg">
                            </div>
                        </div>
                        <!-- Left and right controls -->
                          <a class="left btn-arrow-left hidden-xs" href="#myCarousel" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fa fa-chevron-left"></i></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right btn-arrow-right hidden-xs" href="#myCarousel" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fa fa-chevron-right"></i></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- banner-part ends -->
        <section id="our-product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 h_brdr heading p0">
                        <div class="col-sm-11 p0">
                            <h2>ALL ROOM</h2>
                        </div>
                        <div class="col-sm-1 text-right p0">
                            <a class="view-all" href="#">View all<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-12 product mb_dvice p0">
            <?php
                $sel = 'SELECT * FROM s_photos NATURAL JOIN s_photos_pagecategory WHERE pcate_id="1" ORDER BY photo_id DESC';
                $qry = mysqli_query($con, $sel);
                while ($data = mysqli_fetch_array($qry)) {
            ?>                          
                        <div class="col-sm-3 heading all_product text-center pl0">
                            <a href="<?= $data['photo_url']; ?>"><figure>
                                <img src="admin/uploads/<?= $data['photo_image']; ?>" class="img-responsive" alt="sofaset">
                                <figcaption>
                                    <h3><?= $data['photo_title']; ?></h3>
                                    <h5><?= $data['photo_details']; ?><</h5>
                                    <h4><?= $data['photo_btn']; ?></h4>
                                </figcaption>
                            </figure></a>
                        </div>
            <?php };?>                        
                       
                    </div>
                    
                    <div class="col-sm-12 h_brdr heading p0">
                       <div class="col-sm-11 p0">
                          <!-- <h2>NOT AVAILABLE</h2>-->
                        </div>
                        <div class="col-sm-1 text-right p0">
                            <!--<a class="view-all" href="#">View all<i class="fa fa-chevron-right"></i></a>-->
                        </div>
                    </div>
                   <!--<div class="col-sm-12 product-2 mb_dvice p0">
            <?php
                $sel = 'SELECT * FROM s_photos NATURAL JOIN s_photos_pagecategory WHERE pcate_id="1" ORDER BY photo_id DESC LIMIT 0,6';
                $qry = mysqli_query($con, $sel);
                while ($data = mysqli_fetch_array($qry)) {
            ?>                       
                        <div class="col-sm-3 heading all_product text-center mb_dvice pl0">
                            <a href="product-details.html"><figure>
                                <img src="images/bed-2.jpg" class="img-responsive" alt="bed-2">
                                <figcaption>
                                    <h3>BED</h3>
                                    <h5>HCL-205-182-2-2-77</h5>
                                    <p>Price in BDT (Excluding Vat)</p>
                                    <h4>25,100.00</h4>
                                </figcaption>
                            </figure></a>
                        </div>
                <?php };?>          
                       
                       <div class="col-sm-12 all_product heading text-center mb_dvice pl0">
                            <a href="product-details.html"><figure>
                                <img src="images/chair-2.jpg" class="img-responsive" alt="chair-2">
                                <figcaption>
                                    <h3>Rocking Chair</h3>
                                    <h5>HCL-205-182-2-2-77</h5>
                                    <p>Price in BDT (Excluding Vat)</p>
                                    <h4>50,100.00</h4>
                                </figcaption>
                            </figure></a>
                        </div>
                        <div class="col-sm-12 all_product heading text-center mb_dvice pl0">
                            <a href="product-details.html"><figure>
                                <img src="images/cup-drop.jpg" class="img-responsive" alt="cup-drop">
                                <figcaption>
                                    <h3>Cup Board</h3>
                                    <h5>HCL-205-182-2-2-77</h5>
                                    <p>Price in BDT (Excluding Vat)</p>
                                    <h4>35,100.00</h4>
                                </figcaption>
                            </figure></a>
                        </div>
                        <div class="col-sm-12 all_product heading text-center mb_dvice pl0">
                            <a href="product-details.html"><figure>
                                <img src="images/conderance-table.jpg" class="img-responsive" alt="conderance-table">
                                <figcaption>
                                    <h3>Conference Table</h3>
                                    <h5>HCL-205-182-2-2-77</h5>
                                    <p>Price in BDT (Excluding Vat)</p>
                                    <h4>26,100.00</h4>
                                </figcaption>
                            </figure></a>
                        </div>
                        <div class="col-sm-12 all_product heading text-center mb_dvice pl0">
                            <a href="product-details.html"><figure>
                                <img src="images/work-station.jpg" class="img-responsive" alt="work-station">
                                <figcaption>
                                    <h3>work-station</h3>
                                    <h5>HCL-205-182-2-2-77</h5>
                                    <p>Price in BDT (Excluding Vat)</p>
                                    <h4>30,100.00</h4>
                                </figcaption>
                            </figure></a>
                        </div>
                        
                    </div>-->
                </div>
            </div>
        </section><!-- our-product ends -->
        
        <section id="suggest">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 s_bg text-center heading p0">
                        <img src="images/like.png" class="img-responsive" alt="like.png">
                        <h3>best service</h3>
                    </div>
                    <div class="col-sm-4 s_bg text-center heading p0">
                        <img src="images/check.png" class="img-responsive" alt="check.png">
                        <h3>reservation guarantee</h3>
                    </div>
                    <div class="col-sm-4 s_bg text-center heading p0">
                        <img src="images/head-phone.png" class="img-responsive" alt="head-phone.png">
                        <h3>online support</h3>
                    </div>
                </div>
            </div>
        </section><!-- suggest part ends -->
<?php
    get_part('footer.php');
?>        
