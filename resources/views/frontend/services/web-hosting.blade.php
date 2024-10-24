@extends('layouts.app')

@section('content')
<section class="w-full relative flex flex-col mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div class="flex items-center flex-wrap gap-7">
            <div class="w-full lg:flex-1 order-2 lg:order-1">
                <div
                    class="text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl 2xl:leading-[5rem] capitalize md:leading-[3.5rem] font-bold max-w-[630px] 2xl:max-w-[670px] max-h-fit text-black">
                    <h1><strong> استضافة الويب</strong></h1>
                </div>
                <p class="text-[#737195] text-lg leading-9 font-semibold mt-7">هل تبحث عن منصة استضافة المواقع القوية تضمن لموقعك الإلكتروني الاستقرار والسرعة؟ توقف عن البحث، لأنك وصلت إلى لوجيسيل لاب، نقدم لك خدمة استضافة المواقع الفريدة والمحترفة التي تلبي احتياجات موقعك بكفاءة عالية، اكتشف خدمة الاستضافة من لوجيسيل لاب واستمتع بتجربة استضافة فريدة واحترافية.                </p>
                <div class="flex items-center gap-5 mt-8">
                    <button style="border: 2px solid;" type="button"
                        class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8"> تواصل معانا </button>
                </div>
            </div>
            <div class="w-full lg:w-[500px] lg:h-[400px] order-1 lg:order-2"><img
                    src="../images/web-hosting.jpg"
                    alt="<h1><strong>web hosting</strong></h1>"
                    class="mx-auto aspect-auto w-[350px] h-[350px] lg:w-[400px] lg:h-[400px] object-cover rounded-full"
                    width="450" height="450"></div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-14">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl mb-2 font-bold text-text text-center mx-auto max-w-[700px]">مزايا استضافة المواقع مع لوجيسيل لاب </h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 mt-7 grid_area_template items-center">
            <div class="rounded-2xl img_wrapper w-full h-full"><img
                    src="../images/web-hosting1.jpg"
                    width="400" height="400" alt="Advantages of web hosting" data-nuxt-img=""
                    formate="webp" class="relative object-contain h-full rounded-2xl mx-auto"></div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">01</span><span
                        class="line-clamp-1 flex-1">أمان لا يُضاهى</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">نحن ندرك أهمية أمان موقعك على الويب. لذلك نحرص على توفير حماية قوية تشمل التشفير والمراقبة المستمرة لضمان أمان بياناتك ومعلوماتك. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">02</span><span
                        class="line-clamp-1 flex-1">أداء استثنائي</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">نحن نفخر بتقديم أداء متميز لموقعك. بفضل البنية القوية والخوادم العالية الأداء، يمكنك الاعتماد على سرعة واستقرار موقعك لضمان تجربة مستخدم فريدة. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">03</span><span
                        class="line-clamp-1 flex-1">مرونة تناسب احتياجاتك</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">استضافتنا تتيح لك القدرة على توسيع موارد موقعك أو تقليلها وفقًا لمتطلباتك الفعلية. هذا يعني أنك ستجد دائمًا الحلا المثلى لنجاح مشروعك على الويب.</p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">04</span><span
                        class="line-clamp-1 flex-1">دعم متميز</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">مع فريق دعم لوجيسيل لاب، لن تشعر بأي عزلة. نحن هنا لمساعدتك في حل أي مشكلة أو استفسار تواجهه. سنضمن أن تكون تجربتك معنا سلسة وممتازة.</p>
            </div>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-14">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center px-5 m-auto">
        <div class="rounded-[3rem] lg:order-2"><img
                src="../images/web-hosting2.jpg"
                width="595" height="521" alt="What Is Web Hosting" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[695px] mx-auto object-contain !rounded-[3rem]"></div>
        <div class="lg:order-1 space-y-5">
            <h2 class="text-2xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2 class="lg:text-4xl"><strong style="color: rgb(0, 0, 0);">ما المقصود باستضافة الويب؟</strong></h2>
            </h2>
            <div class="max-w-[850px] leading-9 text-justify">
                <p><span style="background-color: transparent; color: rgb(14, 16, 26);font-size: 18px;">استضافة الويب هي خدمة توفير مساحة على الخوادم (الأجهزة الخاصة بالشبكة) والبنية التحتية الضرورية لجعل موقع الويب أو التطبيق على الإنترنت متاحًا وقابلًا للوصول للعالم. يمكن أن تشمل استضافة الويب توفير الخوادم، وتخزين البيانات، وعرض النطاق الترددي، وخدمات الأمان، والدعم التقني. ببساطة، إنها البنية التحتية التي تجعل موقع الويب متاحًا على الإنترنت وتسمح للأشخاص بزيارته والتفاعل معه. تعتبر استضافة الويب أساسية لأي موقع أو تطبيق على الإنترنت.                </span></p>
                <p><br></p>
            </div>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-[#28398c] hover:bg-white p-2.5 px-8 mt-12">الحصول على الخدمة</button>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-14">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center px-5 m-auto">
        <div class="rounded-[3rem]"><img
                src="../images/web-hosting3.jpg"
                width="595" height="521" alt="Web Hosting" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 400px, 500px" class="max-h-[695px] mx-auto object-contain rounded-[3rem]">
        </div>
        <div class="space-y-5">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2 class="lg:text-[40px]"><strong style="color: rgb(0, 0, 0);">ما الذي يجعلك تختار لوجيسيل لاب للحصول علي خدمة استضافة الويب؟</strong></h2>
            </h2>
            <div class="">
                <p class="lg:text-lg"><span style="background-color: transparent; color: rgb(14, 16, 26);">توجد العديد من الأسباب التي تجعل "لوجيسيل لاب" خيارًا ممتازًا للحصول على خدمة استضافة الويب. إليك بعض الأسباب التي تبرز مزايا هذه الشركة:</span></p>
            </div>
            <ul class="features_list">
                <li class="text-[#737195] items-center flex justify-center relative mb-4">
                    <img src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1">
                    <span class="flex-1 text-lg">أمان وحماية: تمنح "لوجيسيل لاب" الأمان أولوية عالية. تقدم تقنيات تشفير متقدمة وإجراءات أمان قوية لحماية بياناتك وموقعك على الويب.</span>
                </li>
                <li class="text-[#737195] items-center flex justify-center relative mb-4">
                    <img src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1">
                    <span class="flex-1 text-lg">أداء متميز: تقدم خوادمها أداءً عالي المستوى، مما يضمن سرعة تحميل موقعك وزمن استجابة قصير. يساعد ذلك في توفير تجربة ممتازة للزوار.</span>
                </li>
                <li class="text-[#737195] items-center flex justify-center relative mb-4">
                    <img src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1">
                    <span class="flex-1 text-lg">دعم متميز: يقدم فريق دعم العملاء دعمًا عالي الجودة ودائمًا متاحًا لمساعدتك في حل أي مشكلة أو استفسار. تجد هنا دعمًا فعّالًا يضمن رضا العملاء.</span>
                </li>
                <li class="text-[#737195] items-center flex justify-center relative mb-4">
                    <img src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1">
                    <span class="flex-1 text-lg">ضمان التواجد على الإنترنت: بفضل الاستضافة على السحابة، يتوفر موقعك على أكثر من سيرفر. هذا يعني أنه حتى إذا حدث تعطل في سيرفر واحد، فإن موقعك سيظل نشطًا، وهذا يوفر تجربة مستخدم مستقرة.                    </span>
                </li>
                <li class="text-[#737195] items-center flex justify-center relative mb-4">
                    <img src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1">
                    <span class="flex-1 text-lg">مرونة الأسعار: تقدم "لوجيسيل لاب" خيارات تناسب ميزانيات مختلفة. يمكنك اختيار الخطة التي تلبي احتياجاتك وتوفر قيمة جيدة مقابل المال الذي تدفعه.                    </span>
                </li>
            </ul>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-[#28398c] hover:bg-white p-2.5 px-8 mt-12">الحصول على الخدمة</button>
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
