<?php
require "connect.php";
require "model/db.php";
require "model/categories.php";
require "model/items.php";
require "model/users.php";

$item = new item();
$cate = new categories();
$user = new User();


?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>24 News — Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
    <link href="css/media_query.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap CSS -->
    <link href="css/style_1.css" rel="stylesheet" type="text/css" />
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <?php include 'header.php' ?>
    </div>
    <div class="container-fluid paddding mb-5">
        <div class="row mx-0">
            <?php
            $getAllItem = $item->getNewItem(0, 1);
            foreach ($getAllItem as $key => $value):
                $formatDate = date('M, d, Y', strtotime($value['created_at']));
                ?>
                <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                    <div class="fh5co_suceefh5co_height"><img src="<?php echo $value['image'] ?>" alt="img" />
                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                        <div class="fh5co_suceefh5co_height_position_absolute_font">
                            <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                                    <?php echo $formatDate ?> </a></div>
                            <div class=""><a href="single.php" class="fh5co_good_font"> <?php echo $value['title'] ?> </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <?php
                    $getAllItem = $item->getNewItem(1, 4);
                    foreach ($getAllItem as $key => $value):
                        $formatDate = date('M, d, Y', strtotime($value['created_at']));
                        ?>
                        <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                            <div class="fh5co_suceefh5co_height_2"><img src="<?php echo $value['image'] ?>" alt="img" />
                                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;
                                            <?php echo $formatDate ?> </a></div>
                                    <div class=""><a href="single.php"
                                            class="fh5co_good_font_2"><?php echo $value['title'] ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid pt-3">
        <div class="container animate-box" data-animate-effect="fadeIn">
            <div>
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Trending</div>
            </div>
            <div class="owl-carousel owl-theme js" id="slider1">
                <?php
                $getAuthorByItems = $item->getAuthorByItems(5, 7);
                foreach ($getAuthorByItems as $key => $value):
                    $formatDate = date('M, d, Y', strtotime($value['created_at']));
                    ?>
                    <div class="item px-2">
                        <div class="fh5co_latest_trading_img_position_relative">
                            <div class="fh5co_latest_trading_img"><img src="<?php echo $value['image'] ?>" alt=""
                                    class="fh5co_img_special_relative" />
                                <div class="fh5co_latest_trading_img_position_absolute"></div>
                                <div class="fh5co_latest_trading_img_position_absolute_1">
                                    <a href="single.php" class="text-white"><?php echo $value['title'] ?></a>
                                    <div class="fh5co_latest_trading_date_and_name_color">
                                        <?php echo $value['nameUser'] . ' - ' . $formatDate ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="container-fluid pb-4 pt-5">
            <div class="container animate-box">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News</div>
                </div>
                <div class="owl-carousel owl-theme" id="slider2">
                    <?php
                    $randStart = random_int(0, 25);
                    $randEnd = random_int(0, 20);
                    $TinNoiBatNews = $item->getNewItem($randStart, $randEnd);
                    foreach ($TinNoiBatNews as $key => $value):
                        $formatDate = date('M, d, Y', strtotime($value['created_at'])); ?>
                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_news_img"><img src="<?php echo $value['image'] ?>" alt="" /></div>
                                <div>
                                    <a href="single.php" class="d-block fh5co_small_post_heading"><span
                                            class=""><?php echo $value['title'] ?></span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"><?php echo $formatDate ?></i></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <div class="container-fluid fh5co_video_news_bg pb-4">
            <div class="container animate-box" data-animate-effect="fadeIn">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">Video News</div>
                </div>
                <!-- <div> video
                    <div class="owl-carousel owl-theme" id="slider3">
                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_hover_news_img_video_tag_position_relative">
                                    <div class="fh5co_news_img">
                                        <iframe id="video" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide">
                                        <img src="images/ariel-lustre-208615.jpg" alt="" />
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide"
                                        id="play-video">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                                <span><i class="fa fa-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                        <span class="">The top 10 funniest videos on YouTube </span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                                </div>
                            </div>
                        </div>
                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_hover_news_img_video_tag_position_relative">
                                    <div class="fh5co_news_img">
                                        <iframe id="video_2" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_2">
                                        <img src="images/39-324x235.jpg" alt="" />
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_2"
                                        id="play-video_2">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                                <span><i class="fa fa-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                        <span class="">The top 10 embedded YouTube videos this month</span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                                </div>
                            </div>
                        </div>
                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_hover_news_img_video_tag_position_relative">
                                    <div class="fh5co_news_img">
                                        <iframe id="video_3" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_3">
                                        <img src="images/joe-gardner-75333.jpg" alt="" />
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_3"
                                        id="play-video_3">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                                <span><i class="fa fa-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                        <span class="">The top 10 best computer speakers in the market</span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                                </div>
                            </div>
                        </div>
                        <div class="item px-2">
                            <div class="fh5co_hover_news_img">
                                <div class="fh5co_hover_news_img_video_tag_position_relative">
                                    <div class="fh5co_news_img">
                                        <iframe id="video_4" width="100%" height="200"
                                            src="https://www.youtube.com/embed/aM9g4r9QUsM?rel=0&amp;showinfo=0"
                                            frameborder="0" allowfullscreen></iframe>
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute fh5co_hide_4">
                                        <img src="images/vil-son-35490.jpg" alt="" />
                                    </div>
                                    <div class="fh5co_hover_news_img_video_tag_position_absolute_1 fh5co_hide_4"
                                        id="play-video_4">
                                        <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button_1">
                                            <div class="fh5co_hover_news_img_video_tag_position_absolute_1_play_button">
                                                <span><i class="fa fa-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <a href="#" class="d-block fh5co_small_post_heading fh5co_small_post_heading_1">
                                        <span class="">The top 10 best computer speakers in the market</span></a>
                                    <div class="c_g"><i class="fa fa-clock-o"></i> Oct 16,2017</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="container-fluid pb-4 pt-4 paddding">
            <div class="container paddding">
                <div class="row mx-0">
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News items
                            </div>
                        </div>
                        <?php
                        $randStart = random_int(1, 25);
                        $randEnd = random_int(1, 4);
                        $TinNoiBatNews = $item->getNewItem($randStart, $randEnd);
                        foreach ($TinNoiBatNews as $key => $value):
                            $formatDate = date('M, d, Y', strtotime($value['created_at'])); ?>
                            <!-- <a href="#" class="fh5co_tagg"><?php echo $value['image'] ?></a> -->
                            <div class="row pb-4">
                                <div class="col-md-5">
                                    <div class="fh5co_hover_news_img">
                                        <div class="fh5co_news_img"><img src="<?php echo $value['image'] ?>" alt="" /></div>

                                    </div>
                                </div>
                                <div class="col-md-7 animate-box">
                                    <a href="single.php" class="fh5co_magna py-2"><?php echo $value['title'] ?> </a> <a
                                        href="#"
                                        class="fh5co_mini_time py-3"><?php echo $value['nameUser'] . ' - ' . $formatDate ?></a>
                                    <div class="fh5co_consectetur"> <?php echo $value['excerpt'] ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>

                    </div>
                    <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tags</div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="fh5co_tags_all">
                            <?php
                            $getNameCate = $cate->getNameCate();
                            foreach ($getNameCate as $key => $value): ?>
                                <a href="#" class="fh5co_tagg"><?php echo $value['name'] ?></a>
                            <?php endforeach ?>
                        </div>
                        <div>
                            <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Most Popular</div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/download (1).jpg" alt="img" class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/allef-vinicius-108153.jpg" alt="img" class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Enim ad minim veniam nostrud xercitation ullamco.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center">
                                <img src="images/download (2).jpg" alt="img" class="fh5co_most_trading" />
                            </div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-5 align-self-center"><img src="images/seth-doyle-133175.jpg" alt="img"
                                    class="fh5co_most_trading" /></div>
                            <div class="col-7 paddding">
                                <div class="most_fh5co_treding_font"> Magna aliqua ut enim ad minim veniam quis nostrud.
                                </div>
                                <div class="most_fh5co_treding_font_123"> April 18, 2016</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
                    <div class="col-12 text-center pb-4 pt-4">
                        <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp;
                            Previous</a>
                        <a href="#" class="btn_pagging">1</a>
                        <a href="#" class="btn_pagging">2</a>
                        <a href="#" class="btn_pagging">3</a>
                        <a href="#" class="btn_pagging">...</a>
                        <a href="#" class="btn_mange_pagging">Next <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp;
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fh5co_footer_bg pb-3">
            <div class="container animate-box">
                <div class="row">
                    <div class="col-12 spdp_right py-5"><img src="images/white_logo.png" alt="img"
                            class="footer_logo" />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="footer_main_title py-3"> About</div>
                        <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and
                            typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                            an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div class="footer_mediya_icon">
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                                </a></div>
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                                </a></div>
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                                </a></div>
                            <div class="text-center d-inline-block"><a class="fh5co_display_table_footer">
                                    <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                                </a></div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-2">
                        <div class="footer_main_title py-3"> Category</div>
                        <ul class="footer_menu">
                            <?php
                            $getNameCate = $cate->getNameCate();
                            foreach ($getNameCate as $key => $value): ?>
                                <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp;
                                        <?php echo $value['name'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                    <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                        <div class="footer_main_title py-3"> Most Viewed Posts</div>
                        <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble
                        </a>
                        <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble
                        </a>
                        <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                        <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble
                        </a>
                        <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                                class="width_footer_sub_img" /></div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4 ">
                        <div class="footer_main_title py-3"> Last Modified Posts</div>
                        <a href="#" class="footer_img_post_6"><img src="images/allef-vinicius-108153.jpg"
                                alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/32-450x260.jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/download (1).jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/science-578x362.jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/vil-son-35490.jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/zack-minor-15104.jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/download.jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/download (2).jpg" alt="img" /></a>
                        <a href="#" class="footer_img_post_6"><img src="images/ryan-moreno-98837.jpg" alt="img" /></a>
                    </div>
                </div>
                <div class="row justify-content-center pt-2 pb-4">
                    <div class="col-12 col-md-8 col-lg-7 ">
                        <div class="input-group">
                            <span class="input-group-addon fh5co_footer_text_box" id="basic-addon1"><i
                                    class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control fh5co_footer_text_box"
                                placeholder="Enter your email..." aria-describedby="basic-addon1">
                            <a href="#" class="input-group-addon fh5co_footer_subcribe" id="basic-addon12"> <i
                                    class="fa fa-paper-plane-o"></i>&nbsp;&nbsp;Subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid fh5co_footer_right_reserved">
            <div class="container">
                <div class="row  ">
                    <div class="col-12 col-md-6 py-4 Reserved"> © Copyright 2018, All rights reserved. Design by <a
                            href="https://freehtml5.co" title="Free HTML5 Bootstrap templates">FreeHTML5.co</a>. </div>
                    <div class="col-12 col-md-6 spdp_right py-4">
                        <a href="#" class="footer_last_part_menu">Home</a>
                        <a href="Contact_us.html" class="footer_last_part_menu">About</a>
                        <a href="Contact_us.html" class="footer_last_part_menu">Contact</a>
                        <a href="blog.html" class="footer_last_part_menu">Latest News</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="gototop js-top">
            <a href="#" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
            crossorigin="anonymous"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Main -->
        <script src="js/main.js"></script>

</body>

</html>