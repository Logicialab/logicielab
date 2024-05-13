@extends('layouts.app')

@section('content')
    <!-- **************** MAIN CONTENT START **************** -->
    <main>

        <!-- =======================
        Main Banner START -->
        <section class="py-8 py-sm-9 position-relative"
            style="background:url(assets/images/bg/05.jpg) no-repeat; background-size:cover; background-position:center;">
            <!-- Bg overlay -->
            <div class="bg-overlay bg-dark opacity-7"></div>

            <div class="container position-relative z-index-1">
                <!-- Hero START -->
                <div class="row g-4 g-xxl-5">
                    <!-- Hero content START -->
                    <div class="col-lg-8 text-center mx-auto">
                        <!-- Bread crumb -->
                        <div class="d-flex justify-content-center position-relative mb-2">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb breadcrumb-dots breadcrumb-dark pb-0 mb-0">
                                    <li class="breadcrumb-item"><a href="/">الرئيسية</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">خدماتنا</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- Title -->
                        <h1 class="mb-0 text-white">خدماتنا</h1>
                    </div>
                    <!-- Hero content END -->
                </div>
                <!-- Hero END -->
            </div>
        </section>
        <!-- =======================
        Main Banner END -->

        <!-- =======================
        Services START -->
        <section class="pb-0">
            <div class="container" data-sticky-container>
                <div class="row">
                    <!-- Title and content -->
                    <div class="col-lg-4 mb-5">
                        <div data-sticky data-margin-top="80" data-sticky-for="576">
                            <h2 class="mb-4">دعنا نبني أفضل الحلول الرقمية لعملك الآن! </h2>
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

                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card border bg-light p-5">
                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 mb-4">
                                        <!-- Icon -->
                                        <figure class="text-primary">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M20.2402 6.75391C21.2543 9.81065 21.2543 11.8485 20.2402 14.9052"
                                                    stroke="currentColor" stroke-opacity="0.25" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M2.25047 12.9739C2.25055 14.0922 3.15715 14.9988 4.27547 14.9988V14.9988L4.25651 19.4911C4.25125 20.7361 5.25945 21.7481 6.50452 21.7474V21.7474C7.74497 21.7468 8.75021 20.741 8.75021 19.5006V15.1105H10V6.55981H6.46978C5.09959 6.55981 4.41449 6.55981 3.87962 6.79848C3.26038 7.07479 2.76505 7.57015 2.48879 8.18941C2.25016 8.72431 2.25021 9.4094 2.25031 10.7796L2.25047 12.9739Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.0002 15.8122C13.9211 18.3111 15.3815 19.5606 16.6274 19.37C17.1377 19.2919 17.6157 19.0718 18.0068 18.7348C18.9616 17.912 18.9616 15.99 18.9616 12.146V9.4287C18.9616 5.58267 18.9616 3.65966 18.0199 2.83775C17.6138 2.48322 17.1124 2.2559 16.5781 2.18405C15.3393 2.01748 13.893 3.28476 11.0002 5.81933V5.81933V15.8122V15.8122Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                            </svg>
                                        </figure>
                                    </div>

                                    <div class="card-body p-0">
                                        <h5 class="mb-3"><a href="/digital-marketing" class="stretched-link">خدمات
                                                التسويق الالكتروني</a></h5>
                                        <p class="mb-0">اكتشف قوة التسويق الإلكتروني مع خدمتنا المبتكرة. نحن نقدم حلاً
                                            شاملاً لزيادة رؤيتك على الإنترنت وتعزيز نجاح عملك. مع التسويق الالكتروني، يمكنك
                                            الوصول إلى جمهور أوسع، وزيادة المبيعات، وتعزيز العلامة التجارية. </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card border bg-light p-5">
                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 mb-4">
                                        <!-- Icon -->
                                        <figure class="text-primary">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M17.523 8.92914C17.523 9.94279 16.6746 10.7645 15.6281 10.7645C14.5816 10.7645 13.7333 9.94279 13.7333 8.92914C13.7333 7.91548 14.5816 7.09375 15.6281 7.09375C16.6746 7.09375 17.523 7.91548 17.523 8.92914Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M10.485 8.92914C10.485 9.94279 9.63664 10.7645 8.59015 10.7645C7.54366 10.7645 6.69531 9.94279 6.69531 8.92914C6.69531 7.91548 7.54366 7.09375 8.59015 7.09375C9.63664 7.09375 10.485 7.91548 10.485 8.92914Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.0264 15.2219C11.0264 16.2355 10.178 17.0573 9.13154 17.0573C8.08504 17.0573 7.2367 16.2355 7.2367 15.2219C7.2367 14.2082 8.08504 13.3865 9.13154 13.3865C10.178 13.3865 11.0264 14.2082 11.0264 15.2219Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M21.748 9.45998C21.4753 4.55256 14.4854 1.4706 9.28231 2.41642C4.07925 3.36223 1.56208 8.48915 2.41245 13.4547C3.23924 18.2826 8.68956 21.7459 12.1134 21.7459C15 21.7459 17.25 20.6058 17.25 18.9959C17.25 18.9959 17.2846 18.5254 16.98 17.9961C16.7157 17.5369 16.4642 17.3392 16.07 16.9961C15.8584 16.8119 15.5273 16.5296 15.15 15.9959C14.9079 15.6534 14.8139 15.4137 14.8 15.3435C14.7846 14.9174 15.0127 14.407 15.5 14.2561C15.6439 14.2115 15.8105 14.2221 16 14.2459C18 14.3961 22 13.9961 21.748 9.45998Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                            </svg>
                                        </figure>
                                    </div>

                                    <div class="card-body p-0">
                                        <h5 class="mb-3"><a href="/web-design" class="stretched-link">تصميم
                                                مواقع</a></h5>
                                        <p class="mb-0">احصل على موقع الكتروني متميز يلبي احتياجاتك وينمّي عملك مع خدمة
                                            تصميم مواقع الكترونية، من خلال موقع متجاوب يعمل بسلاسة على جميع الأجهزة وتصميم
                                            جذاب يلفت انتباه زوارك </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card border bg-light p-5">
                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 mb-4">
                                        <!-- Icon -->
                                        <figure class="text-primary">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 5.75H5M10.5 5.75H21M3 18.25H5M10.5 18.25H21M21 12H19M13.5 12H3"
                                                    stroke="currentColor" stroke-opacity="0.25" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path
                                                    d="M4.25 5.75C4.25 3.817 5.817 2.25 7.75 2.25V2.25C9.683 2.25 11.25 3.817 11.25 5.75V5.75C11.25 7.683 9.683 9.25 7.75 9.25V9.25C5.817 9.25 4.25 7.683 4.25 5.75V5.75Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M4.25 18.25C4.25 16.317 5.817 14.75 7.75 14.75V14.75C9.683 14.75 11.25 16.317 11.25 18.25V18.25C11.25 20.183 9.683 21.75 7.75 21.75V21.75C5.817 21.75 4.25 20.183 4.25 18.25V18.25Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M12.75 12C12.75 10.067 14.317 8.5 16.25 8.5V8.5C18.183 8.5 19.75 10.067 19.75 12V12C19.75 13.933 18.183 15.5 16.25 15.5V15.5C14.317 15.5 12.75 13.933 12.75 12V12Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </figure>
                                    </div>

                                    <div class="card-body p-0">
                                        <h5 class="mb-3"><a href="/cloud-hosting" class="stretched-link"> خدمات
                                                الاستضافة</a></h5>
                                        <p class="mb-0">هل تبحث عن منصة استضافة المواقع القوية تضمن لموقعك الإلكتروني
                                            الاستقرار والسرعة، نقدم لك خدمة استضافة المواقع الفريدة والمحترفة التي تلبي
                                            احتياجات موقعك بكفاءة عالية، اكتشف خدمة الاستضافة من لوجيسيل لاب واستمتع بتجربة
                                            استضافة فريدة واحترافية. </p>
                                    </div>
                                </div>
                            </div>

                

                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card border bg-light p-5">
                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 mb-4">
                                        <!-- Icon -->
                                        <figure class="text-primary">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M4.95 9.83377C3.51099 9.1789 2.79149 8.85147 2.55187 8.40828C2.3112 7.96313 2.3112 7.42663 2.55187 6.98148C2.79149 6.53829 3.51099 6.21086 4.95 5.55599L10.8816 2.8566C11.37 2.63435 11.6142 2.52322 11.872 2.50115C11.9572 2.49386 12.0428 2.49386 12.128 2.50115C12.3858 2.52322 12.63 2.63435 13.1184 2.8566L19.05 5.55599C20.489 6.21086 21.2085 6.53829 21.4481 6.98148C21.6888 7.42663 21.6888 7.96313 21.4481 8.40828C21.2085 8.85147 20.489 9.1789 19.05 9.83377L13.1184 12.5332C12.63 12.7554 12.3858 12.8665 12.128 12.8886C12.0428 12.8959 11.9572 12.8959 11.872 12.8886C11.6142 12.8665 11.37 12.7554 10.8816 12.5332L4.95 9.83377Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                                <path
                                                    d="M4.95 9.83377C3.51099 10.4886 2.79149 10.8161 2.55187 11.2593C2.3112 11.7044 2.3112 12.2409 2.55187 12.6861C2.79149 13.1292 3.51099 13.4567 4.95 14.1115L10.8816 16.8109C11.37 17.0332 11.6142 17.1443 11.872 17.1664C11.9572 17.1737 12.0428 17.1737 12.128 17.1664C12.3858 17.1443 12.63 17.0332 13.1184 16.8109L19.05 14.1115C20.489 13.4567 21.2085 13.1292 21.4481 12.6861C21.6888 12.2409 21.6888 11.7044 21.4481 11.2593C21.2085 10.8161 20.489 10.4886 19.05 9.83377L13.1184 12.5332C12.63 12.7554 12.3858 12.8665 12.128 12.8886C12.0428 12.8959 11.9572 12.8959 11.872 12.8886C11.6142 12.8665 11.37 12.7554 10.8816 12.5332L4.95 9.83377Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                                <path
                                                    d="M4.95 14.1115C3.51099 14.7664 2.79149 15.0938 2.55187 15.537C2.3112 15.9822 2.3112 16.5187 2.55187 16.9638C2.79149 17.407 3.51099 17.7345 4.95 18.3893L10.8816 21.0887C11.37 21.311 11.6142 21.4221 11.872 21.4442C11.9572 21.4515 12.0428 21.4515 12.128 21.4442C12.3858 21.4221 12.63 21.311 13.1184 21.0887L19.05 18.3893C20.489 17.7345 21.2085 17.407 21.4481 16.9638C21.6888 16.5187 21.6888 15.9822 21.4481 15.537C21.2085 15.0938 20.489 14.7664 19.05 14.1115L13.1184 16.8109C12.63 17.0332 12.3858 17.1443 12.128 17.1664C12.0428 17.1737 11.9572 17.1737 11.872 17.1664C11.6142 17.1443 11.37 17.0332 10.8816 16.8109L4.95 14.1115Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                                <path
                                                    d="M6 10.2734L10.8827 12.4929C11.3707 12.7146 11.6146 12.8255 11.8722 12.8476C11.9572 12.8548 12.0428 12.8548 12.1278 12.8476C12.3854 12.8255 12.6293 12.7146 13.1173 12.4929L18 10.2734M6 14.2734L10.8827 16.4929C11.3707 16.7146 11.6146 16.8255 11.8722 16.8476C11.9572 16.8548 12.0428 16.8548 12.1278 16.8476C12.3854 16.8255 12.6293 16.7146 13.1173 16.4929L18 14.2734"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </figure>
                                    </div>

                                    <div class="card-body p-0">
                                        <h5 class="mb-3"><a href="/mobile-app-design" class="stretched-link">خدمات
                                                تطبيقات الجوال</a></h5>
                                        <p class="mb-0">إذا كان هدفك هو امتلاك تطبيق لنشاطك التجاري، فبالتأكيد إن تصميم
                                            تطبيقات الجوال معنا في لوجيسيل لاب سيكون هو طريقك لتحقيق غايتك وزيادة مبيعاتك.
                                            نحن نقدم الحلول المبتكرة ورواد في تقديم خدمة تصميم تطبيقات الجوال على المنصات
                                            المختلفة: جوجل بلاي، آبل استور وهواوي بإحترافية ووفق المعايير الحديثة.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card border bg-light p-5">
                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 mb-4">
                                        <!-- Icon -->
                                        <figure class="text-primary">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 18V15M12 13V18M16 18V11M6.5 11.5L7.9646 9.7913C8.91547 8.68195 10.3837 8.16067 11.8212 8.42204V8.42204C13.812 8.78401 15.8538 8.14622 17.2846 6.71542L17.5 6.5"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M13.2 2.25H10.8C7.23775 2.25 5.45663 2.25 4.20802 3.15717C3.80477 3.45015 3.45015 3.80477 3.15717 4.20802C2.25 5.45663 2.25 7.23775 2.25 10.8V13.2C2.25 16.7622 2.25 18.5434 3.15717 19.792C3.45015 20.1952 3.80477 20.5499 4.20802 20.8428C5.45663 21.75 7.23775 21.75 10.8 21.75H13.2C16.7622 21.75 18.5434 21.75 19.792 20.8428C20.1952 20.5499 20.5499 20.1952 20.8428 19.792C21.75 18.5434 21.75 16.7622 21.75 13.2V10.8C21.75 7.23775 21.75 5.45663 20.8428 4.20802C20.5499 3.80477 20.1952 3.45015 19.792 3.15717C18.5434 2.25 16.7622 2.25 13.2 2.25Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                            </svg>
                                        </figure>
                                    </div>

                                    <div class="card-body p-0">
                                        <h5 class="mb-3"><a href="/application-desctop" class="stretched-link">خدمات تطبيقات سطح المكتب
                                        </a></h5>
                                        <p class="mb-0">نقدم خدمات تصميم وتطوير تطبيقات سطح المكتب بمهارة عالية وفقًا لأحدث التقنيات والمعايير العالمية. فريقنا المتخصص يعمل على تلبية احتياجات عملك وتحقيق أهدافه من خلال تطبيقات سطح المكتب المبتكرة والفعالة.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card border bg-light p-5">
                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 mb-4">
                                        <!-- Icon -->
                                        <figure class="text-primary">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 18V15M12 13V18M16 18V11M6.5 11.5L7.9646 9.7913C8.91547 8.68195 10.3837 8.16067 11.8212 8.42204V8.42204C13.812 8.78401 15.8538 8.14622 17.2846 6.71542L17.5 6.5"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M13.2 2.25H10.8C7.23775 2.25 5.45663 2.25 4.20802 3.15717C3.80477 3.45015 3.45015 3.80477 3.15717 4.20802C2.25 5.45663 2.25 7.23775 2.25 10.8V13.2C2.25 16.7622 2.25 18.5434 3.15717 19.792C3.45015 20.1952 3.80477 20.5499 4.20802 20.8428C5.45663 21.75 7.23775 21.75 10.8 21.75H13.2C16.7622 21.75 18.5434 21.75 19.792 20.8428C20.1952 20.5499 20.5499 20.1952 20.8428 19.792C21.75 18.5434 21.75 16.7622 21.75 13.2V10.8C21.75 7.23775 21.75 5.45663 20.8428 4.20802C20.5499 3.80477 20.1952 3.45015 19.792 3.15717C18.5434 2.25 16.7622 2.25 13.2 2.25Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                            </svg>
                                        </figure>
                                    </div>

                                    <div class="card-body p-0">
                                        <h5 class="mb-3"><a href="/design-services" class="stretched-link">خدمات تصميم الجرافيك</a></h5>
                                        <p class="mb-0"> نحن هنا لتحويل أفكارك إلى أعمال فنية مبتكرة وجذابة، مما يعزز تميز علامتك التجارية وجاذبيتها للعملاء باستخدام أحدث الأدوات والتقنيات، نقدم حلولاً مخصصة تلبي احتياجاتك وتساعد في تحقيق أهدافك التسويقية، فريقنا المحترف يضمن تقديم تصاميم مخصصة تعكس هوية علامتك التجارية بأسلوب مبتكر ومميز.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Card item -->
                            <div class="col-md-6">
                                <div class="card border bg-light p-5">
                                    <!-- Card header -->
                                    <div class="card-header bg-light p-0 mb-4">
                                        <!-- Icon -->
                                        <figure class="text-primary">
                                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8 18V15M12 13V18M16 18V11M6.5 11.5L7.9646 9.7913C8.91547 8.68195 10.3837 8.16067 11.8212 8.42204V8.42204C13.812 8.78401 15.8538 8.14622 17.2846 6.71542L17.5 6.5"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path
                                                    d="M13.2 2.25H10.8C7.23775 2.25 5.45663 2.25 4.20802 3.15717C3.80477 3.45015 3.45015 3.80477 3.15717 4.20802C2.25 5.45663 2.25 7.23775 2.25 10.8V13.2C2.25 16.7622 2.25 18.5434 3.15717 19.792C3.45015 20.1952 3.80477 20.5499 4.20802 20.8428C5.45663 21.75 7.23775 21.75 10.8 21.75H13.2C16.7622 21.75 18.5434 21.75 19.792 20.8428C20.1952 20.5499 20.5499 20.1952 20.8428 19.792C21.75 18.5434 21.75 16.7622 21.75 13.2V10.8C21.75 7.23775 21.75 5.45663 20.8428 4.20802C20.5499 3.80477 20.1952 3.45015 19.792 3.15717C18.5434 2.25 16.7622 2.25 13.2 2.25Z"
                                                    fill="currentColor" fill-opacity="0.25"></path>
                                            </svg>
                                        </figure>
                                    </div>

                                    <div class="card-body p-0">
                                        <h5 class="mb-3"><a href="/technical-support" class="stretched-link">خدمات الدعم الفني</a></h5>
                                        <p class="mb-0"> نحن هنا لضمان استمرارية عملك بكفاءة عالية، من خلال تقديم الدعم الفني المتميز والمخصص لتحدياتك التقنية. فريقنا متخصص في حل المشكلات وتوفير الحلول الفعّالة لضمان تجربة مستخدم سلسة ومرضية، نحن نقدم دعماً متعدد القنوات لضمان أنك تحصل على المساعدة على الفور.</p>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- Row END -->
                    </div>

                </div>
            </div>
        </section>
        <!-- =======================
        Services END -->

        <!-- =======================
        Core feature START -->
        <section class="pb-0">
            <div class="container">
                <!-- Title -->
                <div class="inner-container-small text-center mb-4 mb-sm-6">
                    <h2>الميزة الأساسية</h2>
                    <p class="mb-0">تُعتبر هذه الميزات عادةً العناصر الأساسية التي يُبنى عليها تصميم وتطوير المنتج أو
                        الخدمة، وتشمل وظائفها الرئيسية والميزات الفريدة التي تجعلها تبرز بين المنافسين</p>
                </div>

                <!-- Feature START -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-5 g-lg-6">
                    <!-- item -->
                    <div class="col">
                        <div class="card card-body bg-transparent text-center p-0">
                            <span class="h4 text-primary"><i class="bi bi-chat-left-dots"></i></span>
                            <h6 class="mb-2">دعم متعدد اللغات </h6>
                            <p class="mb-0">يتضمن تنفيذ الدعم متعدد اللغات.</p>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col">
                        <div class="card card-body bg-transparent text-center p-0">
                            <span class="h4 text-primary"><i class="bi bi-bell"></i></span>
                            <h6 class="mb-2">واجهة سهلة الاستخدام</h6>
                            <p class="mb-0"> نركز على خلق تصميم بديهي وفعال.</p>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col">
                        <div class="card card-body bg-transparent text-center p-0">
                            <span class="h4 text-primary"><i class="bi bi-headset"></i></span>
                            <h6 class="mb-2">توافر 24/7 </h6>
                            <p class="mb-0">لوجيسيل لاب يضمن للمستخدمين إمكانية الوصول إلى المساعدة المهمة متى احتاجوا
                                إليها.</p>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col">
                        <div class="card card-body bg-transparent text-center p-0">
                            <span class="h4 text-primary"><i class="bi bi-broadcast-pin"></i></span>
                            <h6 class="mb-2">وظائف متقدمة </h6>
                            <p class="mb-0">تم تصميم هذه الوظائف المتقدمة لتزويد المستخدمين.</p>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col">
                        <div class="card card-body bg-transparent text-center p-0">
                            <span class="h4 text-primary"><i class="bi bi-display"></i></span>
                            <h6 class="mb-2">يشمل المضيف والمجال مجانًا</h6>
                            <p class="mb-0">وهذا يعني أنه عندما تقوم بالتسجيل للحصول على خدماتهم، فإنك لن تحصل على
                                الاستضافة فقط.</p>
                        </div>
                    </div>

                    <!-- item -->
                    <div class="col">
                        <div class="card card-body bg-transparent text-center p-0">
                            <span class="h4 text-primary"><i class="bi bi-lightning-charge"></i></span>
                            <h6 class="mb-2">أداء عالي </h6>
                            <p class="mb-0">يتطلب تحقيق الأداء العالي عوامل واعتبارات مختلفة. </p>
                        </div>
                    </div>

                </div>
                <!-- Feature END -->
            </div>
        </section>
        <!-- =======================
        Core feature END -->

        <!-- =======================
        Client START -->
        <section>
            <div class="container">
                <div class="row g-lg-6">
                    <div class="col-xl-10 mx-auto">
                        <div class="row g-4 g-sm-5 g-lg-6 align-items-lg-center">
                            <div class="col-md-6">
                                <!-- Image -->
                                <img src="assets/images/services/4by3/02.jpg" class="rounded" alt="about-img">
                            </div>

                            <div class="col-md-6">
                                <!-- Title -->
                                <h3 class="mb-4">في شركة لوجسيل لاب، نؤمن بقوة التكنلوجيا في تحقيق النجاح</h3>
                                <p class="mb-0"> نطمح لأن نكون الأفضل في مجالنا، ونسعى لتصبح لوجيسيل لاب أحد أكبر مصادر
                                    الحلول الرقمية بالمنطقة، من خلال تقديم خدمات بمواصفات عالمية، حتى نكون عنوانًا للجودة
                                    والإتقان والتميز.
                                </p>

                                <hr class="my-5"> <!-- Divider -->

                                <!-- Clients -->
                                <div class="row row-cols-2 row-cols-sm-3 g-4 g-sm-5 align-items-center">
                                    <!-- Image -->
                                    <div class="col">
                                        <img src="assets/images/client/01.svg" alt="client-img">
                                    </div>
                                    <!-- Image -->
                                    <div class="col">
                                        <img src="assets/images/client/02.svg" alt="client-img">
                                    </div>
                                    <!-- Image -->
                                    <div class="col">
                                        <img src="assets/images/client/03.svg" alt="client-img">
                                    </div>
                                    <!-- Image -->
                                    <div class="col">
                                        <img src="assets/images/client/04.svg" alt="client-img">
                                    </div>
                                    <!-- Image -->
                                    <div class="col">
                                        <img src="assets/images/client/05.svg" alt="client-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- =======================
        Client END -->

    </main>
    <!-- **************** MAIN CONTENT END **************** -->
@endsection
