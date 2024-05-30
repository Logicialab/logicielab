<section class="pt-0">
    <div class="container">
        <div class="row g-4 align-items-center">
            <!-- Features -->
            <div class="col-lg-6">
                <div class="row g-xl-5">
                    <!-- Item -->
                    @foreach ($why_we_items as $item)
                        <div class="col-md-6">
                            <div class="card card-body bg-light p-4 mt-5">
                                <!-- Icon -->
                                <i style="font-size: 36px;color: #07b850; margin-bottom: 20px"
                                    class="{{$item->image}}"></i>
                                <h6>{{$item->title}}</h6>
                                <p class="mb-0">{{$item->content}}</p>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-6 ps-xl-7">
                <h2 class="mb-4">لماذا نحن؟</h2>
                @foreach ($why_we as $item)
                    <p class="text-black"> <strong>{{ $item->title }} :</strong>{{ $item->content }}</p>
                @endforeach
                <!-- Button -->
                <a class="btn btn-dark me-3 mb-0" href="/services">اكتشف الخدمات!</a>
                <a class="icon-link icon-link-hover" href="/contact">الحصول على الخدمة<i class="bi bi-arrow-right"></i>
                </a>

            </div>
        </div> <!-- Row END -->
    </div>
</section>
