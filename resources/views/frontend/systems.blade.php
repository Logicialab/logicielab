@extends('layouts.app')

@section('content')

<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container border-2 border-[#d8e7f8] py-6 lg:py-10 grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 rounded-2xl items-center gap-5 px-5 m-auto">
        <div class="rounded-2xl flex justify-center items-center order-1 lg:order-2 2xl:col-span-2"><img
                src="../images/system.jpg"
                width="550" height="550" alt="Pharmacy website and application" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 400px, (max-width: 1280px) 500px, 575px"
                class="max-h-[550px] object-contain mx-auto rounded-2xl">
        </div>
        <div class="m-auto order-1 col-span-1">
            <div class="mb-7 text-4xl lg:text-5xl lg:leading-[3.7rem] text-text font-bold leading-[2.8rem] capitalize">
                <h1><strong>النظام اللوجستي</strong></h1>
            </div>
            <div class="text-[#737195] text-lg">نقوم بإنشاء نظام لوجستي شامل يسهل التحكم في جميع العمليات التجارية التي تحتاجها. يشير النظام اللوجستي إلى تخطيط وتنظيم العمليات اللوجستية والإمدادات اللازمة لتحقيق هدف محدد، وغالباً ما يستخدم في الأعمال التجارية والصناعة.            </div>
            <div class="mt-10">

            <x-button name="الحصول على الخدمة" url="/contact-us" />

            </div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container border-2 border-[#d8e7f8] py-6 lg:py-10 grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 rounded-2xl items-center gap-5 px-5 m-auto">
        <div class="rounded-2xl flex justify-center items-center order-1 lg:order-2 2xl:col-span-2"><img
                src="../images/system1.jpg"
                width="550" height="550" alt="Pharmacy website and application" loading="lazy" data-nuxt-img=""
                sizes="(max-width: 768px) 400px, (max-width: 1280px) 500px, 575px"
                class="max-h-[550px] object-contain mx-auto rounded-2xl">
        </div>
        <div class="m-auto order-1 col-span-1">
            <div class="mb-7 text-4xl lg:text-5xl lg:leading-[3.7rem] text-text font-bold leading-[2.8rem] capitalize">
                <h1><strong>النظام التعليمي</strong></h1>
            </div>
            <div class="text-[#737195] text-lg">لقد أصبحت التكنولوجيا مؤثرة في كل جانب من جوانب حياتنا تقريبًا، فلماذا لا تؤثر أيضًا على التعليم؟ لكي تقدم للطلاب أفضل الخدمات التعليمية، عليك التركيز على إنشاء نظام جيد يشمل جميع العناصر المهمة التي يحتاجونها.
            </div>
            <div class="mt-10">
                <x-button name="الحصول على الخدمة" url="/contact-us" />

            </div>
        </div>
    </div>
</section>



@endsection
