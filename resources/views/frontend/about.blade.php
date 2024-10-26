@extends('layouts.app')

@section('content')

<section class="w-full relative flex flex-col relative mb-16 mt-6">
    <div class="container px-5 m-auto">
        <div class="text-3xl md:text-4xl  capitalize font-montserrat text-center md:leading-[3.3rem] font-bold max-w-[930px]  max-h-fit mx-auto text-black xl:leading-[4rem]">
            <h1 class="text-5xl" style="line-height: 80px;"><strong>لوجيسيل لاب هي شريكك الموثوق لتحقيق نجاحك في العالم الرقمي!</strong></h1>
        </div>
        <p class="max-w-[1000px] text-xl mx-auto text-[#737195] text-center mt-5 leading-9">في شركة لوجسيل لاب، نؤمن بقوة التكنلوجيا في تحقيق النجاح، وندرك أهمية التواجد الرقمي للنهوض بالمشاريع ومضاعفة أرباحها، لذلك نقدم مجموعة شاملة من الخدمات المتكاملة والحلول الرقمية المبتكرة، التي تساعد عملاءنا على تحقيق أهدافهم بشكل فعال وتعزيز تواجدهم الرقمي بأفضل طريقة ممكنة.      </p>
        <div class="flex items-center gap-5 justify-center">
          <button style="border: 2px solid;" type="button"
              class="base-btn text-xl rounded-lg text-white hover:text-[#28398c] bg-[#28398c] hover:bg-white p-2.5 px-8 mt-12"><a href="/pages/contact-us">اتخذ خطوة</a> </button>
      </div>
    </div>
  </section>
  
  
  <section class="w-full relative flex flex-col relative mb-16">
    <div class="container px-5 m-auto">
      <div class="grid gap-5 grid-cols-1 lg:grid-cols-2 items-center">
  
        <div class="about-text space-y-3 order-2" data-aos="fade-right" data-aos-offset="300"
          data-aos-easing="ease-in-sine">
          <img src="../images/person-working-html-computer.jpg" class="max-h-[595px] w-[90%] rounded-xl" alt="">
        </div>
  
        <div class="about-text space-y-3 order-2" data-aos="fade-up" data-aos-duration="2000">
          <h2 class="text-[40px] md:leading-[55px] font-bold text-text">لوجيسيل لاب هي شريكك الموثوق لتحقيق نجاحك في
            العالم الرقمي! </h2>
          <div class="line-clamp-3 font-semibold text-[#737195] text-base leading-8" style="margin-bottom: 20px;">
            <p>في شركة
              لوجسيل لاب، نؤمن بقوة التكنلوجيا في تحقيق النجاح، وندرك أهمية التواجد الرقمي للنهوض بالمشاريع ومضاعفة أرباحها،
              لذلك نقدم مجموعة شاملة من الخدمات المتكاملة والحلول الرقمية المبتكرة، التي تساعد عملاءنا على تحقيق أهدافهم
              بشكل فعال وتعزيز تواجدهم الرقمي بأفضل طريقة ممكنة.</p>  
          </div>
  


            <x-button name="إكتشف أكثر" url="/contact-us" />
            
        </div>
  
      </div>
    </div>
  </section>
  
  
  
  <section class="w-full relative flex flex-col relative mb-10">
    <div class="container px-5 m-auto">
      <div class="w-full flex justify-between mt-12">
  
        <div class="block max-w-md p-6 bg-[#f9fdff] border border-gray-200 rounded-lg shadow">
          <div class="flex">
            <i class="fa-regular fa-message text-4xl mb-4"></i>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mr-2.5">رسالتنا</h5>
          </div>
          <p class="font-semibold text-[#737195] text-base text-justify leading-8" data-aos="fade-up" data-aos-anchor-placement="center-bottom">في شركة لوجيسيل لاب، نؤمن بأن التكنولوجيا هي جسر بين الأفكار وتحقيقها. نسعى لتقديم حلول برمجية مبتكرة وعالية الجودة تلبي احتياجات السوق وتتجاوز توقعات عملائنا. من خلال فريقنا المحترف وخبراتنا الواسعة، نضمن تقديم منتجات وخدمات تساهم في تعزيز النجاح والتميز.        </p>
        </div>
        <div class="block max-w-md p-6 bg-[#f9fdff] border border-gray-200 rounded-lg shadow">
          <div class="flex">
            <i class="fa-regular fa-eye text-4xl mb-4"></i>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mr-2.5">رؤيتنا</h5>
          </div>
          <p class="font-semibold text-[#737195] text-base text-justify leading-8" data-aos="fade-up" data-aos-anchor-placement="center-bottom"> نطمح لأن نكون الأفضل في مجالنا، ونسعى لتصبح لوجيسيل لاب أحد أكبر مصادر الحلول الرقمية بالمنطقة، من خلال تقديم خدمات بمواصفات عالمية، حتى نكون عنوانًا للجودة والإتقان والتميز.
          </p>
        </div>
  
        <div class="block max-w-md p-6 bg-[#f9fdff] border border-gray-200 rounded-lg shadow">
          <div class="flex">
            <i class="fa-solid fa-clipboard-check text-4xl mb-4"></i>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 mr-2.5">قيمنا</h5>
          </div>
          <p class="font-semibold text-[#737195] text-base text-justify leading-8" data-aos="fade-up" data-aos-anchor-placement="center-bottom">نؤمن أن الجودة والإبداع والتميز هم أساس النجاح، لذلك نجمع في فريقنا بين الخبرة الكبيرة والاابتكار والالتزام، للوصول إلى نتائج تتجاوز توقعاتكم.        </p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="w-full relative flex flex-col relative mb-8">
    <div class="container px-5 m-auto">
      <h2 class="text-[#141324] text-[42px] font-bold" data-aos="fade-up">بعض الحقائق عن شركة لوجيسيل لاب</h2>
      <p class="font-light font-semibold text-base text-[#737195] max-w-xl mb-10" data-aos="fade-up">نحن هنا لمساعدتك في العثور على أفضل طريقة.    </p>
  
      <div class="grid grid-cols-5 gap-5 xl:gap-12">
        <div class="col-span-5 lg:col-span-3 rounded-lg animated wow fadeInLeft animated">
          <img src="../images/hands.jpg" width="200" sizes="200px" class="w-full h-[410px] rounded-lg">
        </div>
        <div class="grid grid-cols-1 xs:grid-cols-2 gap-4 col-span-5 lg:col-span-2">
         
            <div class="fadeInUp border rounded-xl border-[#D8E8F8] bg-[#f9fcfe] max-h-[194px]" data-aos="fade-up">
              <div class="flex flex-col items-center justify-center gap-2 h-[150px] md:h-[180px] px-5">
                <p class="text-3xl md:text-5xl font-bold"><bdi>+200</bdi></p>
                <p class="font-semibold">عميل</p>
              </div>
            </div>
            <div class="fadeInDown border rounded-xl border-[#D8E8F8] bg-[#f9fcfe] max-h-[194px]" data-aos="fade-down">
              <div class="flex flex-col items-center justify-center gap-2 h-[150px] md:h-[180px] px-5">
                <p class="text-3xl md:text-5xl font-bold"><bdi>+500</bdi></p>
                <p class="font-semibold">مشروع</p>
              </div>
            </div>
            <div class="fadeInUp border rounded-xl border-[#D8E8F8] bg-[#f9fcfe] max-h-[194px]" data-aos="fade-up">
              <div class="flex flex-col items-center justify-center gap-2 h-[150px] md:h-[180px] px-5">
                <p class="text-3xl md:text-5xl font-bold"><bdi>+20</bdi></p>
                <p class="font-semibold">خدمة</p>
              </div>
            </div>
            <div class="fadeInDown border rounded-xl border-[#D8E8F8] bg-[#f9fcfe] max-h-[194px]" data-aos="fade-down">
              <div class="flex flex-col items-center justify-center gap-2 h-[150px] md:h-[180px] px-5">
                <p class="text-3xl md:text-5xl font-bold"><bdi>+100</bdi></p>
                <p class="font-semibold">فريق العمل</p>
              </div>
        
          </div>
  
        </div>
      </div>
    </div>
  </section>
  
  <section class="w-full relative flex flex-col relative p-8 mb-12 mt-16 bg-[#f8fafe]">
    <div class="container px-5 m-auto">
      <h2 class="text-[#141324] lg:text-[50px] font-bold mb-10" data-aos="fade-up">موثوق بنا من قبل أفضل الشركات    </h2>
  
      <div class="owl-carousel owl-theme owl-carousel-companies mb-6">
        <div class="item">
          <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/lorem-ipsum-logo-design-template-41292e364405af5884fab0899b980d3a_screen.jpg?ts=1680759649" class="w-[90px] h-auto rounded-full object-contain" style="width: 140px !important;" alt="">
        </div>
        <div class="item">
          <img src="https://img.freepik.com/vecteurs-libre/vecteur-degrade-logo-colore-oiseau_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.2116175301.1717545600&semt=ais_user" class="w-[90px] h-auto rounded-full object-contain" style="width: 140px !important;" alt="">
  
        </div>
        <div class="item">
          <img src="https://img.freepik.com/vecteurs-libre/vecteur-degrade-logo-colore-oiseau_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.2116175301.1717545600&semt=ais_user" class="w-[90px] h-auto rounded-full object-contain" style="width: 140px !important;" alt="">
  
        </div>
        <div class="item">
          <img src="https://img.freepik.com/vecteurs-libre/vecteur-degrade-logo-colore-oiseau_343694-1365.jpg?size=338&ext=jpg&ga=GA1.1.2116175301.1717545600&semt=ais_user" class="w-[90px] h-auto rounded-full object-contain" style="width: 140px !important;" alt="">
        </div>
        <div class="item">
          <img src="https://img.freepik.com/vecteurs-premium/modele-art-conception-logo-lorem-ipsum-ici_642953-596.jpg" class="w-[90px] h-auto rounded-full object-contain" style="width: 140px !important;" alt="">
        </div>
    </div>
    </div>
  </section>
  
  <section class="w-full relative flex flex-col relative mb-10">
    <div class="container px-6 m-auto">
      <div class="flex flex-col lg:flex-row gap-11">
        <div class="w-full max-w-[500px]">
          <h2 class="mb-2 text-5xl lg:leading-[3.7rem] text-[#141324] font-bold leading-[2.8rem]">
            لماذا نحن ؟
          </h2>
          <p class="mb-5 text-base text-[#737195] leading-8 font-semibold">في شركة لوجسيل لاب، نؤمن بقوة التكنلوجيا في تحقيق النجاح، وندرك أهمية التواجد الرقمي للنهوض بالمشاريع ومضاعفة أرباحها، لذلك نقدم مجموعة شاملة من الخدمات المتكاملة والحلول الرقمية المبتكرة، التي تساعد عملاءنا على تحقيق أهدافهم بشكل فعال وتعزيز تواجدهم الرقمي بأفضل طريقة ممكنة.        </p>

            <x-button name="الحصول على الخدمة" url="/contact-us" />
            
        </div>
  
  
        <div class="space-y-8 why_us_content w-full flex flex-col flex-1">
          <div
            class="bg-[#fffbec] p-5 rounded-xl items-start border gap-2 flex items-center max-w-[600px] w-full self-end"
            data-aos="fade-left">
            <div>
              <i class="fa-solid fa-medal text-4xl"></i>
            </div>
            <div>
              <h3 class="text-text font-bold text-2xl mb-2">رؤيتنا</h3>
              <p class="text-text text-sm w-full leading-8 font-semibold">نطمح لأن نكون الأفضل في مجالنا، ونسعى لتصبح لوجيسيل لاب أحد أكبر مصادر الحلول الرقمية بالمنطقة، من خلال تقديم خدمات بمواصفات عالمية، حتى نكون عنوانًا للجودة والإتقان والتميز.</p>
            </div>
          </div>
          <div
            class="bg-[#f2f9ff] p-5 rounded-xl items-start border gap-2 flex items-center max-w-[600px] w-full self-center"
            data-aos="fade-left">
            <div>
              <i class="fa-solid fa-shield-halved text-4xl"></i>
            </div>
            <div>
              <h3 class="text-text font-bold text-2xl mb-2">قيمنا</h3>
              <p class="text-text text-sm w-full leading-8 font-semibold">نؤمن أن الجودة والإبداع والتميز هم أساس النجاح، لذلك نجمع في فريقنا بين الخبرة الكبيرة والاابتكار والالتزام، للوصول إلى نتائج تتجاوز توقعاتكم.            </p>
            </div>
          </div>
          <div class="bg-[#fafafa] p-5 rounded-xl items-start border gap-2 flex items-center max-w-[600px] w-full"
            data-aos="fade-left">
            <div>
              <i class="fa-solid fa-bolt text-4xl"></i>
            </div>
            <div>
              <h3 class="text-text font-bold text-2xl mb-2">الأمان </h3>
              <p class="text-text text-sm w-full leading-8 font-semibold">نحن ندرك أهمية أمان موقعك على الويب. لذلك نحرص على توفير حماية قوية تشمل التشفير والمراقبة المستمرة لضمان أمان بياناتك ومعلوماتك.            </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="w-full relative flex flex-col relative mb-16 mt-10">
    <div class="container px-6 m-auto">
      <h2 class="text-[#141324] text-7xl font-bold mb-5" data-aos="fade-up">اكتشف خدماتنا</h2>
      <p class="font-light text-lg text-[#737195] font-semibold" data-aos="fade-up">حلول وخدمات شاملة ومتكاملة ترافقك خطوة خطوة
        حتى تحقيق نجاحك الرقمي</p>
  
      <div class="grid grid-col md:grid-cols-3 xl:grid-cols-4 gap-5 mt-8">
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i
              class="fa-solid fa-tablet-screen-button text-3xl	text-[#194db4] bg-[#eaeff8] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl mb-2">
              <a href="mobile-app-design">تصميم وتطوير التطبيقات</a>
            </h3>
          </div>
  
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">إذا كان هدفك هو امتلاك تطبيق لنشاطك التجاري، فبالتأكيد إن
            تصميم تطبيقات الجوال معنا في لوجيسيل لاب سيكون هو طريقك لتحقيق غايتك وزيادة مبيعاتك. نحن نقدم الحلول
            المبتكرة ورواد في تقديم خدمة تصميم تطبيقات الجوال على المنصات المختلفة: جوجل بلاي، آبل استور وهواوي بإحترافية
            ووفق المعايير الحديثة. وهذا لأن تصميم تطبيقات الجوال أصبح هو الإستثمار الأمثل للمستقبل.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-code text-3xl text-[#bc145d] bg-[#fbeaf0] px-[9px] py-1.5 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="web-design">تطوير المواقع</a>
            </h3>
          </div>
  
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">احصل على موقع الكتروني متميز يلبي احتياجاتك وينمّي عملك مع
            خدمة تصميم مواقع الكترونية من لوجيسيل لاب، فسواء كنت تدير متجرًا إلكترونيًا أو مطعماً أو وكالة أو غير ذلك،
            سنعمل معك جنباً إلى جنب لتحقيق رؤية علامتك التجارية ونجاحك على الإنترنت، من خلال موقع متجاوب يعمل بسلاسة على
            جميع الأجهزة وتصميم جذاب يلفت انتباه زوارك</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-people-group text-3xl text-[#24d360] bg-[#edfbf0] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="#">أنظمة الشركات</a>
            </h3>
          </div>
  
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن طريقة لتحسين أداء شركتك وتنظيم عملياتك بشكل فعال؟
            نقدم لك خدمة أنظمة الشركات (CRM & ERP) في لوجيسيل لاب، والتي تعد الحل المثالي لتلبية احتياجات أعمالك،. دعنا
            نساعدك في تحقيق النجاح وزيادة ربحيتك.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-brands fa-soundcloud text-3xl text-[#47b796] bg-[#eef8f5] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="cloud-hosting">الاستضافة السحابية</a>
            </h3>
          </div>
  
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اختر افضل استضافة سحابية لموقعك مع لوجيسيل لاب لتجربة
            فريدة ومتطورة تلبي احتياجاتك الشخصية والتجارية. نحن نقدم لك أفضل تجربة استضافة سحابية مع خدمات متميزة تمنحك
            الأمان والأداء الذي تحتاجه.</p>
        </div>
  
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-chart-line text-3xl text-[#4b5797] bg-[#eceef5] px-1.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="technical-analysis">التحليل الفني</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل ترغب في تحسين أداء مشروعك وتحقيق نجاح مستدام؟ هل تبحث عن
            الأدوات والإرشادات الصحيحة لاتخاذ قرارات استراتيجية مستنيرة؟ إذاً، فخدمة التحليل الفني للمشاريع التي تقدمها لك
            لوجيسيل لابهي ما تحتاجه!</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-palette text-3xl text-[#bc145d] bg-[#eaeff8] px-1.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="design-services">خدمات التصميم</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف عالم التصميم مع خدماتنا المميزة في مجالات التصميم
            الإبداعي. نحن نقدم خدمات التصميم التي تأخذ عملك إلى مستوى جديد من التميز والاحترافية. مع خدماتنا في التصميم،
            ستحصل على إبداع لا حدود له وأفكار مبتكرة تمنح علامتك التجارية مكانة استثنائية في السوق. انضم إلينا اليوم
            لتجربة عالم التصميم بأبهى صوره.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-database text-3xl text-[#2c8ba8] bg-[#eaf3f6] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="software-testing">اختبار البرمجيات</a>
            </h3>
          </div>
  
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن ضمان أقصى جودة لتطبيقاتك البرمجية؟ تقدم خدمة
            اختبار البرمجيات في لوجيسيل لاب حلاً استثنائيًا لضمان أن تكون تطبيقاتك دائمًا في أفضل حالة. يعتبر الاختبار
            البرمجيات مفتاح نجاح أي منتج برمجي، وهذا ما نقدمه بكفاءة عالية واحترافية لك.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-list-check text-3xl text-[#bd618e] bg-[#f9eff3] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="server-management">ادارة السيرفرات</a>
            </h3>
          </div>
  
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن الحل الذكي والاحترافي لتطويرتطبيقات الهاتف ومواقع
            الويب بسرعة وسهولة؟ هل ترغب في تحقيق التوازن المثالى بين التطوير والعمليات؟ إذاً خدمة ادارة السيرفرات من
            لوجيسيل لاب هي ما تحتاج. نحن نجمع بين تطوير البرمجيات وعمليات الإنتاج في عملية واحدة متكاملة. هدفنا هو
            توفير الكفاءة والسرعة والأمان في كل خطوة من عملية تطويرك.</p>
        </div>
  
  
  
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-laptop-code text-3xl text-[#e82726] bg-[#feebeb] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="web-hosting">استضافة الويب</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">هل تبحث عن منصة استضافة المواقع القوية تضمن لموقعك الإلكتروني
            الاستقرار والسرعة؟ توقف عن البحث، لأنك وصلت إلى لوجيسيل لاب، نقدم لك خدمة استضافة المواقع الفريدة والمحترفة
            التي تلبي احتياجات موقعك بكفاءة عالية، اكتشف خدمة الاستضافة من لوجيسيل لاب واستمتع بتجربة استضافة فريدة
            واحترافية.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-server text-3xl text-[#388dbe] bg-[#edf4fa] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="dedicated-server">الخادم الخاص</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">احصل على القوة والأمان مع خدمة الخادم المخصص من العالمية
            الحرة! إذا كنت تبحث عن أفضل حلاً لاستضافة موقعك على الويب أو تطبيقك الإلكتروني، فإن خدمة الخادم المخصص من
            لوجيسيل لاب هي خيارك الأمثل.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-list-check text-3xl text-[#d57d40] bg-[#fcf3ec] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="project-management">إدارة المشاريع</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">تخيل أن لديك فرصة لتحويل أفكارك ومشروعاتك إلى واقع ملموس، هذا
            هو دور خدمة إدارة المشاريع المقدمة من لوجيسيل لاب. نحن هنا لنجعل عملية تخطيط وتنفيذ المشاريع أسهل وأكثر
            فعالية من أي وقت مضى.انضم إلينا اليوم واحصل على فرصة حقيقية لتحقيق النجاح في مشاريعك وأفكارك.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-chart-simple text-3xl text-[#8b823a] bg-[#f4f3ec] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">تطوير الأعمال</h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">ابدأ رحلة النجاح مع خدمة تطوير الأعمال الاستثنائية! نحن هنا
            لنساعدك في تحقيق أهدافك وتحويل رؤيتك إلى واقع. تطوير الأعمال هو المفتاح لتحسين الكفاءة وزيادة الربحية. نقدم
            حلاً شاملاً يشمل استشارات مخصصة، وتحليل استراتيجي مدروس، وتصميم وتنفيذ الخطط التكتيكية.
          <p>
        </div>
  
  
  
  
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-headset text-3xl text-[#4d95ff] bg-[#eff5fe] px-2.5 py-1 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="technical-support">الدعم الفني</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف الدعم الفني المميز! نحن هنا لمساعدتك في حل جميع مشاكلك
            التقنية بكفاءة واحترافية. فريق الدعم الفني لدينا في لوجيسيل لاب مستعد دائمًا للإجابة على استفساراتك، حل
            المشاكل، وتوجيهك خطوة بخطوة إلى الحل. نحن نقدم دعماً متعدد القنوات لضمان أنك تحصل على المساعدة على الفور.</p>
        </div>
  
        <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow mr-5" data-aos="zoom-in">
  
          <div class="mb-3 flex items-center">
            <i class="fa-solid fa-ranking-star text-3xl text-[#019ea0] bg-[#ecf6f6] px-2 py-2 rounded-full ml-2.5"></i>
            <h3 class="text-text font-semibold text-lg lg:text-xl line-clamp-1 mb-2">
              <a href="digital-marketing">التسويق الإلكتروني</a>
            </h3>
          </div>
          <p class="font-normal text-[#737195] line-clamp-4 font-semibold leading-8	">اكتشف قوة التسويق الإلكتروني مع خدمتنا المبتكرة. نحن نقدم
            حلاً شاملاً لزيادة رؤيتك على الإنترنت وتعزيز نجاح عملك. مع التسويق الالكتروني، يمكنك الوصول إلى جمهور أوسع،
            وزيادة المبيعات، وتعزيز العلامة التجارية.</p>
        </div>
  
      </div>
  
    </div>
  </section>
  
  
  <section class="w-full relative flex flex-col relative mb-12">
    <div class="container m-auto p-10 grid md:grid-cols-2 grid-cols-1 mb-20 items-center bg-right">
      <div class="md:!order-2">
        <img width="500" height="500" src="../images/team.jpg" alt="map" class="mx-auto w-[300px] md:w-[500px] rounded-lg">
      </div>
      <div class="md:!order-1">
        <h2 class="text-[#141324] lg:text-[54px] font-bold mb-5" data-aos="fade-up">احصل علي استشارة مجانية      </h2>
        <p class="font-light text-lg text-[#737195] max-w-xl font-semibold leading-8" data-aos="fade-up">نقوم بإجراء دراسة وتحليل شاملين لمشروعك للوصول إلى المفاهيم الأساسية.      </p>

        <x-button name="ارسل  رسالتك" url="/contact-us" />

      </div>
      
     
    </div>
  </section>

@endsection
