<!-- ======= Hero Slider Section ======= -->
<section id="hero-slider" class="hero-slider">
    <div class="container-md" data-aos="fade-in">
        <div class="row">
            <div class="col-12">
                <div class="swiper sliderFeaturedPosts">
                    <div class="swiper-wrapper">

                        @foreach ($publications as $pub)
                        <div class="swiper-slide">
                            <a href="" class="img-bg d-flex align-items-end"
                                style="background-image: url('{{ asset('storage') . '/' . $pub->img }}');">
                                <div class="img-bg-inner">
                                    <h2>{{$pub->nom_pub}}</h2>
                                    <p>{{$pub->descript}}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    <div class="custom-swiper-button-next">
                        <span class="bi-chevron-right"></span>
                    </div>
                    <div class="custom-swiper-button-prev">
                        <span class="bi-chevron-left"></span>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Hero Slider Section -->

