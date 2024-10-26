@extends('layouts.app')

@section('content')


<section class="w-full relative flex flex-col  mb-16 mt-10">
    <div class="container px-6 m-auto">
      <h2 class="text-[#141324] text-7xl font-bold mb-5" data-aos="fade-up">اكتشف خدماتنا</h2>
      <p class="font-light text-lg text-[#737195] font-semibold" data-aos="fade-up">حلول وخدمات شاملة ومتكاملة ترافقك خطوة خطوة حتى تحقيق نجاحك الرقمي</p>
  
      <div class="grid grid-col md:grid-cols-3 xl:grid-cols-4 gap-5 mt-8">
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-tablet-screen-button text-3xl	text-[#194db4] bg-[#eaeff8] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl mb-2">
              <a href="/services/mobile-app-design">تصميم وتطوير التطبيقات</a>
            </h3>
          </div>
          
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">إذا كان هدفك هو امتلاك تطبيق لنشاطك التجاري، فبالتأكيد إن تصميم تطبيقات الجوال معنا في لوجيسيل لاب سيكون هو طريقك لتحقيق غايتك وزيادة مبيعاتك. نحن نقدم الحلول المبتكرة ورواد في تقديم خدمة تصميم تطبيقات الجوال على المنصات المختلفة: جوجل بلاي، آبل استور وهواوي بإحترافية ووفق المعايير الحديثة. وهذا لأن تصميم تطبيقات الجوال أصبح هو الإستثمار الأمثل للمستقبل.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-code text-3xl text-[#bc145d] bg-[#fbeaf0] px-[9px] py-1.5 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/web-design">تطوير المواقع</a>
            </h3>
          </div>
         
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">احصل على موقع الكتروني متميز يلبي احتياجاتك وينمّي عملك مع خدمة تصميم مواقع الكترونية من لوجيسيل لاب، فسواء كنت تدير متجرًا إلكترونيًا أو مطعماً أو وكالة أو غير ذلك، سنعمل معك جنباً إلى جنب لتحقيق رؤية علامتك التجارية ونجاحك على الإنترنت، من خلال موقع متجاوب يعمل بسلاسة على جميع الأجهزة وتصميم جذاب يلفت انتباه زوارك</p>
        </div>
  
        {{-- <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-people-group text-3xl text-[#24d360] bg-[#edfbf0] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/#">أنظمة الشركات</a>
            </h3>
          </div>
         
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن طريقة لتحسين أداء شركتك وتنظيم عملياتك بشكل فعال؟ نقدم لك خدمة أنظمة الشركات (CRM & ERP) في لوجيسيل لاب، والتي تعد الحل المثالي لتلبية احتياجات أعمالك،. دعنا نساعدك في تحقيق النجاح وزيادة ربحيتك.</p>
        </div> --}}
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-brands fa-soundcloud text-3xl text-[#47b796] bg-[#eef8f5] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/cloud-hosting">الاستضافة السحابية</a>
            </h3>
          </div>
          
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اختر افضل استضافة سحابية لموقعك مع لوجيسيل لاب لتجربة فريدة ومتطورة تلبي احتياجاتك الشخصية والتجارية. نحن نقدم لك أفضل تجربة استضافة سحابية مع خدمات متميزة تمنحك الأمان والأداء الذي تحتاجه.</p>
        </div>
  
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-chart-line text-3xl text-[#4b5797] bg-[#eceef5] px-1.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/technical-analysis">التحليل الفني</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل ترغب في تحسين أداء مشروعك وتحقيق نجاح مستدام؟ هل تبحث عن الأدوات والإرشادات الصحيحة لاتخاذ قرارات استراتيجية مستنيرة؟ إذاً، فخدمة التحليل الفني للمشاريع التي تقدمها لك لوجيسيل لابهي ما تحتاجه!</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-palette text-3xl text-[#bc145d] bg-[#eaeff8] px-1.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/design-services">خدمات التصميم</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف عالم التصميم مع خدماتنا المميزة في مجالات التصميم الإبداعي. نحن نقدم خدمات التصميم التي تأخذ عملك إلى مستوى جديد من التميز والاحترافية. مع خدماتنا في التصميم، ستحصل على إبداع لا حدود له وأفكار مبتكرة تمنح علامتك التجارية مكانة استثنائية في السوق. انضم إلينا اليوم لتجربة عالم التصميم بأبهى صوره.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-database text-3xl text-[#2c8ba8] bg-[#eaf3f6] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/software-testing">اختبار البرمجيات</a>
            </h3>
          </div>
         
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن ضمان أقصى جودة لتطبيقاتك البرمجية؟ تقدم خدمة اختبار البرمجيات في لوجيسيل لاب حلاً استثنائيًا لضمان أن تكون تطبيقاتك دائمًا في أفضل حالة. يعتبر الاختبار البرمجيات مفتاح نجاح أي منتج برمجي، وهذا ما نقدمه بكفاءة عالية واحترافية لك.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-list-check text-3xl text-[#bd618e] bg-[#f9eff3] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/server-management">ادارة السيرفرات</a>
            </h3>
          </div>
         
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن الحل الذكي والاحترافي لتطويرتطبيقات الهاتف ومواقع الويب بسرعة وسهولة؟ هل ترغب في تحقيق التوازن المثالى بين التطوير والعمليات؟ إذاً خدمة ادارة السيرفرات من لوجيسيل لاب هي ما تحتاج. نحن نجمع بين تطوير البرمجيات وعمليات الإنتاج في عملية واحدة متكاملة. هدفنا هو توفير الكفاءة والسرعة والأمان في كل خطوة من عملية تطويرك.</p>
        </div>
  
  
  
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-laptop-code text-3xl text-[#e82726] bg-[#feebeb] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
                <a href="/services/web-hosting">استضافة الويب</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن منصة استضافة المواقع القوية تضمن لموقعك الإلكتروني الاستقرار والسرعة؟ توقف عن البحث، لأنك وصلت إلى لوجيسيل لاب، نقدم لك خدمة استضافة المواقع الفريدة والمحترفة التي تلبي احتياجات موقعك بكفاءة عالية، اكتشف خدمة الاستضافة من لوجيسيل لاب واستمتع بتجربة استضافة فريدة واحترافية.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-server text-3xl text-[#388dbe] bg-[#edf4fa] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/dedicated-server">الخادم الخاص</a>
              </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">احصل على القوة والأمان مع خدمة الخادم المخصص من لوجيسيل لاب! إذا كنت تبحث عن أفضل حلاً لاستضافة موقعك على الويب أو تطبيقك الإلكتروني، فإن خدمة الخادم المخصص من لوجيسيل لاب هي خيارك الأمثل.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-list-check text-3xl text-[#d57d40] bg-[#fcf3ec] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/project-management">إدارة المشاريع</a>
              </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">تخيل أن لديك فرصة لتحويل أفكارك ومشروعاتك إلى واقع ملموس، هذا هو دور خدمة إدارة المشاريع المقدمة من لوجيسيل لاب. نحن هنا لنجعل عملية تخطيط وتنفيذ المشاريع أسهل وأكثر فعالية من أي وقت مضى.انضم إلينا اليوم واحصل على فرصة حقيقية لتحقيق النجاح في مشاريعك وأفكارك.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-chart-simple text-3xl text-[#8b823a] bg-[#f4f3ec] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">تطوير الأعمال</h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">ابدأ رحلة النجاح مع خدمة تطوير الأعمال الاستثنائية! نحن هنا لنساعدك في تحقيق أهدافك وتحويل رؤيتك إلى واقع. تطوير الأعمال هو المفتاح لتحسين الكفاءة وزيادة الربحية. نقدم حلاً شاملاً يشمل استشارات مخصصة، وتحليل استراتيجي مدروس، وتصميم وتنفيذ الخطط التكتيكية.
          <p>
        </div>
  
  
  
  
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-headset text-3xl text-[#4d95ff] bg-[#eff5fe] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/technical-support">الدعم الفني</a>
              </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف الدعم الفني المميز! نحن هنا لمساعدتك في حل جميع مشاكلك التقنية بكفاءة واحترافية. فريق الدعم الفني لدينا في لوجيسيل لاب مستعد دائمًا للإجابة على استفساراتك، حل المشاكل، وتوجيهك خطوة بخطوة إلى الحل. نحن نقدم دعماً متعدد القنوات لضمان أنك تحصل على المساعدة على الفور.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-ranking-star text-3xl text-[#019ea0] bg-[#ecf6f6] px-2 py-2 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="/services/digital-marketing">التسويق الإلكتروني</a>
             </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف قوة التسويق الإلكتروني مع خدمتنا المبتكرة. نحن نقدم حلاً شاملاً لزيادة رؤيتك على الإنترنت وتعزيز نجاح عملك. مع التسويق الالكتروني، يمكنك الوصول إلى جمهور أوسع، وزيادة المبيعات، وتعزيز العلامة التجارية.</p>
        </div>
  
      </div>
  
    </div>
  </section>


@endsection
