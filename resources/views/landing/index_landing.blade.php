@extends('layouts.fe.master')

@section('content')

<div class="container margin_60">
    <!--BERITA-->
    <div class="bg_gray">
        <div class="container">
            <div class="main_title">
                <span><em></em></span>
                <h2>Bidang</h2>
            </div>
    
            <div class="owl-carousel owl-theme categories_carousel">
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>98</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_pizza.jpg" alt="" class="owl-lazy" width="350" height="450">
                            
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>87</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_sushi.jpg" alt="" class="owl-lazy" width="350" height="450">
                            
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>55</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_hamburgher.jpg" alt="" class="owl-lazy" width="350" height="450">
                            
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>55</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_vegetarian.jpg" alt="" class="owl-lazy" width="350" height="450">
                            
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>65</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_bakery.jpg" alt="" class="owl-lazy" width="350" height="450">
                            
                        </figure>
                    </a>
                </div>
                <div class="item_version_2">
                    <a href="grid-listing-filterscol.html">
                        <figure>
                            <span>35</span>
                            <img src="img/home_cat_placeholder.jpg" data-src="img/home_cat_mexican.jpg" alt="" class="owl-lazy" width="350" height="450">
                            
                        </figure>
                    </a>
                </div>
            </div>
            
            {{-- <div class="main_title center">
                <span><em></em></span>
                <h2 style="text-transform: uppercase; font-weight: 700">Hot Topic</h2>
            </div>
            <div class="blog-slider">
                <div class="blog-slider__wrp swiper-wrapper">
            
                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                        <img src="https://images.unsplash.com/photo-1569124589354-615739ae007b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
                        </div>
                        <div class="blog-slider__content">
                        <span class="blog-slider__code">26 December 2019</span>
                        <div class="blog-slider__title">Lorem Ipsum Dolor</div>
                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                        </div>
                    </div>
                    
                    <div class="blog-slider__item swiper-slide">
                        <div class="blog-slider__img">
                        <img src="https://images.unsplash.com/photo-1595868228899-abc8fabb3447?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" alt="">
                        </div>
                        <div class="blog-slider__content">
                        <span class="blog-slider__code">26 December 2019</span>
                        <div class="blog-slider__title">Lorem Ipsum Dolor2</div>
                        <div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi?</div>
                        <a href="#" class="blog-slider__button">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="blog-slider__pagination"></div>
            </div> --}}
        </div>

        <div class="container margin_60_40">
            <div class="main_title">
                <span><em></em></span>
                <h2>Kabar Terbaru</h2>
            </div>
            <div class="row add_bottom_25">
                <div class="col-md-4">
                    <article class="blog">
                        <div class="row">
                            <div class="col-6 col-xl-12">
                                <figure >
                                    <a href="#0"><img src="img/blog-2.jpg" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-6 col-xl-12">
                                <div class="post_info">
                                    <small>20 Nov. 2017</small>
                                    <h2><a href="#00">At usu sale dolorum offendit</a></h2>
                                    <p>Quodsi in eos quod omnes epicurei omnes epicurei omnes epicurei</p>
                                    <ul>
                                        Baca selengkapnya
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /article -->
                </div>
                <div class="col-md-4">
                    <article class="blog">
                        <div class="row">
                            <div class="col-6 col-xl-12">
                                <figure >
                                    <a href="#0"><img src="img/blog-2.jpg" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-6 col-xl-12">
                                <div class="post_info">
                                    <small>20 Nov. 2017</small>
                                    <h2><a href="#0">At usu sale dolorum offendit</a></h2>
                                    <p>Quodsi in eos quod omnes epicurei omnes epicurei omnes epicurei</p>
                                    <ul>
                                        Baca selengkapnya
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /article -->
                </div>
                <div class="col-md-4">
                    <article class="blog">
                        <div class="row">
                            <div class="col-6 col-xl-12">
                                <figure >
                                    <a href="#0"><img src="img/blog-2.jpg" alt="">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-6 col-xl-12">
                                <div class="post_info">
                                    <small>20 Nov. 2017</small>
                                    <h2><a href="#0">At usu sale dolorum offendit</a></h2>
                                    <p>Quodsi in eos quod omnes epicurei omnes epicurei omnes epicurei</p>
                                    <ul>
                                        Baca selengkapnya
                                        <li><i class="icon_comment_alt"></i>20</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /article -->
                </div>
            </div>
            <!-- /row -->
        </div>
    </div>
</div>


@endsection

@section('script')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script>

</script>
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
@endsection
