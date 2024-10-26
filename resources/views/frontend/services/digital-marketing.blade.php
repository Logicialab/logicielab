@extends('layouts.app')

@section('content')
<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div
            class="text-3xl md:text-4xl xl:text-5xl font-montserrat text-center md:leading-[3.3rem] font-bold max-w-[630px] xl:max-w-[800px] max-h-fit mx-auto text-[#28398c] xl:leading-[4rem]">
            <h1>التسويق الإلكتروني</h1>
        </div>
        <p class="max-w-[880px] mx-auto text-[#737195] text-center text-lg font-semibold mt-5">اكتشف قوة التسويق الإلكتروني مع خدمتنا
            المبتكرة. نحن نقدم حلاً شاملاً لزيادة رؤيتك على الإنترنت وتعزيز نجاح عملك. مع التسويق الالكتروني، يمكنك
            الوصول إلى جمهور أوسع، وزيادة المبيعات، وتعزيز العلامة التجارية. </p>

        <div class="flex items-center gap-5 justify-center">
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-[#28398c] hover:bg-white p-2.5 px-8 mt-8">
                تواصل معانا </button>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl mb-4 font-bold text-text text-center mx-auto max-w-[700px]">خدمات التسويق الإلكتروني التي
            تقدمها لك شركة لوجيسيل لاب </h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 mt-7 grid_area_template items-center">
            <div class="rounded-2xl img_wrapper w-full h-full"><img src="../images/marketing.jpg" width="400"
                    height="400" alt="Digital marketing services"
                    class="relative object-contain h-full rounded-2xl mx-auto"></div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">01</span><span
                        class="line-clamp-1 flex-1">تحسين محركات البحث SEO</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">استعد للصعود إلى قمة نتائج محركات البحث مع خدمتنا المميزة
                    لتحسين محركات البحث (SEO). نحن نقدم حلاً استراتيجيًا شاملاً لزيادة وجودك على الإنترنت وزيادة رواج
                    عملك. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">02</span><span
                        class="line-clamp-1 flex-1">تحسين متجر التطبيقات ASO</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">اجعل تطبيقك يتألق في عالم التطبيقات المحمولة مع خدمتنا
                    الرائعة لتحسين متجر التطبيقات (ASO). نحن نقدم حلاً استراتيجيًا مخصصًا لزيادة رؤية تطبيقك وزيادة عدد
                    التنزيلات. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">03</span><span
                        class="line-clamp-1 flex-1">الإعلانات الممولة PPC</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">اجعل تواجدك على الإنترنت يلمع وينمو بفعالية مع خدمتنا
                    للإعلانات الممولة. نحن نقدم حلاً مبتكرًا لزيادة رؤيتك عبر الويب وزيادة تفاعل الجمهور مع علامتك
                    التجارية أو منتجك. </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">04</span><span
                        class="line-clamp-1 flex-1">السوشيال ميديا</span></h3>
                <p class="text-[#737195] text-lg line-clamp-3">اكتشف القوة اللا متناهية للتواصل والتأثير عبر منصات
                    السوشيال ميديا مع خدمتنا المميزة. نحن نقدم لك الفرصة للوصول إلى جمهور أوسع وبناء علاقات مستدامة مع
                    عملائك </p>
            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-16">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center px-5 m-auto">
        <div class="rounded-[3rem]"><img src="../images/marketing1.jpg" width="695" height="521" alt="Paid Advertising"
                loading="lazy" data-nuxt-img="" sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto !object-contain rounded-[3rem]"></div>
        <div class="space-y-5">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2 class="lg:text-4xl">
                    <strong style="color: rgb(0, 0, 0);">خدمة الإعلانات الممولة PPC التي تقدمها لك العالمية
                        الحرة</strong>
                </h2>
            </h2>
            <div class="">
                <p class="text-[#737195] font-semibold" style="color: rgb(0, 0, 0);">خدمة الإعلانات الممولة (Paid Advertising) التي تقدمها لوجيسيل لاب تمتلك
                    أهمية كبيرة للأعمال والمسوقين عبر الإنترنت، وذلك لعدة أسباب: </p>
            </div>
            <ul class="features_list">
                <li class="text-[#737195] flex items-center  relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="d-flex-1">زيادة الوجود على
                        الإنترنت: تسمح لك خدمة الإعلانات الممولة بالظهور بشكل بارز أمام الجمهور المستهدف على الإنترنت،
                        مما يساعد في زيادة الوعي بعلامتك التجارية ومنتجاتك أو خدماتك. </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">استهداف دقيق: يمكنك
                        توجيه إعلاناتك نحو فئة معينة من الجمهور بناءً على معايير مثل العمر، الجنس، الموقع الجغرافي،
                        واهتماماتهم. هذا يزيد من فعالية حملتك الإعلانية. </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">قياس الأداء: تتيح لك
                        خدمة الإعلانات الممولة تتبع أداء حملتك بشكل دقيق. يمكنك معرفة عدد المشاهدات، النقرات، وتحويلات
                        الجمهور، مما يساعدك في تقدير عائد استثمار حملتك وإجراء تحسينات. </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تحكم في ميزانية
                        الإعلان: يمكنك تعيين ميزانية يومية أو أسبوعية أو شهرية لحملتك، وهذا يضمن عدم تجاوز النفقات
                        المخططة. </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">سرعة النتائج: بينما
                        تحتاج استراتيجيات التسويق الطبيعية وقتًا لتحقيق نتائج، يمكن للإعلانات الممولة توليف مشاهدة
                        وتحويلات بسرعة أكبر. </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تنافسية: في بيئة
                        التسويق الرقمي، تعطي خدمة الإعلانات الممولة للأعمال الصغيرة والكبيرة فرصة للتنافس بجانب الشركات
                        الكبرى وزيادة حصتها في السوق. </span></li>
            </ul>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">الحصول
                على الخدمة</button>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-16">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center px-5 m-auto">
        <div class="rounded-[3rem] lg:order-2"><img src="../images/marketing2.jpg" width="695" height="521"
                alt="Social Media Marketing" loading="lazy" data-nuxt-img="" sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto object-contain !rounded-[3rem]"></div>
        <div class="lg:order-1 space-y-5">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2 class="lg:text-4xl"><strong style="color: rgb(0, 0, 0);">خدمة السوشيال ميديا SMM التي تقدمها لك
                        لوجيسيل لاب </strong></h2>
            </h2>
            <div class="">
                <p class="lg:text-lg"><span style="color: rgb(0, 0, 0);">خدمة السوشيال ميديا التي تُقدمها لوجيسيل لاب
                        تعتبر ذات أهمية كبيرة في العصر الرقمي، وذلك للأسباب التالية: </span></p>
            </div>
            <ul class="features_list">
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">التواصل مع الجمهور:
                        تسمح لك خدمة السوشيال ميديا بالتواصل مع جمهورك بشكل فوري ومباشر. يمكنك نشر محتوى، الرد على
                        تعليقات المتابعين، والتفاعل مع استجاباتهم.</span></li>
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">بناء العلاقات: تساهم في
                        بناء علاقات قوية مع الجمهور وزبائنك. يمكنك التفاعل معهم وفهم احتياجاتهم واهتماماتهم بشكل
                        أفضل.</span></li>
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تعزيز الوعي بالعلامة
                        التجارية: تمكنك من بناء وتعزيز وعي الجمهور بعلامتك التجارية ومنتجاتك أو خدماتك عبر نشر محتوى
                        جذاب ومميز.</span></li>
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">الترويج والتسويق: يمكنك
                        تسويق منتجاتك أو خدماتك بفعالية عبر منصات التواصل الاجتماعي. يمكنك القيام بحملات إعلانية مدفوعة
                        لزيادة الوصول إلى جمهور مستهدف.</span></li>
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">مراقبة المردودية: تتيح
                        لك خدمة السوشيال ميديا متابعة وقياس أداء حملاتك ونشاطك عبر الإحصائيات والتحليلات. يمكنك تقييم ما
                        إذا كانت استراتيجيتك فعالة واتخاذ التحسينات اللازمة.</span></li>
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">التفاعل مع الاتجاهات:
                        يمكنك متابعة الاتجاهات والمواضيع الحالية والمشاركة في المحادثات التي تهم جمهورك.</span></li>
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">توليف الجمهور: تعزز من
                        تفاعل متابعيك وجمهورك عبر نشر محتوى جذاب ومفيد.</span></li>
                <li class="text-[#737195] items-start flex mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تحليل المنافسة: يمكنك
                        مراقبة أنشطة منافسيك والتعرف على استراتيجياتهم.</span></li>
            </ul>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">الحصول على الخدمة</button>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-14">
    <div class="container px-5 m-auto">
        <div
            class="flex flex-col items-center justify-center text-center border rounded-[40px] px-4 py-11 lg:py-20 font-montserrat bg-gradient-to-r from-[#0037a9] via-[#a470ed] via-70% to-[#0037a9]">
            <h2 class="lg:text-4xl text-3xl font-bold mb-5 capitalize max-w-[700px] leading-[3rem] lg:leading-[3.7rem] text-white">
                ابدأ إستشاره مجانية مع خبير من لوجيسيل لاب الآن!</h2>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-white bg-transparent hover:bg-[#28398c] p-2.5 px-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>
@endsection
