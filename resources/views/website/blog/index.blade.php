@extends('website.master')
@section('title')
    all-blogs
@endsection

@section('body')


    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--blog area start-->
    <div class="main_blog_area mt-50 mb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="blog_left_area">
                        <div class="single_blog mb-50">
                            <div class="blog_title">
                                    <span>
                                        <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                <h2><a href="#">Blog image post</a></h2>
                                <div class="blog_post">
                                    <ul>
                                        <li class="post_author">Posts by : admin</li>
                                        <li class="post_date"> August 12 2021	</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_container">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big1.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                    <a href="blog-details.html">Read more</a>
                                    <div class="blog_footer">
                                        <div class="blog_social">
                                            <p>Share this post</p>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_comment">
                                            <a href="#">3 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog mb-50">
                            <div class="blog_title">
                                    <span>
                                        <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                <h2><a href="#">Post with Gallery</a></h2>
                                <div class="blog_post">
                                    <ul>
                                        <li class="post_author">Posts by : admin</li>
                                        <li class="post_date"> August 12 2021	</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_container">
                                <div class="blog_thumb_active owl-carousel">
                                    <div class="blog_thumb blog__hover">
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big2.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big3.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big4.jpg" alt=""></a>
                                    </div>
                                    <div class="blog_thumb">
                                        <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big5.jpg" alt=""></a>
                                    </div>
                                </div>

                                <div class="blog_content">
                                    <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                    <a href="blog-details.html">Read more</a>
                                    <div class="blog_footer">
                                        <div class="blog_social">
                                            <p>Share this post</p>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_comment">
                                            <a href="#">3 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog mb-50">
                            <div class="blog_title">
                                    <span>
                                         <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                <h2><a href="#">Post with Audio</a></h2>
                                <div class="blog_post">
                                    <ul>
                                        <li class="post_author">Posts by : admin</li>
                                        <li class="post_date"> August 12 2021	</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_container">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big3.jpg" alt=""></a>
                                </div>
                                <div class="blog_aduio_icone">
                                    <audio controls>
                                        <source src="http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3?1" type="audio/mp3">
                                    </audio>
                                </div>

                                <div class="blog_content">
                                    <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                    <a href="blog-details.html">Read more</a>
                                    <div class="blog_footer">
                                        <div class="blog_social">
                                            <p>Share this post</p>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_comment">
                                            <a href="#">3 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog mb-50">
                            <div class="blog_title">
                                    <span>
                                        <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                <h2><a href="#">Post with Video</a></h2>
                                <div class="blog_post">
                                    <ul>
                                        <li class="post_author">Posts by : admin</li>
                                        <li class="post_date"> August 12 2021	</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_container">
                                <div class="blog_thumb embed-responsive embed-responsive-16by9">
                                    <iframe width="870" height="700" src="https://www.youtube.com/embed/DR2c266yWEA"  allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                </div>
                                <div class="blog_content">
                                    <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                    <a href="blog-details.html">Read more</a>
                                    <div class="blog_footer">
                                        <div class="blog_social">
                                            <p>Share this post</p>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_comment">
                                            <a href="#">3 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog mb-50">
                            <div class="blog_title">
                                    <span>
                                        <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                <h2><a href="#">Maecenas ultricies</a></h2>
                                <div class="blog_post">
                                    <ul>
                                        <li class="post_author">Posts by : admin</li>
                                        <li class="post_date"> August 12 2021	</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_container">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big4.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                    <a href="blog-details.html">Read more</a>
                                    <div class="blog_footer">
                                        <div class="blog_social">
                                            <p>Share this post</p>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_comment">
                                            <a href="#">3 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog mb-50">
                            <div class="blog_title">
                                    <span>
                                        <a href="#">Fashion</a>
                                        <a href="#">ecommerce</a>
                                    </span>
                                <h2><a href="#">Etiam magna</a></h2>
                                <div class="blog_post">
                                    <ul>
                                        <li class="post_author">Posts by : admin</li>
                                        <li class="post_date"> August 12 2021	</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog_container">
                                <div class="blog_thumb">
                                    <a href="blog-details.html"><img src="{{asset('/')}}website/img/blog/blog-big5.jpg" alt=""></a>
                                </div>
                                <div class="blog_content">
                                    <p class="blog_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, tempore quos rem sunt? Itaque necessitatibus illum cupiditate dolor in qui modi obcaecati porro ex, tempora distinctio, esse omnis architecto accusantium sunt? Itaque.</p>
                                    <a href="blog-details.html">Read more</a>
                                    <div class="blog_footer">
                                        <div class="blog_social">
                                            <p>Share this post</p>
                                            <ul>
                                                <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" title="Facebook"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="blog_comment">
                                            <a href="#">3 comments</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--blog pagination area start-->
                    <div class="blog_pagination">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--blog pagination area end-->
                </div>
                <div class="col-lg-3 col-md-8 offset-md-2 offset-lg-0">

                    <div class="blog_sidebar_widget">
                        <div class="widget_list widget_categories">
                            <h2>categories</h2>
                            <ul>
                                <li>
                                    <a href="#">Creative <span>(6)</span></a>
                                </li>
                                <li>
                                    <a href="#">Fashion <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#">Image <span>(4)</span></a>
                                </li>
                                <li>
                                    <a href="#">Travel <span>(10)</span></a>
                                </li>
                                <li>
                                    <a href="#">Videos <span>(8)</span></a>
                                </li>
                                <li>
                                    <a href="#">ecommerce <span>(3)</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget_list widget_search mb-30">
                            <h2>Search</h2>
                            <form action="#">
                                <input placeholder="search.." type="text">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget_list recent_post">
                            <h2>Recent Posts</h2>
                            <ul>
                                <li>
                                    <a href="#">Blog image post</a>
                                </li>
                                <li>
                                    <a href="#">Post with Gallery</a>
                                </li>
                                <li>
                                    <a href="#">Post with Audio</a>
                                </li>
                                <li>
                                    <a href="#">Post with Video</a>
                                </li>
                                <li>
                                    <a href="#">Maecenas ultricies</a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget_list widget_archives">
                            <h2>Blog Archives</h2>
                            <ul>
                                <li>
                                    <a href="#">March 2021 <span>(1)</span></a>
                                </li>
                                <li>
                                    <a href="#">December 2021 <span>(5)</span></a>
                                </li>
                                <li>
                                    <a href="#">November 2021 <span>(7)</span></a>
                                </li>
                                <li>
                                    <a href="#">September 2021 <span>(3)</span></a>
                                </li>
                                <li>
                                    <a href="#">August  2021 <span>(4)</span></a>
                                </li>

                            </ul>
                        </div>
                        <div class="widget_list widget_tags">
                            <h2>Tags</h2>
                            <div class="tag_cloud">
                                <ul>
                                    <li><a href="#">asian</a></li>
                                    <li><a href="#">brown</a></li>
                                    <li><a href="#">camera</a></li>
                                    <li><a href="#">chilled</a></li>
                                    <li><a href="#">coctail</a></li>
                                    <li><a href="#">cool</a></li>
                                    <li><a href="#">dark</a></li>
                                    <li><a href="#">euro</a></li>
                                    <li><a href="#">fashion</a></li>
                                    <li><a href="#">food</a></li>
                                    <li><a href="#">france</a></li>
                                    <li><a href="#">hardware</a></li>
                                    <li><a href="#">light</a></li>
                                    <li><a href="#">mac</a></li>
                                    <li><a href="#">place</a></li>
                                    <li><a href="#">retro</a></li>
                                    <li><a href="#">t-shirt</a></li>
                                    <li><a href="#">teen</a></li>
                                    <li><a href="#">travel</a></li>
                                    <li><a href="#">video-2</a></li>
                                    <li><a href="#">watch</a></li>
                                    <li><a href="#">white</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget_list widget_facebook">
                            <h2>Facebook Like Box</h2>
                            <div class="facebook_like_box">
                                <div class="fb-page" data-href="https://www.facebook.com/devItems" data-tabs="timeline" data-width="270" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/devItems" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/devItems">DevItems</a></blockquote></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--blog area end-->


    <!--brand newsletter area start-->
    <div class="brand_newsletter_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="brand_container owl-carousel">
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand1.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand2.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand3.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand4.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand5.png" alt=""></a>
                        </div>
                        <div class="single_brand">
                            <a href="#"><img src="{{asset('/')}}website/img/brand/brand1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="newsletter_inner">
                        <div class="newsletter_content">
                            <h2>SUBSCRIBE TO OUR NEWSLETTER</h2>
                        </div>
                        <div class="newsletter_form">
                            <form action="#">
                                <input placeholder="Email..." type="text">
                                <button type="submit"><i class="zmdi zmdi-mail-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--brand area end-->


@endsection
