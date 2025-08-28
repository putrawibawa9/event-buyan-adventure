<?php $head_title="Gallery || gowilds || gowilds PHP Template"?>
@include('front.top-layout')
<!-- header -->
@include('front.header5')
<?php
$page_title = "Gallery";

?>

        <!--====== Start Gallery Section ======-->
        <section class="gallery-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    @foreach($images as $image)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!--=== Single Gallery Item ===-->
                        <div class="single-gallery-item mb-30 wow fadeInUp">
                            <div class="gallery-img">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="Gallery Image">
                                <div class="hover-overlay">
                                    <a href="{{ asset('storage/' . $image->path) }}" class="icon-btn img-popup"><i class="far fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section><!--====== End Gallery Section ======-->
    @include('front.footer2')
@include('front.bottom-layout')