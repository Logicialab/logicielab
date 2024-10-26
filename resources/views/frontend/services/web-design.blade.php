@extends('layouts.app')

@section('content')

<section class="w-full relative flex flex-col relative mb-4">
    <div class="container px-5 m-auto">
        <div class="min-h-fit pt-14 pb-28 container">
            <div class="flex items-center flex-wrap gap-7">
                <div class="w-full lg:flex-1 order-2 lg:order-1">
                    <div
                        class="text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl 2xl:leading-[5rem] capitalize md:leading-[3.5rem] font-bold max-w-[630px] 2xl:max-w-[670px] max-h-fit text-black">
                        <h1><strong>تصميم مواقع</strong></h1>
                    </div>
                    <p class="max-w-4xl text-[#737195] text-justify 2xl:text-xl mt-7 leading-[5rem] font-semibold">احصل على موقع الكتروني متميز يلبي احتياجاتك وينمّي عملك مع خدمة تصميم مواقع الكترونية من لوجيسيل لاب، فسواء كنت تدير متجرًا إلكترونيًا أو مطعماً أو وكالة أو غير ذلك، سنعمل معك جنباً إلى جنب لتحقيق رؤية علامتك التجارية ونجاحك على الإنترنت، من خلال موقع متجاوب يعمل بسلاسة على جميع الأجهزة وتصميم جذاب يلفت انتباه زوارك                    </p>
                    <div class="flex items-center gap-5 mt-8">


                        <button style="border: 2px solid;" type="button"
                            class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-4">
                            <a href="https://wa.me/+971508224633">تواصل معانا</a>
                            <i class="fa-solid fa-arrow-left mr-1"></i></button>
                    </div>
                </div>

                <div class="w-full lg:w-[400px] lg:h-[400px] order-1 lg:order-2"><img
                        src="../images/webdev.jpg"
                        alt="<h1><strong>Web development</strong></h1>"
                        class="mx-auto aspect-auto w-[350px] h-[350px] lg:w-[500px] lg:h-[500px] object-cover rounded-2xl"
                        width="450" height="450"></div>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl font-bold text-text text-center mb-2">الخدمات التي تقدمها لوجيسيل لاب لتصميم مواقع الكترونية        </h2>
        <p class="text-base text-[#737195] mx-auto max-w-[700px] text-center">صمم موقعك الإلكتروني مع شركة لوجيسيل لاب واستمتع بتجربة استثنائية مناسبة تماماً لاحتياجاتك، حيث نوفر لك العديد من المميزات:        </p>

        <div class="grid lg:grid-cols-3  sm:grid-cols-1 gap-2 mt-7 grid_area_template items-start">
            <div class="rounded-2xl img_wrapper w-full m-auto h-fit">
                <img src="../images/website.jpg"
                    width="350" height="450" alt="أهمية تصميم المواقع" class="relative object-contain w-full rounded-2xl"></div>
            <div class="rounded-lg pb-5 shadow h-fit p-5 space-y-3 border border-solid border-[#F5F5FC]">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>01</span>
                </div>
                <h3 class="font-bold text-black text-2xl line-clamp-1">استخدام لغات برمجية حديثة                </h3>
                <p class="text-[#737195] line-clamp-3 leading-8 font-semibold">نحن نستخدم أحدث اللغات البرمجية المتطورة التي تسمح لك بسهولة إجراء التعديلات على موقعك بمرونة وسرعة.                </p>
            </div>
            <div class="rounded-lg pb-5 shadow h-fit p-5 space-y-3 border border-solid border-[#F5F5FC]">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>02</span>
                </div>
                <h3 class="font-bold text-black text-2xl line-clamp-1">محتوى متفرد وجذاب</h3>
                <p class="text-[#737195] line-clamp-3 leading-8 font-semibold">نقدم لك محتوى متميز يجذب انتباه القارئ ويحفزه على الاستمرار في التصفح على موقعك، ويعكس رؤيتك.                </p>
            </div>
            <div class="rounded-lg pb-5 shadow h-fit p-5 space-y-3 border border-solid border-[#F5F5FC] mt-5">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>03</span>
                </div>
                <h3 class="font-bold text-black text-2xl line-clamp-1">موقع يلائم علامتك التجارية </h3>
                <p class="text-[#737195] line-clamp-3 leading-8 font-semibold">سنقوم بتصميم موقع الكتروني يتناسب مع علامتك التجارية ويعكس رغبات واحتياجات عملائك.</p>
            </div>
            <div class="rounded-lg pb-5 shadow h-fit p-5 space-y-3 border border-solid border-[#F5F5FC] mt-5">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>04</span>
                </div>
                <h3 class="font-bold text-black text-2xl line-clamp-1">استضافة موثوقة</h3>
                <p class="text-[#737195] line-clamp-3 leading-8 font-semibold">نقدم لك خدمة استضافة مناسبة ومتناسبة مع خطة أسعارك ومتطلباتك، وتضمن أداءً سلسًا ومستقرًا لموقعك.</p>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10">
    <div class="container px-5 m-auto grid grid-cols-1 lg:grid-cols-2 gap-5 items-center">
        <div class="order-2 xl:order-1 space-y-5">
            <h2 class="text-3xl font-bold text-[52px] leading-[63px] max-w-xl mb-2">لماذا تختار لوجيسيل لاب لتصميم موقع الكتروني؟            </h2>
            <div class="text-[#737195] ml-3 mt-8">
                <h4 class="flex items-center gap-2 font-bold text-lg text-black"><span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">01</span>
                        فريق عمل محترف</h4>
                <p class="max-w-[700px] font-semibold leading-8">تضم لوجيسيل لاب بإعتبارها افضل شركة تصميم مواقع فريق مميز من الكوادر ذات الخبرات الكبيرة في تصميم المواقع الالكترونية، حيث سنمكنك من إنشاء موقع إلكتروني بتصميم فريد وألوان عصرية مميَّزة لهوية نشاطك التجاري.                </p>
            </div>
            <div class="text-[#737195] ml-3 mt-8">
                <h4 class="flex items-center gap-2 font-bold text-lg text-black"><span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">02</span>
                        تصميم موقع الكتروني لشركتك
                </h4>
                <p class="max-w-[700px] font-semibold leading-8">من خلال خدمة تصميم مواقع الكترونية في لوجيسيل لاب ستتمكن من الحصول على متجر إلكتروني احترافي لعرض كافة منتجاتك وأسعارك وتفاصيل الطلب والشحن والتسليم لعملائك.                </p>
            </div>
            <div class="text-[#737195] ml-3 mt-8">
                <h4 class="flex items-center gap-2 font-bold text-lg text-black"><span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">03</span>تصميم مواقع الكترونية ديناميكية

                </h4>
                <p class="max-w-[700px] font-semibold leading-8">تعتمد شركة لوجيسيل لاب أحدث تقنيات البرمجة في تصميم مواقع الويب، لنمكن عملائنا من إنشاء موقع إلكتروني سريع وسهل الاستخدام والتعديل ومهيأ تماما لمحركات البحث.                </p>
            </div>
            <div class="text-[#737195] ml-3 mt-8">
                <h4 class="flex items-center gap-2 font-bold text-lg text-black"><span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">04</span>
                        إنشاء موقع إلكتروني مرتبط بالسوشيال ميديا
                </h4>
                <p class="max-w-[700px] font-semibold leading-8">نساعدك على إنشاء موقع إلكتروني مرتبط مع حسابات التواصل الاجتماعي الخاصة بنشاطك التجاري، وإظهار أيقونات تلك الحسابات في تصميم الموقع.                </p>
            </div>
            <div class="text-[#737195] ml-3 mt-8">
                <h4 class="flex items-center gap-2 font-bold text-lg text-black"><span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">05</span>تحسين الثقة والمصداقية
                </h4>
                <p class="max-w-[700px] font-semibold leading-8">من خلال خدمة تصميم المواقع من لوجيسيل لاب ستتمكن من رفع الثقة والمصداقية لدى عملاءك عن طريق توفير معلومات دقيقة ومحدَّثة حول المنتجات والخدمات على الموقع الإلكتروني، وذلك من خلال عرض التقييمات والتعليقات من العملاء الآخرين وعرض شهادات الجودة والشهادات المهنية والشراكات والعلاقات العامة الأخرى التي تساعد في بناء الثقة بين الشركة والعملاء.
                </p>
            </div>

            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">
                الحصول على الخدمة<i class="fa-solid fa-chevron-left text-xs mr-1"></i></button>
        </div>
        <div class="order-1 xl:order-2">
            <img src="../images/programming.jpg"
                width="650" height="650" alt="Web Design" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 350px, (max-width: 1024px) 400px, 550px" class="object-contain rounded-2xl">
        </div>

    </div>
</section>



<section class="w-full bg-[#fbfdfe] relative p-8 flex flex-col relative mb-10">
    <div class="container px-6 m-auto">
        <h2 class="text-[#141324] text-5xl font-bold mb-4" data-aos="fade-up">لغات البرمجة        </h2>
        <p class="text-base text-[#737195] mb-8" data-aos="fade-up">لغات البرمجة المستخدمة في تصميم مواقع الويب </p>
        <div class="owl-carousel owl-carousel-client">
            <div class="item">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <span class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">01</span>
                        <h2 class="font-bold text-start text-black text-lg line-clamp-1">لغة HTML في تصميم مواقع الويب
                        </h2>
                        <p class="text-black font-bold text-sm py-3 min-h-[180px] max-h-[180px] overflow-y-auto leading-6">
                            وهي لغة ترميز تتكون بشكل أساسي من الأوامر والوسوم التي يستخدمها مصمموا الويب في تصميم المواقع. لغة الترميز عبارة عن الوسوم وهي نص عادي مزود بعلامات مخصصة لتحديد أقسام الصفحة، والنص التشعبي هو عبارة عن النص المزود بالروابط التي يمكن للمستخدمين النقر عليها</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <span class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">02</span>
                        <h2 class="font-bold text-start text-black text-lg line-clamp-1">لغة CSS</h2>
                        <p class="text-black font-bold text-sm py-3 min-h-[180px] max-h-[180px] overflow-y-auto leading-6">
                            وهي لغة توصيفية تساهم بشكل رئيسي في تمييز الموقع بشكله وتصميمه الفريد، غالبًا ما يتم استخدام هذه اللغة مع الـ HTML عند تصميم مواقع الويب. وهنا، تعتبر الـ HTML هي أساس كافة عناصر صفحات الويب، أما الـ CSS فهي أساس شكل وتصميم الموقع، حيث أنه من دونها سيكون ا
                        </p>
                    </div>

                </div>
            </div>


            <div class="item">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <span class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">03</span>
                        <h2 class="font-bold text-start text-black text-lg line-clamp-1">تصميم مواقع الويب باستخدام لغة Javascript</h2>
                        <p class="text-black font-bold text-sm py-3 min-h-[180px] max-h-[180px] overflow-y-auto leading-6">
                            تعد واحدة من أكثر لغات البرمجة استخدامًا في السوق وتستخدم في برمجة مواقع الويب وتطبيقاته وإضافة تأثيرات خاصة على الصفحات وتتميز بالعديد من المميزات والاستخدامات، ولكن يعيبها أنها معقدة بعض الشيء وتحتاج إلى أن تكون محترف في العمليات البرمجية.
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <span class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">04</span>
                        <h2 class="font-bold text-start text-black text-lg line-clamp-1">مكتبة JQuery</h2>
                        <p class="text-black font-bold text-sm py-3 min-h-[180px] max-h-[180px] overflow-y-auto leading-6">
                            هي عبارة عن مكتبة تحتوي على مجموعة من التوابع السريعة والصغيرة وتقوم مهمتها الأساسية حول جعل استخدام الـ JavaScript أسهل وأكثر مرونة، بحيث أنها تعمل على اختصار العمليات التي تحتاج إلى عدد كبير من السطور البرمجية إلى مجموعة من التوابع التي تُستدعى بسطر برم
                        </p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <span class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">05</span>
                        <h2 class="font-bold text-start text-black text-lg line-clamp-1">إطار عمل Bootstrap في تصميم مواقع الويب</h2>
                        <p class="text-black font-bold text-sm py-3 min-h-[180px] max-h-[180px] overflow-y-auto leading-6">
                            يقوم إطار عمل Bootstrap بتسهيل عملية تصميم صفحات الويب، حيث أنه يوفر كلاسات CSS جاهزة تستخدم لإظهار العناصر أو الـ Components. وبهذا نضمن أن التصميمات التي تعتمد على Bootstrap في بنائها أنها ستظهر بشكل جميل على الأجهزة المختلفة سواء، جوال أو حاسوب أو جهاز
                        </p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <span class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">06</span>
                        <h2 class="font-bold text-start text-black text-lg line-clamp-1">إطار عمل ReactJs</h2>
                        <p class="text-black font-bold text-sm py-3 min-h-[180px] max-h-[180px] overflow-y-auto leading-6">
                            يتخصص إطار عمل React Js في تطوير واجهات المواقع ويعمل بشكل أساسي على تكوين واجهات من صفحة واحدة. تقوم React Js في الخلفية بتغيير العناصر المطلوبة بدون إعادة تحميل الصفحة، وهذا بدوره يوفر أداء سريع لصفحات الويب.
                        </p>
                    </div>

                </div>
            </div>
            <div class="item">
                <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div>
                        <span class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">07</span>
                        <h2 class="font-bold text-start text-black text-lg line-clamp-1">إطار عمل Angular</h2>
                        <p class="text-black font-bold text-sm py-3 min-h-[180px] max-h-[180px] overflow-y-auto leading-6">
                            يُبنى إطار عمل Angular على لغة TypeScript ويعتمد في عمله على المكونات لبناء التطبيقات التي تتميز بأنها قابلة للتوسعة. يقدم لك هذا الإطار العديد من المميزات ومنها التوجيه، الاتصال بين الخادم والعميل، إدارة النماذج وغير ذلك.
                        </p>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>

@endsection
