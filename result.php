<?php include 'required.php';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
}
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$perPage = 2;
$start = ($page - 1) * $perPage;
$search = $item->search($keyword, $start, $perPage);
$total = count($item->TotalCate($keyword));
$url = $_SERVER['PHP_SELF'] . '?keyword=' . $keyword;
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

    <div class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">News: <?php echo $total ?>
                            items
                        </div>
                    </div>
                    <?php
                    $search = $item->search($keyword, $start, $perPage);
                    foreach ($search as $key => $value):
                        $formatDate = date('M, d, Y', strtotime($value['created_at'])); ?>
                        <!-- <a href="#" class="fh5co_tagg"><?php echo $value['image'] ?></a> -->
                        <div class="row pb-4">
                            <div class="col-md-5">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img"><img src="<?php echo $value['image'] ?>" alt="" /></div>

                                </div>
                            </div>
                            <div class="col-md-7 animate-box">
                                <a href="single.php" class="fh5co_magna py-2"><?php echo $value['title'] ?> </a> <a href="#"
                                    class="fh5co_mini_time py-3"><?php echo $value['authors'] . ' - ' . $formatDate ?></a>
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
                </div>
            </div>
            <div class="row mx-0">
                <div class="col-12 text-center pb-4 pt-5">
                    <?php echo $item->pageInt($url, $total, $perPage, $page); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fh5co_footer_bg pb-3">
        <div class="container animate-box">
            <div class="row">
                <div class="col-12 spdp_right py-5"><img src="images/white_logo.png" alt="img" class="footer_logo" />
                </div>
                <div class="clearfix"></div>
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="footer_main_title py-3"> About</div>
                    <div class="footer_sub_about pb-3"> Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
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
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Business</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Entertainment</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Environment</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Health</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Life style</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Politics</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; Technology</a></li>
                        <li><a href="#" class=""><i class="fa fa-angle-right"></i>&nbsp;&nbsp; World</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-5 col-lg-3 position_footer_relative">
                    <div class="footer_main_title py-3"> Most Viewed Posts</div>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_makes_sub_font"> Dec 31, 2016</div>
                    <a href="#" class="footer_post pb-4"> Success is not a good teacher failure makes you humble </a>
                    <div class="footer_position_absolute"><img src="images/footer_sub_tipik.png" alt="img"
                            class="width_footer_sub_img" /></div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 ">
                    <div class="footer_main_title py-3"> Last Modified Posts</div>
                    <a href="#" class="footer_img_post_6"><img src="images/allef-vinicius-108153.jpg" alt="img" /></a>
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
                        <input type="text" class="form-control fh5co_footer_text_box" placeholder="Enter your email..."
                            aria-describedby="basic-addon1">
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
                    <a href="index.html" class="footer_last_part_menu">Home</a>
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