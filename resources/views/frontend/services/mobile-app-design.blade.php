@extends('layouts.app')

@section('content')


<section class="w-full relative flex flex-col relative mb-4">
    <div class="container px-5 m-auto">
        <div class="min-h-fit pt-14 pb-28 container">
            <div class="flex items-center flex-wrap gap-7">
                <div class="w-full lg:flex-1 order-2 lg:order-1">
                    <div
                        class="text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl 2xl:leading-[5rem] capitalize md:leading-[3.5rem] font-bold max-w-[630px] 2xl:max-w-[670px] max-h-fit text-[#073763]">
                        <h1><strong> تصميم التطبيقات </strong></h1>
                    </div>
                    <p class="w-10/12 text-[#737195] text-justify text-2xl mt-7 leading-9 font-semibold">إذا كان
                        هدفك هو امتلاك تطبيق لنشاطك التجاري، فبالتأكيد إن تصميم تطبيقات الجوال معنا في لوجيسيل لاب سيكون
                        هو طريقك لتحقيق غايتك وزيادة مبيعاتك. نحن نقدم الحلول المبتكرة ورواد في تقديم خدمة تصميم تطبيقات
                        الجوال على المنصات المختلفة: جوجل بلاي، آبل استور وهواوي بإحترافية ووفق المعايير الحديثة. وهذا
                        لأن تصميم تطبيقات الجوال أصبح هو الإستثمار الأمثل للمستقبل.
                    </p>
                    <div class="flex items-center gap-5 mt-8">


                        <button style="border: 2px solid;" type="button"
                            class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white hover:bg-[#28398c] p-2.5 px-8 mt-4">
                            <a href="https://wa.me/+971508224633"> تواصل معانا </a>
                            <i class="fa-solid fa-arrow-left mr-1"></i></button>
                    </div>
                </div>

                <div class="w-full lg:w-[400px] lg:h-[400px] order-1 lg:order-2"><img src="../images/apps.jpg"
                        alt="<h1><strong>Web development</strong></h1>"
                        class="mx-auto aspect-auto w-[350px] h-[350px] lg:w-[500px] lg:h-[500px] object-cover rounded-2xl"
                        width="450" height="450"></div>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-12">
    <div class="container border-2 border-[#d8e7f8] p-7 rounded-2xl px-5 m-auto">
        <h2 class="text-[#141324] text-5xl font-bold mb-4 max-w-3xl leading-[60px]" data-aos="fade-up">لفوائد التي تحصل
            عليها عند تصميم تطبيقات الهاتف المحمول باستخدام لوجيسيل لاب.</h2>
        <p class="font-light text-lg text-[#737195] font-semibold max-w-xl" data-aos="fade-up">في لوجيسيل لاب، نحن
            ملتزمون بتقديم تجارب تصميم تطبيقات الهاتف المحمول الاستثنائية التي تلبي احتياجات عملائنا بشكل فريد ومبتكر.
            فيما يلي بعض ميزات خدمة تصميم تطبيقات الهاتف المحمول التي نقدمها:</p>

        <button style="border: 2px solid;" type="button"
            class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-4">
            <a href="https://wa.me/+971508224633">الحصول على الخدمة</a>
            <i class="fa-solid fa-arrow-left mr-1"></i></button>


        <div class="grid grid-col md:grid-cols-3 xl:grid-cols-3 gap-5 mt-8">
            <div class="block p-6 border border-gray-200 rounded-lg shadow bg-[#fff9fc]">
                <div>
                    <span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">01</span>
                    <h2 class="font-bold text-start text-black text-lg line-clamp-1">الأستضافة</h2>
                    <p class="text-[#737195] text-base font-semibold py-3 overflow-y-auto leading-9">
                        نستخدم أحدث التقنيات لضمان أداء تطبيقات سلس وسرعة استجابة عالية و نوفر بيئة استضافة محمية
                        بتقنيات أمان متقدمة لحماية بيانات عملائنا لأننا نؤمن ان الاختيار السليم للإستضافة من أهم عوامل
                        نجاح الموقع أو التطبيق
                    </p>
                </div>
            </div>
            <div class="block p-6 border border-gray-200 rounded-lg shadow bg-[#fff9fc]">
                <div>
                    <span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">02</span>
                    <h2 class="font-bold text-start text-black text-lg line-clamp-1">تصميم تطبيقات الموبايل
                    </h2>
                    <p class="text-[#737195] text-base py-3 overflow-y-auto leading-8 font-semibold">
                        نستخدم أحدث التقنيات والأدوات في تطوير التطبيقات لضمان أداء متفوق وسرعة استجابة كما نسعى لتوفير
                        تجربة مستخدم استثنائية من خلال واجهات سهلة الاستخدام وتصميم جذاب, لتحصل في النهاية على تصميمًا
                        فريدًا ومخصصًا يتناسب مع رؤيتك
                    </p>
                </div>
            </div>
            <div class="block p-6 border border-gray-200 rounded-lg shadow bg-[#fff9fc]">
                <div>
                    <span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">03</span>
                    <h2 class="font-bold text-start text-black text-lg line-clamp-1">خدمات الدعم الفني
                    </h2>
                    <p class="text-[#737195] text-base py-3 overflow-y-auto leading-8 font-semibold">
                        نوفر دعمًا فنيًا متاحًا على مدار الساعة، طوال أيام الأسبوع مع فريق من المحترفين المؤهلين تقنياً
                        للرد على استفساراتك ومساعدتك في حل المشاكل بفعالية.كما نقوم بمتابعة حالة مشاكلك وتقديم تحسينات
                        دورية لضمان تقديم أفضل خدمة
                    </p>
                </div>
            </div>
            <div class="block p-6 border border-gray-200 rounded-lg shadow bg-[#fff9fc]">
                <div>
                    <span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">04</span>
                    <h2 class="font-bold text-start text-black text-lg line-clamp-1">تطوير تطبيقات الجوال
                    </h2>
                    <p class="text-[#737195] text-base py-3 overflow-y-auto leading-8 font-semibold">
                        تطوير تطبيقات الجوال هو مجال تقني متطور يشمل العدat best fit each project and its unique
                        requirementsيد من التقنيات والأدوات. لذلك نحرص دوما في لوجيسيل لاب أن نواكبً التطورات في مجال
                        تطوير تطبيقات الجوال حيث تظهر تقنيات جديدة بشكل مستمر، وأن نختار الأدوات والتقنيات التي تناسب كل
                        مشروع.
                    </p>
                </div>
            </div>
            <div class="block p-6 border border-gray-200 rounded-lg shadow bg-[#fff9fc]">
                <div>
                    <span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">05</span>
                    <h2 class="font-bold text-start text-black text-lg line-clamp-1">خدمة الدفع الإلكتروني
                    </h2>
                    <p class="text-[#737195] text-base py-3 overflow-y-auto leading-8 font-semibold">
                        خدمة الدفع الإلكتروني تلعب دورًا حاسمًا في تطوير تطبيقات الجوال، سواء كان ذلك للتجارة
                        الإلكترونية أو لأي نوع آخر من التطبيقات التي تتطلب معالجة المدفوعات لذلك نقوم ب استخدام كل
                        الخدمات الدفع المتوفرة بما يتوافق مع احتياج العملاء.
                    </p>
                </div>
            </div>
            <div class="block p-6 border border-gray-200 rounded-lg shadow bg-[#fff9fc]">
                <div>
                    <span
                        class="flex items-center justify-center border rounded-full border-third w-11 h-11 mb-4 font-black">06</span>
                    <h2 class="font-bold text-start text-black text-lg line-clamp-1">كتابة محتوى مناسب
                    </h2>
                    <p class="text-[#737195] text-base py-3 overflow-y-auto leading-8 font-semibold">نحرص على كتابة محتوى يتناسب مع
                        أحجام الشاشات المختلفة والأجهزة اللوحية ويجذب انتباه الفئة التي تستهدفها المحتوي هو عنصر مهم في
                        تطوير تطبيقات الجوال لضمان تجربة المستخدم الجيده على مختلف الأجهزة</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-4">
    <div class="container px-5 m-auto grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center">
        <div class="rounded-[3rem] lg:order-2"><img src="../images/apps1.jpg" alt="Mobile app design"
                class="relative !rounded-[3rem] object-contain max-h-[550px]"></div>
        <div class="space-y-5 lg:order-1">
            <div class="text-3xl lg:text-4xl mb-4 lg:leading-[2.8rem] text-text font-bold leading-[2.5rem] capitalize">
                تصميم تطبيقات الجوال تنقسم إلى:</div>
            <div class="text-text-light max-w-[500px]"></div>
            <div class="mt-5">
                <ul>
                    <li class="flex items-start gap-2 mb-4 last:mb-0"><!---->
                        <div>
                            <h3 class="text-text font-semibold mb-2 text-2xl">نظام التشغيل أندرويد </h3>
                            <p class="text-[#737195] font-semibold leading-8">نحن في لوجيسيل لاب على دراية كاملة بشروط Google Play المحددة لقبول
                                التطبيقات على المتجر وضمان استمرارية وجودها عليه. وغير ذلك، فإننا نحرص على مواكبة كافة
                                تحديثات لغات البرمجة، قياس كفاءتها وشروط قبول التطبيقات بحيث نضمن أن يتم تطوير التطبيق
                                مع كافة التحديثات. </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-2 mb-4 last:mb-0"><!---->
                        <div>
                            <h3 class="text-text font-semibold mb-2 text-2xl">نظام التشغيل iOS</h3>
                            <p class="text-[#737195] font-semibold leading-8">من المعروف أن تحديثات آبل دائمة ومستمرة، وهذا هو بالتحديد ما نحرص
                                على مواكبته أثناء تصميم تطبيقات الجوال الخاصة بالأيفون. نحن نستخدم اللغات والتقنيات
                                المرنة، بحيث تكون قابلة للتحديث حتى لا يتعرض التطبيق للاختفاء على App Store وحتى نتمكن
                                من تطويره بسهولة. </p>
                        </div>
                    </li>
                    <li class="flex items-start gap-2 mb-4 last:mb-0"><!---->
                        <div>
                            <h3 class="text-text font-semibold mb-2 text-2xl">نظام cross platform</h3>
                            <p class="text-[#737195] font-semibold leading-8">هو نظام يسمح للمطورين ببناء تطبيق متوافق في نفس الوقت مع العديد من
                                أنظمة التشغيل الأساسية مثل Android, iOS حيث يكتب المطورون الكود مرة واحدة ثم يعيدون
                                استخدامه ، مما يجعل من الممكن إصدار منتج بسرعة وبأعلى جودة. </p>
                        </div>
                    </li>
                </ul>
            </div>

            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white hover:bg-[#28398c] p-2.5 px-8 mt-4">
                <a href="https://wa.me/+971508224633">الحصول على الخدمة</a>
                <i class="fa-solid fa-arrow-left mr-1"></i></button>

        </div>
    </div>
</section>

@endsection
