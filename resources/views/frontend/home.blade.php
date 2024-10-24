@extends('layouts.app')

@section('content')
    <section class="w-full relative flex flex-col">
        <div class="container px-5 md:py-12 m-auto">
            <div class="flex flex-wrap w-full">
                <div class="flex flex-col items-center w-full md:mb-0 mb-20 text-center">
                    <h1 class="md:text-5xl text-5xl text-black mb-5"
                        style="font-weight: bold;font-family: Montserrat,sans-serif;">
                        مرحبا بك لدى شريكك المثالي لتكبير
                    </h1>
                    <h1 class="md:text-5xl text-5xl text-black mb-5"
                        style="font-weight: bold;font-family: Montserrat,sans-serif;">
                        وإنجاح مشروعك في العالم الرقمي
                    </h1>

                    <p class="font-bold text-lg text-[#737195] max-w-5xl ml-auto mr-auto my-3 leading-10">في شركة لوجسيل لاب،
                        نؤمن
                        بقوة التكنلوجيا في تحقيق النجاح، وندرك أهمية التواجد الرقمي للنهوض بالمشاريع ومضاعفة أرباحها، لذلك
                        نقدم لكم
                        خدمات شاملة بجودة عالية تجعل اختياركم لنا، هو خطوتكم الأولى نحو تحقيق النجاح الرقمي.</p>


                    <div class="flex justify-center rounded-lg bg-[#f8f8f8] w-5/12 p-2.5 mt-3">
                        <p
                            class="text-transparent bg-clip-text bg-gradient-to-r from-[#3336cc] to-[#f6361d] text-2xl font-bold">
                            لوجيسيل لاب هي شريكك الموثوق</p>
                    </div>

                </div>

                <div class="w-full flex justify-between mt-12">

                    <div data-aos="fade-up"
                        class="block max-w-md p-6 bg-[#f8f8f8] border border-gray-200 rounded-lg shadow">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                            <i class="fa-solid fa-user-shield"></i> الأمان
                        </h5>
                        <p class="font-normal text-gray-700 text-center text-lg">نسعى بجد لتقديم تكنولوجيا مبتكرة تحمي
                            معلومات عملائنا
                            بأمان فائق. انضم إلينا في رحلة التميز التكنولوجي حيث يلتقي الابتكار مع الأمان. </p>
                    </div>
                    <div data-aos="flip-up"
                        class="block max-w-md p-6 bg-[#f8f8f8] border border-gray-200 rounded-lg shadow">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"><i
                                class="fa-solid fa-bolt mr-2"></i>السرعة
                        </h5>
                        <p class="font-normal text-gray-700 text-center text-lg	">نؤمن بقوة التكنولوجيا في تطوير الأعمال،
                            لذا نقدم
                            خدمات سريعة وفعالة لتلبية احتياجات عملائنا على الفور. </p>
                    </div>

                    <div data-aos="fade-down"
                        class="block max-w-md p-6 bg-[#f8f8f8] border border-gray-200 rounded-lg shadow">

                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center"><i
                                class="fa-solid fa-ranking-star"></i> الجودة
                        </h5>
                        <p class="font-normal text-gray-700 text-center text-lg	">نحرص على تحقيق أعلى مستويات الجودة في كل
                            ما نقدمه من
                            خدمات ومنتجات لعملائنا، وذلك بفضل خبرتنا وفريقنا المتخصص. </p>
                    </div>
                </div>
                <!--
                    <div class="flex">
                      <button type="button" class="base-btn text-xl rounded-lg text-white bg-[#28398C] p-3 px-6 mt-8">Contact Us</button>
                    </div> -->

            </div>
        </div>
    </section>

    <section class="w-full relative flex flex-col mb-16">
        <div class="container px-5 m-auto">
            <div class="grid gap-5 grid-cols-1 lg:grid-cols-2 items-center">

                <div class="about-text space-y-3 order-2" data-aos="fade-right" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="../images/person-working-html-computer.jpg" class="max-h-[595px] w-[90%] rounded-xl"
                        alt="">
                </div>

                <div class="about-text space-y-3 order-2" data-aos="fade-up" data-aos-duration="2000">
                    <h2 class="text-[40px] md:leading-[55px] font-bold text-text">لوجيسيل لاب هي شريكك الموثوق لتحقيق نجاحك
                        في
                        العالم الرقمي! </h2>
                    <div class="line-clamp-3 font-semibold text-[#737195] text-base leading-8" style="margin-bottom: 20px;">
                        في شركة
                        لوجسيل لاب، نؤمن بقوة التكنلوجيا في تحقيق النجاح، وندرك أهمية التواجد الرقمي للنهوض بالمشاريع
                        ومضاعفة أرباحها،
                        لذلك نقدم مجموعة شاملة من الخدمات المتكاملة والحلول الرقمية المبتكرة، التي تساعد عملاءنا على تحقيق
                        أهدافهم
                        بشكل فعال وتعزيز تواجدهم الرقمي بأفضل طريقة ممكنة. </div>

                   

                    <x-button name="إكتشف أكثر" url="/contact-us" />

                </div>

            </div>
        </div>
    </section>

    <section class="w-full relative flex flex-col relative mb-16 mt-10">
        <div class="container px-6 m-auto">
            <h2 class="text-[#141324] text-7xl font-bold mb-5" data-aos="fade-up">اكتشف خدماتنا</h2>
            <p class="font-light text-lg text-[#737195] font-semibold" data-aos="fade-up">حلول وخدمات شاملة ومتكاملة ترافقك
                خطوة
                خطوة
                حتى تحقيق نجاحك الرقمي</p>

            <div class="grid grid-col md:grid-cols-3 xl:grid-cols-4 gap-5 mt-8">

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-tablet-screen-button text-3xl	text-[#194db4] bg-[#eaeff8] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl mb-2">
                            <a href="/services/mobile-app-design">تصميم وتطوير التطبيقات</a>
                        </h3>
                    </div>

                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">إذا كان هدفك هو امتلاك تطبيق
                        لنشاطك
                        التجاري، فبالتأكيد إن
                        تصميم تطبيقات الجوال معنا في لوجيسيل لاب سيكون هو طريقك لتحقيق غايتك وزيادة مبيعاتك. نحن نقدم الحلول
                        المبتكرة ورواد في تقديم خدمة تصميم تطبيقات الجوال على المنصات المختلفة: جوجل بلاي، آبل استور وهواوي
                        بإحترافية
                        ووفق المعايير الحديثة. وهذا لأن تصميم تطبيقات الجوال أصبح هو الإستثمار الأمثل للمستقبل.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-code text-3xl text-[#bc145d] bg-[#fbeaf0] px-[9px] py-1.5 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/web-design">تطوير المواقع</a>
                        </h3>
                    </div>

                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">احصل على موقع الكتروني متميز
                        يلبي
                        احتياجاتك وينمّي عملك مع
                        خدمة تصميم مواقع الكترونية من لوجيسيل لاب، فسواء كنت تدير متجرًا إلكترونيًا أو مطعماً أو وكالة أو
                        غير ذلك،
                        سنعمل معك جنباً إلى جنب لتحقيق رؤية علامتك التجارية ونجاحك على الإنترنت، من خلال موقع متجاوب يعمل
                        بسلاسة على
                        جميع الأجهزة وتصميم جذاب يلفت انتباه زوارك</p>
                </div>

                {{-- <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-people-group text-3xl text-[#24d360] bg-[#edfbf0] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="#">أنظمة الشركات</a>
                        </h3>
                    </div>

                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن طريقة لتحسين أداء
                        شركتك
                        وتنظيم عملياتك بشكل فعال؟
                        نقدم لك خدمة أنظمة الشركات (CRM & ERP) في لوجيسيل لاب، والتي تعد الحل المثالي لتلبية احتياجات
                        أعمالك،. دعنا
                        نساعدك في تحقيق النجاح وزيادة ربحيتك.</p>
                </div> --}}

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-brands fa-soundcloud text-3xl text-[#47b796] bg-[#eef8f5] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/cloud-hosting">الاستضافة السحابية</a>
                        </h3>
                    </div>

                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اختر افضل استضافة سحابية
                        لموقعك مع
                        لوجيسيل لاب لتجربة
                        فريدة ومتطورة تلبي احتياجاتك الشخصية والتجارية. نحن نقدم لك أفضل تجربة استضافة سحابية مع خدمات
                        متميزة تمنحك
                        الأمان والأداء الذي تحتاجه.</p>
                </div>

                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-chart-line text-3xl text-[#4b5797] bg-[#eceef5] px-1.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/technical-analysis">التحليل الفني</a>
                        </h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل ترغب في تحسين أداء مشروعك
                        وتحقيق
                        نجاح مستدام؟ هل تبحث عن
                        الأدوات والإرشادات الصحيحة لاتخاذ قرارات استراتيجية مستنيرة؟ إذاً، فخدمة التحليل الفني للمشاريع التي
                        تقدمها لك
                        لوجيسيل لابهي ما تحتاجه!</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-palette text-3xl text-[#bc145d] bg-[#eaeff8] px-1.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/design-services">خدمات التصميم</a>
                        </h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف عالم التصميم مع
                        خدماتنا
                        المميزة في مجالات التصميم
                        الإبداعي. نحن نقدم خدمات التصميم التي تأخذ عملك إلى مستوى جديد من التميز والاحترافية. مع خدماتنا في
                        التصميم،
                        ستحصل على إبداع لا حدود له وأفكار مبتكرة تمنح علامتك التجارية مكانة استثنائية في السوق. انضم إلينا
                        اليوم
                        لتجربة عالم التصميم بأبهى صوره.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-database text-3xl text-[#2c8ba8] bg-[#eaf3f6] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/software-testing">اختبار البرمجيات</a>
                        </h3>
                    </div>

                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن ضمان أقصى جودة
                        لتطبيقاتك
                        البرمجية؟ تقدم خدمة
                        اختبار البرمجيات في لوجيسيل لاب حلاً استثنائيًا لضمان أن تكون تطبيقاتك دائمًا في أفضل حالة. يعتبر
                        الاختبار
                        البرمجيات مفتاح نجاح أي منتج برمجي، وهذا ما نقدمه بكفاءة عالية واحترافية لك.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-list-check text-3xl text-[#bd618e] bg-[#f9eff3] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/server-management">ادارة السيرفرات</a>
                        </h3>
                    </div>

                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن الحل الذكي
                        والاحترافي
                        لتطويرتطبيقات الهاتف ومواقع
                        الويب بسرعة وسهولة؟ هل ترغب في تحقيق التوازن المثالى بين التطوير والعمليات؟ إذاً خدمة ادارة
                        السيرفرات من
                        لوجيسيل لاب هي ما تحتاج. نحن نجمع بين تطوير البرمجيات وعمليات الإنتاج في عملية واحدة متكاملة. هدفنا
                        هو
                        توفير الكفاءة والسرعة والأمان في كل خطوة من عملية تطويرك.</p>
                </div>



                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-laptop-code text-3xl text-[#e82726] bg-[#feebeb] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/web-hosting">استضافة الويب</a>
                        </h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن منصة استضافة
                        المواقع
                        القوية تضمن لموقعك الإلكتروني
                        الاستقرار والسرعة؟ توقف عن البحث، لأنك وصلت إلى لوجيسيل لاب، نقدم لك خدمة استضافة المواقع الفريدة
                        والمحترفة
                        التي تلبي احتياجات موقعك بكفاءة عالية، اكتشف خدمة الاستضافة من لوجيسيل لاب واستمتع بتجربة استضافة
                        فريدة
                        واحترافية.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-server text-3xl text-[#388dbe] bg-[#edf4fa] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/dedicated-server">الخادم الخاص</a>
                        </h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">احصل على القوة والأمان مع
                        خدمة
                        الخادم المخصص من العالمية
                        الحرة! إذا كنت تبحث عن أفضل حلاً لاستضافة موقعك على الويب أو تطبيقك الإلكتروني، فإن خدمة الخادم
                        المخصص من
                        لوجيسيل لاب هي خيارك الأمثل.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-list-check text-3xl text-[#d57d40] bg-[#fcf3ec] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="/services/project-management">إدارة المشاريع</a>
                        </h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">تخيل أن لديك فرصة لتحويل
                        أفكارك
                        ومشروعاتك إلى واقع ملموس، هذا
                        هو دور خدمة إدارة المشاريع المقدمة من لوجيسيل لاب. نحن هنا لنجعل عملية تخطيط وتنفيذ المشاريع أسهل
                        وأكثر
                        فعالية من أي وقت مضى.انضم إلينا اليوم واحصل على فرصة حقيقية لتحقيق النجاح في مشاريعك وأفكارك.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-chart-simple text-3xl text-[#8b823a] bg-[#f4f3ec] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">تطوير الأعمال</h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">ابدأ رحلة النجاح مع خدمة
                        تطوير
                        الأعمال الاستثنائية! نحن هنا
                        لنساعدك في تحقيق أهدافك وتحويل رؤيتك إلى واقع. تطوير الأعمال هو المفتاح لتحسين الكفاءة وزيادة
                        الربحية. نقدم
                        حلاً شاملاً يشمل استشارات مخصصة، وتحليل استراتيجي مدروس، وتصميم وتنفيذ الخطط التكتيكية.
                    <p>
                </div>




                <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-headset text-3xl text-[#4d95ff] bg-[#eff5fe] px-2.5 py-1 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="technical-support">الدعم الفني</a>
                        </h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف الدعم الفني المميز!
                        نحن هنا
                        لمساعدتك في حل جميع مشاكلك
                        التقنية بكفاءة واحترافية. فريق الدعم الفني لدينا في لوجيسيل لاب مستعد دائمًا للإجابة على استفساراتك،
                        حل
                        المشاكل، وتوجيهك خطوة بخطوة إلى الحل. نحن نقدم دعماً متعدد القنوات لضمان أنك تحصل على المساعدة على
                        الفور.</p>
                </div>

                <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">

                    <div class="mb-3 flex items-center">
                        <i
                            class="fa-solid fa-ranking-star text-3xl text-[#019ea0] bg-[#ecf6f6] px-2 py-2 rounded-full ml-2.5"></i>
                        <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                            <a href="digital-marketing">التسويق الإلكتروني</a>
                        </h3>
                    </div>
                    <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف قوة التسويق
                        الإلكتروني مع
                        خدمتنا المبتكرة. نحن نقدم
                        حلاً شاملاً لزيادة رؤيتك على الإنترنت وتعزيز نجاح عملك. مع التسويق الالكتروني، يمكنك الوصول إلى
                        جمهور أوسع،
                        وزيادة المبيعات، وتعزيز العلامة التجارية.</p>
                </div>

            </div>

        </div>
    </section>


    <section class="w-full relative flex flex-col relative mb-16">
        <div class="container px-6 m-auto">
            <h2 class="text-[#141324] text-6xl font-bold mb-10" data-aos="fade-up">اخر اعمالنا</h2>

            <div class="flex flex-wrap flex-row-reverse gap-11 p-7 bg-[#f7f9ff] rounded-lg">
                <div class="project_card">
                    <div class="project_card_content flex gap-8 flex justify-center">

                        <div class="project_details">
                            <h3 class="text-5xl font-bold text-[#141324] mb-6">خدمة التوصيل </h3>
                            <p class="text-[#737195] max-w-2xl leading-7">خدمة التوصيل هو تطبيق يوفر خدمات التوصيل للأفراد
                                الذين يتمتعون
                                بأعلى مستوى من الخصوصية والأمان.</p>
                            <div>
                                <div class="grid grid-cols-2 gap-8 mb-4 mt-4">
                                    <div>
                                        <h4 class="text-xl font-medium mb-2">التنزيلات</h4>
                                        <p class="font-bold">300k</p>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-medium mb-2">المنصات<br /></h4>
                                        <p class="font-black">جوجل بلاي & أبل ستور </p>
                                    </div>
                                    <div>
                                        <h4 class="text-xl font-medium mb-2">التقنيات<br /></h4>
                                        <div class="flex gap-2 items-center mt-1">
                                            <p>
                                                <i class="fa-brands fa-vuejs text-5xl"></i>
                                            </p>
                                            <p>
                                                <i class="fa-brands fa-swift text-5xl"></i>
                                            </p>

                                            <p>
                                                <i class="fa-brands fa-php text-5xl"></i>
                                            </p>
                                            <p>
                                                <i class="fa-brands fa-figma text-5xl"></i>
                                            </p>
                                            <p>
                                                <i class="fa-brands fa-android text-5xl"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <a href=""
                                    class="mt-11 flex items-center text-[#28398c] text-2xl font-medium text-lg gap-2">المزيد
                                    عن
                                    خدمة التوصيل<i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>

                        <div class="flex items-center" data-aos="zoom-in">
                            <img src="../images/delivery.jpg" width="500" height="500" alt="Delivery PickUp"
                                loading="lazy" class="max-h-[300px] object-contain aspect-[3/4]" />
                        </div>
                    </div>
                </div>

            </div>

            <div class="flex justify-center mt-6">

                <x-button name="عرض المزيد" url="/contact-us" />

            </div>



        </div>
    </section>


    <section class="w-full relative flex flex-col relative mb-24">
        <div class="container px-6 m-auto">
            <h2 class="text-[#141324] text-7xl font-bold mb-5" data-aos="fade-up">الأدوات والتقنيات</h2>
            <p class="font-light text-lg text-[#737195] max-w-xl" data-aos="fade-up">حول أفكارك إلى تقنيات متطورة </p>

            <div class="grid grid-col lg:grid-cols-2 gap-5 mt-8">


                <div class="block p-[2px] rounded-lg bg-gradient-to-r from-[#3336cc] to-[#f6361d] shadow">
                    <div class="p-6 bg-white rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mb-8">فرونت إند </h5>

                        <div class="flex justify-between flex-wrap ">
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.javascript.com/"><img src="../images/javaScript.jpeg"
                                    width="55" height="55" alt="JavaScript Front-End" loading="lazy"
                                    data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">JavaScript</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://react.dev/"><img src="../images/reactJs.jpg"
                                    width="55" height="55" alt="React js Front-End" loading="lazy"
                                    data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">React js</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://vuejs.org/"><img src="../images/vue.jpg" width="55"
                                    height="55" alt="Vue js Front-End" loading="lazy" data-nuxt-img=""
                                    sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Vue js</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://next-js.org/"><img src="../images/nextjs.jpg"
                                    width="55" height="55" alt="Vue js Front-End" loading="lazy"
                                    data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">NextJs</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://en.wikipedia.org/wiki/CSS"><img src="../images/angular.jpg"
                                    width="55" height="55" alt="Css Front-End" loading="lazy" data-nuxt-img=""
                                    sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Angular</h2>
                            </a>
                            <!-- <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                            class="flex flex-col items-center justify-center animated wow bounceIn animated" target="_blank"
                            href="https://en.wikipedia.org/wiki/HTML"><img src="../images/html.jpg" width="55" height="55"
                              alt="Html Front-End" loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                            <h2 class="mt-auto text-text text-sm">Html</h2>
                          </a>
                          <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                            class="flex flex-col items-center justify-center animated wow bounceIn animated" target="_blank"
                            href="https://bootstrap.io/"><img src="../images/bootstrap.jpg" width="55" height="55"
                              alt="bootstrap Front-End" loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                            <h2 class="mt-auto text-text text-sm">Bootstrap</h2>
                          </a> -->
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://tailwind.io/"><img src="../images/tailwind.jpg"
                                    width="55" height="55" alt="bootstrap Front-End" loading="lazy"
                                    data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">tailwindcss</h2>
                            </a>
                        </div>
                    </div>

                </div>



                <div class="block p-[2px] rounded-lg bg-gradient-to-r from-[#3336cc] to-[#f6361d] shadow">
                    <div class="p-6 bg-white rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mb-8">برمجة التطبيقات</h5>
                        <div class="flex flex-wrap gap-8"><a
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://developer.apple.com/swift/"><img src="../images/swift.jpeg"
                                    width="55" height="55" alt="Swift Mobile Development" loading="lazy"
                                    data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Swift</h2>
                            </a>
                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://developer.android.com/studio"><img
                                    src="../images/android-Studio.jpeg" width="55" height="55"
                                    alt="Android Studio Mobile Development" loading="lazy" data-nuxt-img=""
                                    sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Android Studio</h2>
                            </a>

                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://flutter.dev/"><img src="../images/flutter.jpeg"
                                    width="55" height="55" alt="Flutter Mobile Development" loading="lazy"
                                    data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Flutter</h2>
                            </a>
                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://kotlin.dev/"><img src="../images/kotlin.jpeg"
                                    width="55" height="55" alt="Dart Mobile Development" loading="lazy"
                                    data-nuxt-img="" sizes="55px" class="mb-2 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">kotlin</h2>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-col lg:grid-cols-2 gap-5 mt-8">

                <div class="block p-[2px] rounded-lg bg-gradient-to-r from-[#3336cc] to-[#f6361d] shadow">
                    <div class="p-6 bg-white rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mb-8">باك إند</h5>
                        <div class="flex flex-wrap gap-8">
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.php.net/">
                                <img src="../images/php.jpg" width="55" height="55" alt="PHP Back-End"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">PHP</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://nodejs.org/en">
                                <img src="../images/node.js.jpg" width="55" height="55" alt="Node js Back-End"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Node js</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.express-lang.org/en/">
                                <img src="../images/dotNet.png" width="55" height="55" alt="express Back-End"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Dot NET</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://blazor.com/en-us/">
                                <img src="../images/blazor.jpg" width="55" height="55" alt="Dot Net Back-End"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Blazor</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.python.org/">
                                <img src="../images/python.jpg" width="55" height="55" alt="Python Back-End"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Python</h2>
                            </a>
                            <a data-wow-duration="1.3s" data-wow-delay="0.3s"
                                class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.laravel.com/en/">
                                <img src="../images/laravel.jpg" width="55" height="55" alt="laravel Back-End"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">laravel</h2>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="block p-[2px] rounded-lg bg-gradient-to-r from-[#3336cc] to-[#f6361d] shadow">
                    <div class="p-6 bg-white rounded-lg">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mb-8 text-3xl">التصميم </h5>
                        <div class="flex flex-wrap gap-8">
                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href=""><img src="../images/adobe.jpg" width="55"
                                    height="55" alt="Adobe XD Design" loading="lazy" data-nuxt-img="" sizes="55px"
                                    class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Adobe XD</h2>
                            </a>
                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.adobe.com/eg_en/products/illustrator.html"><img
                                    src="../images/ai.jpg" width="55" height="55" alt="illustrator Design"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">illustrator</h2>
                            </a>
                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.adobe.com/mena_ar/products/photoshop.html"><img
                                    src="../images/photoShop.jpg" width="55" height="55" alt="Photoshop Design"
                                    loading="lazy" data-nuxt-img="" sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Photoshop</h2>
                            </a>
                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.figma.com/"><img src="../images/figma.jpg"
                                    width="55" height="55" alt="figma Design" loading="lazy" data-nuxt-img=""
                                    sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Figma</h2>
                            </a>
                            <a class="flex flex-col items-center justify-center animated wow bounceIn animated"
                                target="_blank" href="https://www.premiere.com/"><img src="../images/premiere.jpg"
                                    width="55" height="55" alt="figma Design" loading="lazy" data-nuxt-img=""
                                    sizes="55px" class="mb-2 h-16 rounded-xl">
                                <h2 class="mt-auto text-text text-sm">Adobe premiere</h2>
                            </a>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </section>






    <section class="w-full relative flex flex-col relative mb-10">
        <div class="container px-6 m-auto">
            <div class="flex flex-col lg:flex-row gap-11">
                <div class="w-full max-w-[600px]">
                    <h2 class="mb-4 text-5xl lg:leading-[3.7rem] text-[#141324] font-bold leading-[2.8rem]">
                        لماذا نحن ؟
                    </h2>
                    <p class="mb-5 font-semibold text-base text-[#737195] leading-8">في شركة لوجسيل لاب، نؤمن بقوة
                        التكنلوجيا في
                        تحقيق النجاح، وندرك أهمية التواجد الرقمي للنهوض بالمشاريع ومضاعفة أرباحها، لذلك نقدم مجموعة شاملة من
                        الخدمات
                        المتكاملة والحلول الرقمية المبتكرة، التي تساعد عملاءنا على تحقيق أهدافهم بشكل فعال وتعزيز تواجدهم
                        الرقمي بأفضل
                        طريقة ممكنة. </p>
                   

                <x-button name="الحصول على الخدمة" url="/contact-us" />
                    
                </div>


                <div class="space-y-8 why_us_content w-full flex flex-col flex-1">
                    <div class="bg-[#fffbec] p-5 rounded-xl items-start border gap-2 flex items-center max-w-[600px] w-full self-end"
                        data-aos="fade-left">
                        <div>
                            <i class="fa-solid fa-medal text-4xl"></i>
                        </div>
                        <div>
                            <h3 class="text-text font-bold text-2xl mb-2">رؤيتنا</h3>
                            <p class="text-text text-sm w-full font-semibold leading-8">نطمح لأن نكون الأفضل في مجالنا،
                                ونسعى لتصبح
                                لوجيسيل لاب أحد أكبر مصادر الحلول الرقمية بالمنطقة، من خلال تقديم خدمات بمواصفات عالمية، حتى
                                نكون عنوانًا
                                للجودة والإتقان والتميز.</p>
                        </div>
                    </div>
                    <div class="bg-[#f2f9ff] p-5 rounded-xl items-start border gap-2 flex items-center max-w-[600px] w-full self-center"
                        data-aos="fade-left">
                        <div>
                            <i class="fa-solid fa-shield-halved text-4xl"></i>
                        </div>
                        <div>
                            <h3 class="text-text font-bold text-2xl mb-2">قيمنا</h3>
                            <p class="text-text text-sm w-full font-semibold leading-8">نؤمن أن الجودة والإبداع والتميز هم
                                أساس النجاح،
                                لذلك نجمع في فريقنا بين الخبرة الكبيرة والاابتكار والالتزام، للوصول إلى نتائج تتجاوز
                                توقعاتكم. </p>
                        </div>
                    </div>
                    <div class="bg-[#fafafa] p-5 rounded-xl items-start border gap-2 flex items-center max-w-[600px] w-full"
                        data-aos="fade-left">
                        <div>
                            <i class="fa-solid fa-bolt text-4xl"></i>
                        </div>
                        <div>
                            <h3 class="text-text font-bold text-2xl mb-2">الأمان </h3>
                            <p class="text-text text-sm w-full font-semibold leading-8">نحن ندرك أهمية أمان موقعك على
                                الويب. لذلك نحرص
                                على توفير حماية قوية تشمل التشفير والمراقبة المستمرة لضمان أمان بياناتك ومعلوماتك. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full relative flex flex-col relative mb-10">
        <div class="container px-6 m-auto">
            <h2 class="text-[#141324] text-6xl font-bold mb-5 leading-[67px] mb-8" data-aos="fade-up"> <span
                    class="block">
                </span> ماذا يقول عملائنا عنا </h2>

            <div class="owl-carousel owl-carousel-client">
                <div class="item">
                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <img src="../images/doctor.jpg" class="h-[50px] w-auto max-w-full" style="width: auto;"
                            alt="">
                        <hr class="h-px my-4 bg-gray-600 border-1">
                        <div>
                            <p class="text-text text-xl leading-8 py-3 min-h-[180px] max-h-[180px] overflow-y-auto">
                                يتميزون بالاحترافية
                                والتفاني في تقديم الحلول التقنية المبتكرة التي تلبي احتياجات عملائهم بكفاءة عالية. كما أن
                                فريق العمل لديهم
                                يتمتع بالخبرة والمهارة في مجالات . </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <img src="../images/delivery.jpg" class="h-[50px] w-auto max-w-full" style="width: auto;"
                            alt="">
                        <hr class="h-px my-4 bg-gray-600 border-1">
                        <div>
                            <p class="text-center text-xl leading-8 py-3 min-h-[180px] max-h-[180px] overflow-y-auto">
                                أوصي بشدة باستخدام لوجيسيل لاب لأي شخص يبحث عن خدمة عالية الجودة أنصح بشدة بالتعامل معهم لمن
                                يبحث عن حلول
                                تقنية مبتكرة وموثوقة.</p>
                        </div>

                    </div>
                </div>


                <div class="item">
                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <img src="../images/doctor.jpg" class="h-[50px] w-auto max-w-full" style="width: auto;"
                            alt="">
                        <hr class="h-px my-4 bg-gray-600 border-1">
                        <div>
                            <p class="text-text text-xl leading-8 py-3 min-h-[180px] max-h-[180px] overflow-y-auto">
                                يتميزون بالاحترافية
                                والتفاني في تقديم الحلول التقنية المبتكرة التي تلبي احتياجات عملائهم بكفاءة عالية. كما أن
                                فريق العمل لديهم
                                يتمتع بالخبرة والمهارة في مجالات . </p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="block p-6 bg-white border border-gray-200 rounded-lg shadow">
                        <img src="../images/delivery.jpg" class="h-[50px] w-auto max-w-full" style="width: auto;"
                            alt="">
                        <hr class="h-px my-4 bg-gray-600 border-1">
                        <div>
                            <p class="text-center text-xl leading-8 py-3 min-h-[180px] max-h-[180px] overflow-y-auto">
                                أوصي بشدة باستخدام لوجيسيل لاب لأي شخص يبحث عن خدمة عالية الجودة أنصح بشدة بالتعامل معهم لمن
                                يبحث عن حلول
                                تقنية مبتكرة وموثوقة.</p>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="w-full relative flex flex-col relative mb-10">
        <div class="container px-6 m-auto">
            <div
                class="container grid grid-cols-1 lg:grid-cols-2 md:gap-8 lg:gap-12 overflow-hidden min-h-fit items-center pb-11 lg:pb-20">
                <div class="my-5">
                    <h2 class="my-5 text-4xl lg:text-6xl lg:leading-[4.8rem] text-text font-bold leading-[3.8rem]">نحن نعمل
                        مع أفضل
                        العملاء </h2>
                    <p class="mb-5 max-w-lg font-semibold leading-8 text-base text-[#737195]">عملاؤنا هم المحور الأساسي لكل
                        ما نقوم
                        به، ونحن نهتم بتلبية احتياجاتهم وتحقيق رضاهم في كل خطوة نخطوها، فنحن نقدر كل عميل لدينا ونسعى دائمًا
                        لتقديم
                        أفضل الخدمات لهم. </p>
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
@endsection
