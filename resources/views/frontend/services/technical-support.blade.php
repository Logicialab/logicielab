@extends('layouts.app')

@section('content')
<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div
            class="text-3xl md:text-4xl xl:text-5xl font-montserrat text-center md:leading-[3.3rem] font-bold max-w-[630px] xl:max-w-[800px] max-h-fit mx-auto text-[#28398c] xl:leading-[4rem]">
            <h1>الدعم الفني</h1>
        </div>
        <p class="max-w-[880px] mx-auto text-[#737195] text-center text-lg mt-5 font-semibold">اكتشف الدعم الفني المميز! نحن هنا لمساعدتك في حل جميع مشاكلك التقنية بكفاءة واحترافية. فريق الدعم الفني لدينا في لوجيسيل لاب مستعد دائمًا للإجابة على استفساراتك، حل المشاكل، وتوجيهك خطوة بخطوة إلى الحل. نحن نقدم دعماً متعدد القنوات لضمان أنك تحصل على المساعدة على الفور.        </p>

        <div class="flex items-center gap-5 justify-center">
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-[#28398c] hover:bg-white p-2.5 px-8 mt-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>

<section class="w-full relative flex flex-col relative mb-16 mt-10">
    <div class="container px-5 m-auto">
        <div class="min-h-[300px] rounded-2xl"><img
                src="../images/support.jpg"
                alt="<h1><strong style=&quot;background-color: transparent; color: rgb(0, 0, 0);&quot;>Technical Support</strong></h1>"
                class="mx-auto"></div>
    </div>
</section>

<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl font-bold text-text text-center mb-2">مميزات خدمات الدعم الفني في لوجيسيل لاب</h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 mt-7 grid_area_template items-start">
            <div class="rounded-2xl img_wrapper w-full h-fit"><img
                    src="../images/support1.jpg"
                    width="350" height="450" alt="Technical Support" data-nuxt-img=""
                    formate="webp" class="relative object-contain w-full rounded-2xl"></div>
            <div class="rounded-lg pb-5 shadow-lg h-fit p-5 space-y-3 border border-solid border-[#F5F5FC]">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>01</span>
                </div>
                <h3 class="font-bold text-black text-lg line-clamp-1">فريق متخصص وممتاز</h3>
                <p class="line-clamp-3 leading-9 font-semibold">نفتخر بوجود فريق من الخبراء المتخصصين في تقديم أفضل خدمات الدعم الفني. سواء كنت عميلًا أو صاحب مشروع، فإن فريقنا مستعد دائمًا لحل أي مشكلة تواجهك.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg h-fit p-5 space-y-3 border border-solid border-[#F5F5FC]">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>02</span>
                </div>
                <h3 class="font-bold text-black text-lg line-clamp-1">سرعة الاستجابة والجودة</h3>
                <p class="line-clamp-3 leading-9 font-semibold">يتميز فريق الدعم لدينا بسرعة استجابته لاحتياجاتك. نحن نقدم الحلول بفاعلية دون المساس بجودة الخدمة. سواء كنت بحاجة إلى إصلاح فوري أو استشارة تقنية، نحن هنا لمساعدتك.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg h-fit p-5 space-y-3 border border-solid border-[#F5F5FC]">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>03</span>
                </div>
                <h3 class="font-bold text-black text-lg line-clamp-1">دعم على مدار الساعة</h3>
                <p class="line-clamp-3 leading-9 font-semibold">نحن نفهم أن احتياجات الدعم الفني ليست محدودة بساعات العمل. لذا، نقدم خدمات الدعم على مدار الساعة طوال أيام الأسبوع. يمكنك الاعتماد علينا في أي وقت تحتاج فيه.</p>
            </div>
            <div class="rounded-lg pb-5 shadow-lg h-fit p-5 space-y-3 border border-solid border-[#F5F5FC]">
                <div class="rounded-full p-2 font-bold w-11 h-11 border border-solid flex justify-center items-center">
                    <span>04</span>
                </div>
                <h3 class="font-bold text-black text-lg line-clamp-1">شراكات واسعة النطاق</h3>
                <p class="line-clamp-3 leading-9 font-semibold">نعمل بشكل وثيق مع فرقنا المتخصصة في مجموعة متنوعة من المجالات مثل التطوير، التصميم، كتابة المحتوى، التسويق، وإدارة الخوادم. هذا يمكننا من تقديم حلاً شاملاً ومتكاملاً للعملاء. نسعى دائمًا لتلبية متطلبات العملاء</p>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div class="flex flex-col items-center justify-center text-center border rounded-[40px] px-4 py-11 lg:py-20 font-montserrat bg-gradient-to-r from-[#0037a9] via-[#a470ed] via-70% to-[#0037a9]">
            <h2 class="lg:text-4xl text-3xl font-bold mb-5 capitalize max-w-[700px] leading-[3rem] lg:leading-[3.7rem] text-white">
                ابدأ إستشاره مجانية مع خبير من لوجيسيل لاب الآن!</h2>
                <button style="border: 2px solid;" type="button"
                    class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-transparent hover:bg-white p-2.5 px-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>


@endsection
