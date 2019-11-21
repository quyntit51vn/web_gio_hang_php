<!-- Slider -->
<?php
    $category_parents = category::getListParent();
?>
<div class="container">
    <div class="row home_Slider">
        <div class="row">

            <div class="col-sm-3 col-md-3 col-lg-3 top_category">
                <div class="block block-category">
                    <div class="block-head">
                        <ul class="nav-tab">
                            <li><a> <span class="fa fa-bars"></span> MARKETS</a></li>
                        </ul>
                    </div>
                    <div class="block-inner">
                        <div class="tab-container">
                            <div id="tab-categories" class="tab-panel active">
                                <ul class="home_categories">
                                    <!-- @foreach( array_slice($category_field,0,7) as $category ) -->
                                    <?php foreach($category_parents as $parent){ ?>
                                    <li style="position: relative;">
                                        <a class="dropdown-toggle" href="<?='http://localhost/tiki/views/pages/product_of_category.php?category='.$parent->id?>" title="">
                                            <img src="<?=$parent->image?>" alt="<?=$parent->name ?>">
                                            <span><?=$parent->name ?></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php 
                                                $category_childs = category::getListChild($parent->id);
                                                foreach($category_childs as $child){
                                            ?>
                                            <li>
                                                <a href="<?='http://localhost/tiki/views/pages/product_of_category.php?category='.$child->id?>" style="vertical-align: middle; font-weight: bold;" title="">
                                                    <img src="<?=$child->image?>" alt="">
                                                    <span class="text"><?=$child->name?></span>
                                                </a>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php

                include_once('../../model/banner.php');
                $banners = banner::getList();
            ?>
            <div class="col-sm-9 col-md-9 col-lg-9">
                <!-- Home slide -->
                <div class="block block-slider ">
                    <ul class="home-slider kt-bxslider">
                        <?php foreach($banners as $banner){ ?>
                        <li>
                            <a href="<?=$banner->url_banner ?>">
                                <img src="<?=$banner->banner ?>" alt="">
                            </a>
                        </li>
                        <?php }?>
                    </ul>
                </div>
                <!-- ./Home slide -->
            </div>
        </div>
    </div>
</div>

<!-- ./Slider -->