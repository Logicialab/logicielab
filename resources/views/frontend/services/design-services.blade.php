@extends('layouts.app')

@section('content')

<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div class="flex items-center flex-wrap gap-7">
            <div class="w-full lg:flex-1 order-2 lg:order-1">
                <div
                    class="text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl 2xl:leading-[5rem] capitalize md:leading-[3.5rem] font-bold max-w-[630px] 2xl:max-w-[670px] max-h-fit text-[#28398c]">
                    <h1><strong>خدمات التصميم </strong></h1>
                </div>
                <p class="max-w-[800px] text-[#737195] text-justify lg:text-2xl mt-7">اكتشف عالم التصميم مع خدماتنا المميزة في مجالات التصميم الإبداعي. نحن نقدم خدمات التصميم التي تأخذ عملك إلى مستوى جديد من التميز والاحترافية. مع خدماتنا في التصميم، ستحصل على إبداع لا حدود له وأفكار مبتكرة تمنح علامتك التجارية مكانة استثنائية في السوق. انضم إلينا اليوم لتجربة عالم التصميم بأبهى صوره.                </p>
                <div class="flex items-center gap-5 mt-8">
                    <button style="border: 2px solid;" type="button"
                        class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8"> تواصل معانا </button>
                </div>
            </div>
            <div class="w-full lg:w-[500px] lg:h-[400px] order-1 lg:order-2"><img
                    src="../images/design.jpg"
                    alt="<h1><strong>web hosting</strong></h1>"
                    class="mx-auto aspect-auto w-[350px] h-[350px] lg:w-[400px] lg:h-[400px] object-cover rounded-2xl"
                    width="450" height="450"></div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl mb-2 font-bold text-text text-center mx-auto max-w-[700px]">خدمات التصميم المقدمة من لوجيسيل لاب        </h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 mt-7 grid_area_template items-center">
            <div class="rounded-2xl img_wrapper w-full h-full"><img
                    src="../images/design1.jpg"
                    width="430" height="500" alt="Design Services" class="relative object-contain h-full rounded-2xl mx-auto"></div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">01</span><span
                        class="line-clamp-1 flex-1">تصميم الهوية التجارية</span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-8">تألق وابرز بأسلوب فريد من نوعه! خدمة تصميم الهوية التجارية تضفي شخصية ومعنى على علامتك التجارية. سنبني لك شعارًا أصيلًا ونختار الألوان والخطوط التي تعبر عن روح عملك.                </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">02</span><span
                        class="line-clamp-1 flex-1">الموشن جرافيك </span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-8">اجعل رسائلك تتحرك وتلفت الأنظار! خدمة الموشن جرافيك تجمع بين الإبداع والتكنولوجيا لإنشاء مقاطع فيديو متحركة فريدة.نساعدك في تحويل قصصك ومنتجاتك إلى أفلام قصيرة                </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">03</span><span
                        class="line-clamp-1 flex-1">تصميم الجرافيك </span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-8">الإبداع بلا حدود! خدمة تصميم الجرافيك توفر لك تصميمات استثنائية تلفت الأنظار. سواء كنت بحاجة إلى بروشورات أو بوسترات أو تصميمات للوسائط الاجتماعية.                </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">04</span><span
                        class="line-clamp-1 flex-1">تصميمات السوشيال ميديا</span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-8">ابنِ تواجدك على وسائل التواصل الاجتماعي بأسلوب فريد! خدمة تصميمات السوشيال ميديا توفر لك محتوى جذاب ومميز للمشاركة على منصات التواصل الاجتماعي.                </p>
            </div>
        </div>
    </div>
</section>

<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center">
        <div class="rounded-[3rem]"><img
                src="../images/design2.jpg"
                width="595" height="521" loading="lazy" data-nuxt-img="" sizes="(max-width: 768px) 400px, 500px"
                class="max-h-[595px] mx-auto !object-contain rounded-[1rem]"></div>
        <div class="space-y-5">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2 class="lg:text-[40px]"><strong style="color: rgb(0, 0, 0);">خدمة تصميم الجرافيك المقدمة من لوجيسيل لاب  </strong></h2>
            </h2>
            <div class="text-text-light">
                <p class="lg:text-lg"><span style="background-color: transparent; color: rgb(14, 16, 26);">إن التصميم الجرافيكي هو لغة بصرية تسرد قصة عن علامتك التجارية ومنتجاتك بأسلوب يلتقط الأنظار ويترك انطباعًا قويًا. في لوجيسيل لاب، نحن نقدم خدمة تصميم الجرافيك لمساعدتك على التحول إلى قوة بصرية لا يمكن تجاهلها.                </span></p>
                <p><br></p>
                <p class="lg:text-lg"><span style="background-color: transparent; color: rgb(14, 16, 26);">ماذا تتضمن خدمتنا في تصميم الجرافيك:</span></p>
            </div>
            <ul class="features_list">
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تصميم المواد التسويقية: سنقوم بتصميم مواد تسويقية مثل بروشورات، فلايرات، بانرات، وملصقات تساهم في تعزيز منتجاتك وخدماتك.                        </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تصميم المطبوعات: إذا كنت بحاجة إلى تصميمات للمطبوعات مثل كتب أو مجلات أو ملصقات، فسنقوم بإنتاج تصميمات جذابة وعصرية.                        </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تصميم الشعارات: سنساعدك في إنشاء شعار أو لوجو فريد يميزك عن المنافسين ويمثل هويتك التجارية.                        </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تصميم الإعلانات والمشاركات على وسائل التواصل الاجتماعي: سنقوم بتصميم إعلانات جذابة ومحتوى لوسائل التواصل الاجتماعي لزيادة تفاعل متابعيك وجذب عملاء جدد.                        </span></li>
                <li class="text-[#737195] items-start flex relative mb-4"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">تصميم العناصر الرقمية: نحن نختص في تصميم محتوى رقمي متعدد الوسائط مثل صور، فيديوهات، ورسومات توضيحية.                        </span></li>
            </ul>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">الحصول على الخدمة</button>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container grid gap-8 pb-20 grid-cols-1 lg:grid-cols-2 items-center m-auto">
        <div class="rounded-[3rem] lg:order-2"><img
                src="../images/design3.jpg"
                width="595" height="521" loading="lazy" data-nuxt-img="" sizes="(max-width: 768px) 400px, 500px"
                class="mx-auto object-contain rounded-[1rem]"></div>
        <div class="lg:order-1 space-y-5">
            <h2 class="text-2xl lg:text-3xl lg:leading-[2.4rem] text-text font-semibold leading-[2.5rem] capitalize">
                <h2 class="lg:text-[40px]"><strong style="color: rgb(0, 0, 0);">خدمة تصميم الموشن جرافيك المقدمة من لوجيسيل لاب                 </strong></h2>
            </h2>
            <div class="text-text-light">
                <p class="lg:text-lg"><span style="background-color: transparent; color: rgb(14, 16, 26);">تصميم الموشن جرافيك هو واحد من أقوى وسائل التواصل البصري في العصر الرقمي. في لوجيسيل لاب، نحن نقدم خدمة تصميم الموشن جرافيك لجعل علامتك التجارية ومحتواك يتحركان بأناقة وإبداع.                </span></p>
                <p><br></p>
                <p><span style="background-color: transparent; color: rgb(14, 16, 26);">ماذا تتضمن خدمتنا في تصميم الموشن جرافيك:</span></p>
            </div>
            <ul class="features_list">
                <li class="text-[#737195] items-start flex relative mb-4 text-lg"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">أنيميشن الشعارات: سنقوم بإنشاء أنيميشن مبتكر لشعار علامتك التجارية يجذب الانتباه ويعزز هويتك.                        </span></li>
                <li class="text-[#737195] items-start flex relative mb-4 text-lg"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">مقدمات الفيديو: سنصمم مقدمات موشن جرافيك رائعة تضفي طابعًا احترافيًا على محتواك المرئي على الإنترنت.                        </span></li>
                <li class="text-[#737195] items-start flex relative mb-4 text-lg"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">إعلانات متحركة: سنخلق إعلانات موشن جرافيك تروج لمنتجاتك أو خدماتك بأسلوب مبتكر وجذاب.                        </span></li>
                <li class="text-[#737195] items-start flex relative mb-4 text-lg"><img
                        src="data:image/webp;base64,UklGRogBAABXRUJQVlA4WAoAAAAQAAAAEwAAEgAAQUxQSKMAAAABgFXbTljpSEBCJFQCEuqgcTA4AAdvHPAczDioBCREQiTkA2gtRMQEsP2xobyt0VrUJ/m28AynhY28EP/VMwFI1q+nSZ3HplMZL8rU75184K8DNWQjNuDwioSyTsME0MhqAH7BMGE2zXEBzY9uwnyF0PwAWpgwSzTg+w/QDpZ3Byg27UeZ9IXrlLxrlimd+nGZyMPCTsgedmcetmg1Gm91WGELAFZQOCC+AAAAEAUAnQEqFAATAD5RJI9Fo6IhFAQAOAUEtgBOmUJAfWz4rPTAOe29jz9tPSVAm3mcAAD+9pWXv9t8/7mXxX+ZQksMm55fOdkn1z/66Bkiau2bkP10MAvO4FQUgOdi4th5J8kxYf0pDqKurQYzb5l+u/0hyewDAXuPvKNdIn++55ORM6ygzFTfwBfgg6rqtWA8Net/pr2mXp7V14jTe/+X7arMsiv8HGepKp+Pize7tvoik83cTdyJ1IAGSbgAAA=="
                        alt="list_icon" width="20" height="20" class="me-1"><span class="flex-1">موشن جرافيك للمواقع والتطبيقات: سنعزز تجربة مستخدمي موقعك أو تطبيقك من خلال تصميم موشن جرافيك يتفاعل بشكل مميز.                        </span></li>
            </ul>
            <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8 mt-12">الحصول على الخدمة</button>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-14">
    <div class="container px-5 m-auto">
        <div class="flex flex-col items-center justify-center text-center border rounded-[40px] py-20 font-montserrat !bg-no-repeat !bg-cover"
            style="background: url('../images/color.jpg');">
            <h2 class="lg:text-4xl text-3xl font-bold mb-5 capitalize max-w-[700px] leading-[3rem] lg:leading-[3.7rem] text-white">
                ابدأ إستشاره مجانية مع خبير من لوجيسيل لاب الآن!</h2>
                <button style="border: 2px solid;" type="button"
                class="base-btn text-xl rounded-lg text-white hover:text-white bg-transparent hover:bg-[#28398c] p-2.5 px-8">الحصول على الخدمة</button>
        </div>
    </div>
</section>



@endsection
