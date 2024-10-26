@extends('layouts.app')

@section('content')

<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div
        class="container border-2 border-[#d8e7f8] py-6 lg:py-10 grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 rounded-2xl items-center gap-5 px-5 m-auto">
        <div class="rounded-2xl flex justify-center items-center order-1 lg:order-2 2xl:col-span-2"><img
                src="../images/doctor.jpg"
                width="550" height="550" alt="Pharmacy website and application"
                class="max-h-[550px] object-contain mx-auto">
        </div>
        <div class="m-auto order-1 col-span-1">
            <div class="mb-7 text-4xl lg:text-5xl lg:leading-[3.7rem] text-text font-bold leading-[2.8rem] capitalize">
                <h1><strong>موقع وتطبيق الصيدلية                </strong></h1>
            </div>
            <div class="text-[#737195] text-lg">موقع إلكتروني وتطبيق صيدلي شامل مصمم لإحداث ثورة في طريقة حصول المرضى على الأدوية وخدمات الرعاية الصحية. تهدف هذه المنصة إلى توفير تجربة سلسة ومريحة للمستخدمين، مما يسمح لهم بإدارة الوصفات الطبية الخاصة بهم، وطلب الأدوية، والوصول إلى المعلومات الصحية الأساسية من منازلهم.            </div>
            <div class="mt-10">
                <x-button name="الحصول على الخدمة" url="/contact-us" />

            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div
        class="container border-2 border-[#d8e7f8] py-6 lg:py-10 grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 rounded-2xl items-center gap-5 px-5 m-auto">
        <div class="rounded-2xl flex justify-center items-center order-1 lg:order-2 2xl:col-span-2"><img
                src="../images/delivery.jpg"
                width="550" height="550" alt="Pharmacy website and application"
                sizes="(max-width: 768px) 400px, (max-width: 1280px) 500px, 575px"
                class="max-h-[550px] object-contain mx-auto">
        </div>
        <div class="m-auto order-1 col-span-1">
            <div class="mb-7 text-4xl lg:text-5xl lg:leading-[3.7rem] text-text font-bold leading-[2.8rem] capitalize">
                <h1><strong>تطبيق توصيل الطعام</strong></h1>
            </div>
            <div class="text-[#737195] text-lg">نحن بحاجة إلى خدمات توصيل الطعام في كثير من الأحيان. بالنسبة لبعض الناس، فمن المهم جدا. المتعة تكمن في انتظار وصول الطعام، وتكتمل المتعة عندما يصل الطعام اللذيذ وتتناوله. صمم تطبيق توصيل الطعام الناجح معنا في لوجيسيل لاب.</div>
            <div class="mt-10">
                <x-button name="الحصول على الخدمة" url="/contact-us" />

                    
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div
        class="container border-2 border-[#d8e7f8] py-6 lg:py-10 grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 rounded-2xl items-center gap-5 px-5 m-auto">
        <div class="rounded-2xl flex justify-center items-center order-1 lg:order-2 2xl:col-span-2"><img
                src="../images/delivery1.jpg"
                width="550" height="550" alt="Pharmacy website and application"
                sizes="(max-width: 768px) 400px, (max-width: 1280px) 500px, 575px"
                class="max-h-[550px] object-contain mx-auto">
        </div>
        <div class="m-auto order-1 col-span-1">
            <div class="mb-7 text-4xl lg:text-5xl lg:leading-[3.7rem] text-text font-bold leading-[2.8rem] capitalize">
                <h1><strong>تطبيق الاستلام والتسليم</strong></h1>
            </div>
            <div class="text-[#737195] text-lg">هناك شريحة كبيرة من الأشخاص الذين يعتمدون فقط على طرق التسوق عبر الإنترنت دون طرق التسوق التقليدية الأخرى؛ وذلك لأنه يوفر لهم كل ما يحتاجونه أثناء جلوسهم في المنزل. ولهذا فإن تصميمك لتقديم الطلبات هو فكرة لمشروع ناجح للغاية.            </div>
            <div class="mt-10">

             <x-button name="الحصول على الخدمة" url="/contact-us" />
                
            </div>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-10">
    <div class="container px-6 m-auto">
        <div
            class="container grid grid-cols-1 lg:grid-cols-2 md:gap-8 lg:gap-12 overflow-hidden min-h-fit items-center pb-11 lg:pb-20">
            <div class="my-5">
                <h2 class="my-5 text-4xl lg:text-6xl lg:leading-[4.8rem] text-text font-bold leading-[3.8rem]">
                    نحن نعمل مع أفضل الشركاء
                </h2>
                <p class="mb-5 max-w-lg text-base text-[#737195]">عملاؤنا هم حجر الأساس في كل ما نقوم به، ونحن ملتزمون بتلبية احتياجاتهم وتحقيق رضاهم في كل خطوة نخطوها. نحن نقدر كل واحد من عملائنا ونسعى دائمًا لتزويدهم بأفضل الخدمات.                </p>
            </div>

            <div class="">

                <div class="owl-carousel owl-carousel-brands owl-theme">
                    <div class="item">
                        <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/lorem-ipsum-logo-design-template-41292e364405af5884fab0899b980d3a_screen.jpg?ts=1680759649"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">
                    </div>
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-libre/vecteur-degrade-logo-colore-oiseau_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.2116175301.1717545600&semt=ais_user"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">

                    </div>
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-libre/vecteur-degrade-logo-colore-oiseau_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.2116175301.1717545600&semt=ais_user"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">

                    </div>
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-libre/vecteur-degrade-logo-colore-oiseau_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.2116175301.1717545600&semt=ais_user"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">
                    </div>
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-premium/modele-art-conception-logo-lorem-ipsum-ici_642953-596.jpg"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">
                    </div>
                </div>

                <div class="owl-carousel owl-carousel-brands-rtl owl-theme">
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-premium/conception-abstraite-coloree-logo_650075-1506.jpg"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">

                    </div>
                    <div class="item">
                        <img src="https://c8.alamy.com/comp/2HC5R56/minimalist-simple-design-lorem-ipsum-logo-design-2HC5R56.jpg"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">

                    </div>
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-premium/conception-abstraite-coloree-logo_650075-1506.jpg"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">

                    </div>
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-premium/conception-abstraite-coloree-logo_650075-1506.jpg"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">

                    </div>
                    <div class="item">
                        <img src="https://img.freepik.com/vecteurs-premium/conception-abstraite-coloree-logo_650075-1506.jpg"
                            class="w-[90px] h-auto rounded-full object-contain" alt="">
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>




<section class="w-full relative flex flex-col relative mb-14">
    <div class="container px-5 m-auto">
        <div class="flex flex-col items-center justify-center text-center border rounded-[40px] px-4 py-11 lg:py-20 font-montserrat bg-gradient-to-r from-[#0037a9] via-[#a470ed] via-70% to-[#0037a9]">
            <h2 class="lg:text-4xl text-2xl font-bold capitalize max-w-[700px] leading-[2.2rem] lg:leading-[3.7rem] text-white">
                ابدأ استشارة مجانية مع أحد الخبراء الآن!</h2>
            <p class="max-w-[600px] flex-1 text-white">نقوم بإجراء دراسة وتحليل شامل لمشروعك، للوصول إلى المفاهيم الأساسية.</p>


            <x-button name="ارسل  رسالتك" url="/contact-us" />

        </div>
    </div>
</section>

@endsection
