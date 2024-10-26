@extends('layouts.app')

@section('content')
<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div
            class="text-3xl md:text-4xl xl:text-5xl capitalize font-montserrat text-center md:leading-[3.3rem] font-bold max-w-[630px] xl:max-w-[800px] max-h-fit mx-auto text-black xl:leading-[4rem]">
            <h1>ادارة السيرفرات</h1>
        </div>
        <p class="max-w-[900px] mx-auto text-[#737195] text-center text-lg mt-5 leading-9 font-semibold">هل تبحث عن الحل الذكي والاحترافي لتطويرتطبيقات الهاتف ومواقع الويب بسرعة وسهولة؟ هل ترغب في تحقيق التوازن المثالى بين التطوير والعمليات؟ إذاً خدمة ادارة السيرفرات من لوجيسيل لاب هي ما تحتاج. نحن نجمع بين تطوير البرمجيات وعمليات الإنتاج في عملية واحدة متكاملة. هدفنا هو توفير الكفاءة والسرعة والأمان في كل خطوة من عملية تطويرك.        </p>

        <div class="flex items-center gap-5 justify-center">
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-[#28398c] hover:bg-white p-2.5 px-8 mt-8"> تواصل معانا </button>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-16 mt-10">
    <div class="container px-5 m-auto">
        <h2 class="text-[30px] mb-2 font-bold text-text text-center mx-auto max-w-[700px]">المزايا الرائعة التي ستحصل عليها مع خدمة ادارة السيرفرات من لوجيسيل لاب        </h2>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 mt-7 grid_area_template items-center">
            <div class="rounded-2xl img_wrapper w-full h-full"><img
                    src="../images/managment.jpg"
                    width="400" height="400" alt="DevOps Solution" data-nuxt-img="" formate="webp"
                    class="relative object-contain h-full rounded-2xl mx-auto"></div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">01</span><span
                        class="line-clamp-1 flex-1">استجابة أفضل </span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">نساعدك في تحسين استجابتك للمستخدمين، مما يزيد من رضاهم ووفاءهم</p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">02</span><span
                        class="line-clamp-1 flex-1">تحسين الجودة </span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">نتبنى أفضل ممارسات الاختبار وضمان الجودة لضمان توفير تطبيقات خالية من الأخطاء.</p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">03</span><span
                        class="line-clamp-1 flex-1">الأمان المتقدم</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">نحرص على حماية بياناتك وتطبيقاتك من التهديدات السيبرانية وضمان تشفير البيانات.</p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">04</span><span
                        class="line-clamp-1 flex-1">دعم مستدام </span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">نحن هنا لمساعدتك على مدار الساعة للتعامل مع أي مشكلة أو استفسار.</p>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center m-auto">
        <div class="rounded-[3rem]"><img
                src="../images/managment1.jpg"
                width="595" height="521" alt="Why Choose DevOps Solution" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto !object-contain rounded-[3rem]"></div>
        <div class="space-y-5">
            <h2 class="text-2xl lg:leading-[2.4rem] text-text font-bold leading-[2.5rem] capitalize">
                <h1 class="lg:text-[26px]">لماذا تختار خدمة ادارة السيرفرات؟</h1>
            </h2>
            <div class="text-text-light max-w-[600px]">
                <ul>
                    <li class="text-lg"><span style="background-color: transparent;color: #737195;">تسريع التطوير: تمكنك ادارة السيرفرات من تقليل وقت التطوير والنشر بشكل كبير. إنها تجمع بين العمليات والتطوير لتوفير سرعة استجابة فائقة.</span></li>
                    <li class="text-lg"><span style="background-color: transparent;color: #737195;">زيادة الاستقرار: باستخدام أساليب DevOps، يمكن تحقيق استقرار أكبر في تطبيقاتك مع تقليل أعطال الإنتاج والمشاكل.</span></li>
                    <li class="text-lg"><span style="background-color: transparent;color: #737195;">أمان متقدم: توفر ادارة السيرفرات مستوى عاليًا من الأمان من خلال توظيف أفضل ممارسات الأمان والحماية لحماية التطبيقات والبيانات.</span></li>
                    <li class="text-lg"><span style="background-color: transparent;color: #737195;">تكامل شامل: تمكنك من دمج العديد من الأدوات والتقنيات المتعددة بسهولة، بما في ذلك التطبيقات وقواعد البيانات وأنظمة الإدارة.</span></li>
                    <li class="text-lg"><span style="background-color: transparent;color: #737195;">إدارة الأمور بذكاء: تسهل عليك ادارة السيرفرات إدارة البيئات والتنقل بينها ومتابعة السجلات والأداء بكفاءة عالية.</span></li>
                </ul>
            </div>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">الحصول على الخدمة</button>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container grid gap-8 p-7 pb-20 grid-cols-1 lg:grid-cols-2 items-center m-auto">
        <div class="rounded-[3rem] order-2"><img
                src="../images/managment2.jpg"
                width="595" height="521" alt="How DevOps Solution Work" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto !object-contain rounded-[3rem]"></div>
        <div class="space-y-5 order-1">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h1 class="lg:text-[30px]">كيف تعمل خدمة ادارة السيرفرات؟                </h1>
            </h2>
            <div class="text-text-light max-w-[600px]">
                <ol>
                    <li class="text-[#737195] text-xl mb-2"><strong style="background-color: transparent;">التخطيط:</strong>
                        <span style="background-color: transparent;">تبدأ عملية ادارة السيرفرات بتحليل متطلبات المشروع ووضع استراتيجية تطوير مفصلة.</span></li>
                    <li class="text-[#737195] text-xl mb-2"><strong style="background-color: transparent;">التطوير:</strong>
                        <span style="background-color: transparent;">يتم تطوير التطبيقات والبرمجيات بواسطة فرق البرمجة باستخدام أدوات تطوير متقدمة</span></li>
                    <li class="text-[#737195] text-xl mb-2"><strong style="background-color: transparent;">الاختبار:</strong>
                        <span style="background-color: transparent;"> يتم اختبار التطبيقات بدقة لضمان الجودة والأمان.</span></li>
                    <li class="text-[#737195] text-xl mb-2"><strong style="background-color: transparent;">النشر:</strong>
                        <span style="background-color: transparent;">يتم نشر التطبيقات بشكل آمن وسريع على البيئات الإنتاجية</span></li>
                    <li class="text-[#737195] text-xl mb-2"><strong style="background-color: transparent;">المراقبة:</strong>
                        <span style="background-color: transparent;">تتم مراقبة أداء التطبيقات واكتشاف الأخطاء والمشاكل بشكل فوري.                        </span></li>
                </ol>
                <p><br></p>
            </div>
            <button style="border: 2px solid;" type="button"
            class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-14">
    <div class="container px-5 m-auto">
        <div class="flex flex-col items-center justify-center text-center border rounded-[40px] px-4 py-11 lg:py-20 font-montserrat bg-gradient-to-r from-[#0037a9] via-[#a470ed] via-70% to-[#0037a9]">
            <h2 class="lg:text-4xl text-3xl font-bold mb-5 capitalize max-w-[700px] leading-[3rem] lg:leading-[3.7rem] text-white">
                ابدأ إستشاره مجانية مع خبير من لوجيسيل لاب الآن!</h2>
            <button style="border: 2px solid;" type="button" class="base-btn text-xl rounded-lg text-white hover:text-white bg-transparent hover:bg-[#28398c] p-2.5 px-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>



@endsection
