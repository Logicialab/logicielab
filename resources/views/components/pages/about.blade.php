<div>
    <section>
        <div class="container">
            <div class="row g-4 align-items-xl-center">
    
                @foreach ($abouts as $about)
                    
               
                <!-- About image START -->
                <div class="col-lg-7">
                    <div class="row pe-xl-5">
                        <div class="col-sm-6">
                            <!-- About image -->
                            <img src="assets/images/about/02.jpg" class="rounded" alt="about-img">
    
                            <!-- SVG decoration -->
                            <x-widget.svg-about />
                        </div>
    
                        <div class="col-sm-6">
                            <!-- Skill set -->
                            <div class="row mb-4">
                                <div class="col-sm-6 mb-4 mb-sm-0">
                                    <div class="bg-dark text-white rounded text-center p-3">
                                        <span class="h2 text-white">10+</span>
                                        <p class="mb-0">سنوات من الخبرة</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bg-primary rounded text-center p-3">
                                        <span class="h2 text-white">1.2K</span>
                                        <p class="mb-0 text-white">الزبائن سعداء</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- About image -->
                            <img src="{{$about->image}}" class="rounded" alt="about-img-2">
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- About image END -->
    
                <!-- About content START -->
                <div class="col-lg-5">
                    <span class="heading-color bg-light small rounded-3 px-3 py-2">🤝 تعرف علينا</span>
                    <h3 class="my-4" style="line-height: 56px">{{$about->title}}</h3>
                    <p class="mb-4">{{$about->description}}</p>
                    
                    <!-- List -->
                    <ul class="list-group list-group-borderless mb-4">
                        <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>نقدم خدمات بمواصفات عالمية.</li>
                        <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i> نعتبر نجاحَكم هو نجاحنا، ورضاكم هو غايتنا.</li>
                        <li class="list-group-item heading-color d-flex mb-0"><i class="bi bi-patch-check-fill text-primary me-2"></i>نجمع بين الخبرة والابتكار لنتجاوز كل توقعاتكم.</li>
                    </ul>
                    <!-- Button -->
                    <a href="/about" class="btn btn-dark mb-0">إكتشف أكثر</a>
                </div>
                <!-- About content END -->
                @endforeach
            </div>
        </div>
    </section>
</div>