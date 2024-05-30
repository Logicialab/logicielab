<div class="mt-md-auto">
    <div class="swiper swiper-initialized swiper-horizontal swiper-rtl swiper-backface-hidden" data-swiper-options="{
        &quot;loop&quot;: false, 
        &quot;slidesPerView&quot;: 2, 
        &quot;spaceBetween&quot;: 40,
        &quot;breakpoints&quot;: { 
            &quot;576&quot;: {&quot;slidesPerView&quot;: 3},
            &quot;768&quot;: {&quot;slidesPerView&quot;: 4}
        }}">

        <!-- Slider items -->
        <div class="swiper-wrapper align-items-center" id="swiper-wrapper-92395a77119d9e30" aria-live="off" style="transition-duration: 0ms; transform: translate3d(330px, 0px, 0px); transition-delay: 0ms;">
            <!-- Image -->
            @foreach ($brands as $brand)
                <div class="swiper-slide">
                    <img src="{{$brand->image}}" class="grayscale" alt="client-img">
                </div>
            @endforeach
        </div>
    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>