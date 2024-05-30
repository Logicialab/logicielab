<section class="pb-0 pt-6">
    <div class="container" data-sticky-container>
        <div class="inner-container-small text-center pb-2">
            <h2 class="mb-4">خدماتنا</h2>
        </div>
        <div class="row">
            <!-- Title and content -->
            <div class="col-lg-4 mb-5">
                <div data-sticky data-margin-top="80" data-sticky-for="576">
                    <h2 class="mb-4">اكتشف كيف يمكن لخدماتنا الرقمية أن تميز مشروعك في سوق المنافسة!</h2>
                    <p class="mb-4">بدعم من فريقنا الذي يسعى لتحقيق النتائج، يمكنك حل العديد من التحديات. </p>
                    <div class="text-center d-inline-block bg-dark rounded px-5 py-3">
                        <span class="text-white">اعمل معنا؟ </span>
                        <a class="ms-2" href="/contact">تواصل معنا <span
                                class="bi-chevron-right small ms-1"></span></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 ps-xl-7">
                <div class="row g-4 g-sm-5">

                    @foreach ($services as $service)
                         <!-- Card item -->
                        <div class="col-md-6">
                            <div class="card border bg-light p-5">
                                <!-- Card header -->
                                <div class="card-header bg-light p-0 mb-4">
                                    <i style="font-size: 36px;color: #07b850; margin-bottom: 20px"  class="{{$service->image}}"></i>
                                </div>

                                <div class="card-body p-0">
                                    <h5 class="mb-3">{{$service->title}}</h5>
                                    <p class="mb-0">{{$service->content}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                </div> <!-- Row END -->
            </div>

        </div>
    </div>
</section>