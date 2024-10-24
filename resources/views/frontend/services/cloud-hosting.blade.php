@extends('layouts.app')

@section('content')


<section class="w-full relative flex flex-col relative mb-10">
    <div class="container px-5 m-auto">
        <div
            class="text-3xl md:text-4xl xl:text-5xl capitalize font-montserrat text-center md:leading-[3.3rem] font-bold max-w-[630px] xl:max-w-[800px] max-h-fit mx-auto text-black xl:leading-[4rem]">
            <h1><strong>الاستضافة السحابية</strong></h1>
        </div>
        <p class="max-w-[800px] text-xl mx-auto text-[#737195] text-center mt-5">اختر افضل استضافة سحابية لموقعك مع
            لوجيسيل لاب لتجربة فريدة ومتطورة تلبي احتياجاتك الشخصية والتجارية. نحن نقدم لك أفضل تجربة استضافة سحابية مع
            خدمات متميزة تمنحك الأمان والأداء الذي تحتاجه. </p>
        <div class="flex items-center gap-5 justify-center">
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-[#28398c] hover:bg-white p-2.5 px-8 mt-12">
                تواصل معانا </button>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl mb-2 font-bold text-text text-center mx-auto max-w-[700px]">مزايا الاستضافة السحابية من
            لوجيسيل لاب </h2>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 mt-7 grid_area_template items-center">
            <div class="rounded-2xl img_wrapper w-full h-full"><img src="../images/cloud.jpg" width="480" height="500"
                    alt="Advantages of cloud hosting" class="relative object-contain h-full rounded-2xl mx-auto"></div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">01</span><span
                        class="line-clamp-1 flex-1">أمان عالي</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">نحن نفهم أهمية أمان بياناتك. من خلال تشفير قوي وإجراءات
                    أمان متقدمة، نضمن سلامة بياناتك. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">02</span><span
                        class="line-clamp-1 flex-1">أداء استثنائي</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">تقدم خوادمنا على السحابة أداءً فائقًا بفضل الامتيازات
                    التي نقدمها. سوف تستمتع بسرعات عالية وزمن استجابة قصير. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">03</span><span
                        class="line-clamp-1 flex-1">مرنة وقابلة للتوسع</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">تتيح لك استضافتنا السحابية توسيع مواردك وتقليلها بسهولة
                    وفقًا لاحتياجات مشروعك. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">04</span><span
                        class="line-clamp-1 flex-1">دعم متميز </span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">فريق دعم لوجيسيل لاب دائمًا متاح لمساعدتك في حل أي
                    مشكلة أو استفسار. نحن هنا لضمان رضاك. </p>
            </div>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-4">
    <div class="container px-5 m-auto grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center">
        <div class="rounded-[3rem]">
            <img src="../images/cloud1.jpg" width="595" height="521" alt="What is Cloud Hosting?" loading="lazy"
                data-nuxt-img="" sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto !object-contain rounded-[3rem]">
        </div>
        <div class="space-y-5">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2><strong class="text-3xl" style="background-color: transparent; color: rgb(14, 16, 26);">ما هي
                        الاستضافة السحابية Cloud Hosting ؟ </strong></h2>
                <p><br></p>
            </h2>
            <div class="text-text-light max-w-[600px]">
                <p class="text-3xl leading-8 text-justify">
                    <span class="text-lg" style="background-color: transparent; color: rgb(14, 16, 26);">استضافة سحابية
                        (Cloud Hosting) هي خدمة استضافة عبر الإنترنت تستفيد من البنية التحتية للحوسبة السحابية. تعتمد
                        هذه الخدمة على شبكة من الخوادم والموارد المخصصة المنتشرة في مراكز البيانات الضخمة على مستوى
                        عالمي، حيث يتم تجميع وتوزيع الموارد بشكل ذكي لضمان الأمان والأداء العالي. بشكل عام، استضافة
                        السحابة تعتبر حلاً مثلى للمواقع والتطبيقات عبر الإنترنت، سواء كنت تدير موقعًا شخصيًا أو مؤسستك
                        التجارية، وهي توفر مزيدًا من المرونة والكفاءة في إدارة الخوادم والموارد. </span>
                </p>
                <p><br></p>
            </div>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">الحصول
                على الخدمة</button>
        </div>
    </div>
</section>





<section class="w-full relative flex flex-col relative mb-4">
    <div class="container px-5 m-auto grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center">
        <div class="rounded-[3rem] lg:order-2"><img src="../images/cloud2.jpg" width="695" height="521"
                alt="Features of Cloud Hosting" loading="lazy" data-nuxt-img="" sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto object-contain rounded-2xl !rounded-[3rem]">
        </div>
        <div class="lg:order-1 space-y-5">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2>
                    <strong style="color: rgb(0, 0, 0);font-size: 30px;">مميزات خدمة الاستضافة السحابية المقدمة من
                        لوجيسيل لاب </strong>
                </h2>
            </h2>
            <div class="text-text-light max-w-[700px]">
                <p><span style="background-color: transparent; font-size: 18px; color: rgb(14, 16, 26);">اكتشف عالم
                        الاستضافة السحابية، حيث الامكانيات تتجاوز التوقعات! مع العديد من المزايا الرائعة التي تميزها عن
                        الاستضافة المشتركة العادية، ستنعم بأفضل تجربة استضافة لموقعك الإلكتروني. دعنا نلقي نظرة على هذه
                        المميزات: </span></p>
                <p><br></p>
                <p>ضمان بقاء موقعك على الإنترنت: في الاستضافة السحابية، يكون موقعك متاحًا على أكثر من سيرفر، مما يضمن استمرارية عمله. حتى إذا تعطل أحد السيرفرات، فإن موقعك سيظل نشطًا، وذلك بفضل وجود نسخ منه على سيرفرات أخرى.
                </p>
                <p>أمان متزايد: بفضل توزيع الموارد والنسخ المتعددة، ستشعر بأمان أكبر لموقعك. في حالة حدوث أي مشكلة، يمكن الانتقال بسهولة إلى النسخ البديلة، مما يزيد من أمان بياناتك.
                </p>
                <p>مرونة التحديث والتوسع: مع الاستضافة السحابية، يمكنك زيادة الموارد بسهولة وفقًا لاحتياجات موقعك. سواء كنت بحاجة إلى المزيد من الرام أو المعالجة، يمكنك ترقية مواردك بسرعة ويسر.
                </p>
                <p>سرعة استثنائية: يتيح لك نموذج الاستضافة السحابية القليل من المواقع على السيرفر، وبالتالي تجنب التكدس. هذا يؤدي إلى زيادة سرعة موقعك بشكل ملحوظ وتقديم تجربة متميزة للمستخدمين.
                </p>
                <button style="border: 2px solid;" type="button"
                    class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">الحصول على الخدمة</button>
            </div>
        </div>
</section>


<section class="w-full relative flex flex-col relative mb-16">
    <div class="container px-5 m-auto">
        <div
            class="flex flex-col items-center justify-center text-center border rounded-[40px] px-4 py-11 lg:py-20 font-montserrat bg-gradient-to-r from-[#0037a9] via-[#a470ed] via-70% to-[#0037a9]">
            <h2 class="lg:text-[45px] text-3xl font-bold mb-5 capitalize max-w-[700px] leading-[3rem] lg:leading-[3.7rem] text-white">
                ابدأ إستشاره مجانية مع خبير من لوجيسيل لاب الآن!</h2>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#FFFFFF] hover:text-[#28398c] bg-transparent hover:bg-white p-2.5 px-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>

@endsection
