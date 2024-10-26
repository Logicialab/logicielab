@extends('layouts.app')

@section('content')

<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div class="flex items-center flex-wrap gap-7">
            <div class="w-full lg:flex-1 order-2 lg:order-1">
                <div
                    class="text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl 2xl:leading-[5rem] capitalize md:leading-[3.5rem] font-bold max-w-[630px] 2xl:max-w-[670px] max-h-fit text-[#28398c]">
                    <h1><strong>الخادم الخاص</strong></h1>
                </div>
                <p class="text-[#737195] 2xl:text-xl mt-7 leading-9 font-semibold">احصل على القوة والأمان مع خدمة الخادم المخصص من لوجيسيل لاب! إذا كنت تبحث عن أفضل حلاً لاستضافة موقعك على الويب أو تطبيقك الإلكتروني، فإن خدمة الخادم المخصص من لوجيسيل لاب هي خيارك الأمثل.                </p>
                <div class="flex items-center gap-5 mt-8">
                    <button style="border: 2px solid;" type="button"
                        class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8"> تواصل معانا </button>
                </div>
            </div>
            <div class="w-full lg:w-[500px] lg:h-[400px] order-1 lg:order-2"><img
                    src="../images/dedicated-server.jpg"
                    alt="<h1><strong>web hosting</strong></h1>"
                    class="mx-auto aspect-auto w-[350px] h-[350px] lg:w-[400px] lg:h-[400px] object-cover rounded-full"
                    width="450" height="450"></div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl lg:text-4xl lg:leading-[3.2rem] font-bold text-text mb-3 mb-8">مميزات خدمة الخادم الخاص المقدمة من لوجيسيل لاب</h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-3">
            <div class="rounded-lg pb-5 shadow-lg p-5 space-y-3 border border-solid border-[#F5F5FC] h-full">
                <div
                    class="font-bold w-11 h-11 flex justify-center items-center overflow-hidden border border-solid rounded-full">
                    <span>01</span>
                </div>
                <h2 class="font-bold text-start text-black text-xl line-clamp-1">أداء متفوق</h2>
                <p class="text-text-light text-start">نوفر لك معالجات قوية وذواكر كبيرة لضمان أداء لا مثيل له. ستتمكن من تشغيل تطبيقاتك ومواقعك بسرعة فائقة دون تأخير.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg p-5 space-y-3 border border-solid border-[#F5F5FC] h-full">
                <div
                    class="font-bold w-11 h-11 flex justify-center items-center overflow-hidden border border-solid rounded-full">
                    <span>02</span>
                </div>
                <h2 class="font-bold text-start text-black text-xl line-clamp-1">تخزين آمن</h2>
                <p class="text-text-light text-start">نحن نضمن أمان بياناتك وملفاتك من خلال أنظمة تخزين متقدمة. يمكنك الاعتماد على تخزين آمن واسترداد بياناتك بسهولة.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg p-5 space-y-3 border border-solid border-[#F5F5FC] h-full">
                <div
                    class="font-bold w-11 h-11 flex justify-center items-center overflow-hidden border border-solid rounded-full">
                    <span>03</span>
                </div>
                <h2 class="font-bold text-start text-black text-xl line-clamp-1">تخصيص كامل</h2>
                <p class="text-text-light text-start">يمكنك تكوين الخادم بالطريقة التي تناسب احتياجاتك بالضبط. ستحصل على حرية كاملة لاختيار نظام التشغيل والتطبيقات والموارد المطلوبة.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg p-5 space-y-3 border border-solid border-[#F5F5FC] h-full">
                <div
                    class="font-bold w-11 h-11 flex justify-center items-center overflow-hidden border border-solid rounded-full">
                    <span>04</span>
                </div>
                <h2 class="font-bold text-start text-black text-xl line-clamp-1">دعم فني على مدار الساعة</h2>
                <p class="text-text-light text-start">نحن هنا لمساعدتك في أي وقت تحتاج فيه. يمكنك الاعتماد على فريق دعم فني متخصص ومتاح على مدار الساعة لحل أي مشكلة أو استفسار.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg p-5 space-y-3 border border-solid border-[#F5F5FC] h-full">
                <div
                    class="font-bold w-11 h-11 flex justify-center items-center overflow-hidden border border-solid rounded-full">
                    <span>05</span>
                </div>
                <h2 class="font-bold text-start text-black text-xl line-clamp-1">استقرار واستدامة</h2>
                <p class="text-text-light text-start">بفضل موارد الخادم المخصص، ستحصل على استقرار أعلى وقدرة على تلبية احتياجات مشروعك بمرور الوقت دون قلق بشأن التوسع.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg p-5 space-y-3 border border-solid border-[#F5F5FC] h-full">
                <div
                    class="font-bold w-11 h-11 flex justify-center items-center overflow-hidden border border-solid rounded-full">
                    <span>06</span>
                </div>
                <h2 class="font-bold text-start text-black text-xl line-clamp-1">إدارة متقدمة</h2>
                <p class="text-text-light text-start">نوفر أدوات إدارة متقدمة تسهل عليك مراقبة وإدارة الخادم بكفاءة.</p>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center px-5 m-auto">
        <div class="rounded-[3rem] lg:order-2"><img
                src="../images/dedicated-server1.jpg"
                width="595" height="521" alt="What is a Dedicated Server" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto object-contain !rounded-[3rem]"></div>
        <div class="lg:order-1 space-y-5">
            <h2 class="text-2xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2 class="lg:text-4xl"><strong style="color: rgb(0, 0, 0);">ما هو الخادم الخاص؟</strong></h2>
            </h2>
            <div class="text-text-light max-w-[800px]">
                <p class="text-lg font-semibold"><span style="background-color: transparent; color: rgb(14, 16, 26);">الخادم المخصص هو نوع من خدمات الاستضافة على الإنترنت حيث يتم تخصيص الخادم بالكامل لمشروع معين أو عميل معين. يعني ذلك أن جميع الموارد على الخادم، مثل المعالجات والذاكرة ومساحة التخزين وعرض النطاق، مخصصة تمامًا للاستخدام الحصري لهذا المشروع أو العميل.</span></p>
                <p class="text-lg font-semibold"><span style="background-color: transparent; color: rgb(14, 16, 26);">يتيح الخادم المخصص للمستخدمين السيطرة الكاملة على بيئة الخادم، بما في ذلك تكوين الأجهزة والبرامج ونظام التشغيل وتطبيقات الأمان. هذا يجعله مثاليًا للمشاريع التي تتطلب موارد محددة بشكل دقيق ومستوى عالي من الأمان والتخصيص.</span></p>
                <p class="text-lg font-semibold"><span style="background-color: transparent; color: rgb(14, 16, 26);">الخوادم المخصصة تُستخدم عادة لاستضافة مواقع الويب الكبيرة والتطبيقات عبر الإنترنت والأعمال والمؤسسات الكبيرة التي تحتاج إلى أداء ممتاز وأمان على الإنترنت. تعتبر هذه الخدمة خيارًا قويًا لأولئك الذين يبحثون عن حلاً مخصصًا يلبي احتياجاتهم الفريدة على الويب.</span></p>
                <p><br></p>
            </div>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div class="flex flex-col items-center justify-center text-center border rounded-[40px] py-20 font-montserrat !bg-no-repeat !bg-cover"
            style="background: url('../images/gradient.jpg');">
            <h2 class="lg:text-4xl text-3xl font-bold mb-5 capitalize max-w-[700px] leading-[3rem] lg:leading-[3.7rem] text-white">
                ابدأ إستشاره مجانية مع خبير من لوجيسيل لاب الآن!</h2>
                <button style="border: 2px solid;" type="button" class="base-btn text-xl rounded-lg text-white hover:text-black bg-transparent hover:bg-white p-2.5 px-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>


@endsection
