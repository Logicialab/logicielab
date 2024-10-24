@extends('layouts.app')

@section('content')
<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div class="flex items-center flex-wrap gap-7">
            <div class="w-full lg:flex-1 order-2 lg:order-1">
                <div
                    class="text-3xl md:text-5xl xl:text-6xl 2xl:text-7xl 2xl:leading-[5rem] capitalize md:leading-[3.5rem] font-bold max-w-[630px] 2xl:max-w-[670px] max-h-fit text-[#28398c]">
                    <h1><strong>إدارة المشاريع</strong></h1>
                </div>
                <p class="max-w-[880px] text-[#737195] 2xl:text-xl mt-7">تخيل أن لديك فرصة لتحويل أفكارك ومشروعاتك إلى واقع ملموس، هذا هو دور خدمة إدارة المشاريع المقدمة من لوجيسيل لاب. نحن هنا لنجعل عملية تخطيط وتنفيذ المشاريع أسهل وأكثر فعالية من أي وقت مضى.انضم إلينا اليوم واحصل على فرصة حقيقية لتحقيق النجاح في مشاريعك وأفكارك.                </p>
                <div class="flex items-center gap-5 mt-8">
                    <button style="border: 2px solid;" type="button"
                        class="base-btn text-xl rounded-lg text-[#28398c] hover:text-white bg-white hover:bg-[#28398c] p-2.5 px-8">الحصول على الخدمة</button>
                </div>
            </div>
            <div class="w-full lg:w-[500px] lg:h-[400px] order-1 lg:order-2"><img
                    src="../images/management.jpg"
                    alt="<h1><strong>web hosting</strong></h1>"
                    class="mx-auto aspect-auto w-[350px] h-[350px] lg:w-[400px] lg:h-[400px] object-cover rounded-full"
                    width="450" height="450"></div>
        </div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <div class="min-h-[300px] rounded-2xl"><img
                src="../images/management1.jpg"
                alt="<h1><strong>Project Management</strong></h1>" class="mx-auto"></div>
    </div>
</section>


<section class="w-full relative flex flex-col relative mb-10 mt-10">
    <div class="container px-5 m-auto">
        <h2 class="text-3xl mb-2 font-bold text-text text-center mx-auto max-w-[700px]">مميزات خدمة إدارة المشاريع المقدمة من لوجيسيل لاب</h2>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 mt-7 grid_area_template items-center">
            <div class="rounded-2xl img_wrapper w-full h-full"><img
                    src="../images/management2.jpg"
                    width="600" height="400" alt="Project Management Service" data-nuxt-img=""
                    formate="webp" class="relative object-contain h-full rounded-2xl mx-auto"></div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">01</span><span
                        class="line-clamp-1 flex-1">تنظيم فعّال للمشروعات</span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-9">إدارة المشاريع توفر وسيلة ممتازة لتنظيم وتنسيق مختلف الجوانب والأنشطة المرتبطة بمشروع معين. يمكن للمديرين والفرق أن يتتبعوا تقدم العمل ويواجهوا التحديات بفعالية </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">02</span><span
                        class="line-clamp-1 flex-1">زيادة التعاون</span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-9">تمكن خدمات إدارة المشاريع فريق العمل من التعاون بشكل أفضل عبر منصة واحدة مشتركة. يمكن لأعضاء الفريق مشاركة المعلومات، وتعيين المسؤوليات، ومتابعة التقدم بشكل أسهل </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">03</span><span
                        class="line-clamp-1 flex-1">إدارة المخاطر والمشكلات</span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-9">يمكن لخدمات إدارة المشاريع مساعدة في تحديد وإدارة المخاطر المحتملة والمشكلات التي يمكن أن تظهر أثناء تنفيذ المشروع. هذا يتيح للفرق التفكير مسبقًا في الحل </p>
            </div>
            <div class="rounded-lg pb-5 h-fit p-5 space-y-3 shadow border border-[#F5F5FC]">
                <h3 class="flex items-center gap-1 font-bold text-black text-xl"><span
                        class="rounded-2xl text-xl text-[#28398c] border-[#28398c] font-bold w-11 h-11 border border-solid flex justify-center items-center mr-2">04</span><span
                        class="line-clamp-1 flex-1">تحسين إدارة الموارد</span></h3>
                <p class="text-[#737195] line-clamp-3 font-semibold leading-9">تساعد خدمات إدارة المشاريع في توجيه الموارد بشكل فعال وفقًا لاحتياجات المشروع. هذا يساعد في تحقيق أقصى استفادة من الموارد المتاحة وتجنب الهدر والتكلفة الزائدة. </p>
            </div>
        </div>
    </div>
</section>


@endsection
