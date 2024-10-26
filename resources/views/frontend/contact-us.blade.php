@extends('layouts.app')

@section('content')


<section class="w-full relative flex flex-col relative mb-10">
    <div class="container top-header grid md:grid-cols-2 grid-cols-1 mb-20 items-center bg-right mt-11 px-5 m-auto">
        <div class="md:!order-2">
            <img width="500" height="500" src="../images/team.jpg" alt="map" class="mx-auto w-[300px] md:w-[500px] rounded-lg">
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="md:!order-1">
            <h1 class="mb-3 text-2xl lg:text-4xl text-text font-bold max-w-[540px]">ابدأ استشارة مجانية</h1>
            <p class="text-[#737195] text-lg max-w-[270px] lg:max-w-[550px]">
                نقوم بإجراء دراسة وتحليل شاملين لمشروعك للوصول إلى المفاهيم الأساسية.</p>
            <div class="mt-10">

            <x-button name="ارسل  رسالتك" url="/contact-us" />

            </div>
        </div>
    </div>
</section>



<section class="w-full relative flex flex-col relative mb-16">
    <div class="container px-5 m-auto">
        <div class="form_wrapper en rounded-lg">
            <div class="lg:pe-20 space-y-5 lg:ps-9 z-10">
                <h2 class="text-4xl text-white lg:text-[56px] lg:leading-[4.5rem] lg:mt-20 2xl:text-7 font-bold">تواصل معنا للحصول على المزيد من المعلومات                </h2>
                <p class="mb-5 text-white">دعونا نبني أفضل الحلول الرقمية لعملك الآن!</p>
            </div>
            <div
                class="bg-white bg-opacity-10 z-10 space-y-2 border border-opacity-10 border-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
                <form>
                    <div class="input_wrapper">
                    <input  type="text"
                            id="full_name" name="full_name" placeholder="الاسم بالكامل "
                            class="font-light border border-opacity-10 rounded-lg mb-4">
                    </div>
                    <div class="input_wrapper">
                    <input type="email"
                            id="email_address" name="email" placeholder="بريدك الالكتروني "
                            class="font-light border border-opacity-10 rounded-lg mb-4">
                    </div>
                    <div class="phone_wrapper">
                        <div class="input_wrapper mb-0">
                            <div data-headlessui-state="" class="font-light z-50 phone_code_wrapper"></div>
                            <input type="phone" id="phone" name="phone"
                                placeholder="الهاتف " class="font-light border border-opacity-10 rounded-lg mx-1 mb-4">
                        </div>
                    
                    </div>
                    <div  class="input_wrapper">
                    <input  type="text"
                            id="subject" name="subject" placeholder=" الموضوع  "
                            class="font-light border border-opacity-10 rounded-lg mb-4">
                    </div>
                    <div class="input_wrapper undefined">
                    <textarea rows="4" id="message" name="message"
                            placeholder=" أدخل رسالتك هنا " class="font-light border-[#D7DAEA] rounded-lg mb-4"></textarea>
                        
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <button class="bg-[#2d447e] border border-white rounded-lg px-[30px] py-3 hover:bg-blue-700 text-white focus:outline-none focus:shadow-outline hover:bg-white hover:text-[#184aad] m-auto"
                            type="submit">إرسال الطلب</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
