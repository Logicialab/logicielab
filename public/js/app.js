let toggleBtn = document.querySelector("#navbar-toggle");
let collapse = document.querySelector("#navbar-collapse");

toggleBtn.onclick = () => {
    console.log("its come here");
    collapse.classList.toggle("hidden");
    collapse.classList.toggle("flex");
};


// let langBtn = document.querySelector('#lang-toggle');
// let collapseLang = document.querySelector("#collapse-lang");
// let rotateIcon = document.querySelector("#rotate-icon");

// console.log(collapseLang,'collapseLang');
// langBtn.onclick = () => {
//     if (collapseLang.classList.contains("hidden")) {
//         collapseLang.classList.remove("hidden");
//         collapseLang.classList.add("block");
//         rotateIcon.style.transform = 'rotate(180deg)';
//     } else {
//         collapseLang.classList.remove("block");
//         collapseLang.classList.add("hidden");
//         rotateIcon.style.transform = 'rotate(0deg)';
//     }
// };


const vm = new Vue({
    el: "#vm",
    data() {
        return {
            navLang: false,
            controls: false,
            muted: true,
            navItems: true,
            checkRecaptcha: false,
            info: {
                fullName: null,
                email: null,
                companyName: null,
                jobTitle: null,
                textMessage: null,
                captcha: null
            },
            messageSuccess: false
        }
    },
    watch: {
        // navLang(value) {
        //     console.log(value,'is here');
        //     this.navItems = value ? false : true;
        // },
        // navItems(value) {
        //     this.navLang = value ? false : true;
        // }
    },

    methods: {
        callbackCaptcha(e) {
            this.info['captcha'] = e
            // console.log('on this',e);
            if (e) {
                this.checkRecaptcha = true;
            }
        },

        disabledBtn() {
            let isDisabled = false;
            console.log("kdkdk");
            if (this.checkRecaptcha && this.info.fullName != undefined && this.info.email != undefined && this.info.textMessage != undefined) isDisabled = true;
            return isDisabled;
        },
        async submitContact() {
            // return 0;
            // if (!this.contact['captcha']) return 0
            //
            const url = window.location.host == "localhost:3033" ? "http://localhost:3033/contacts/send" : "https://iacheck.com/contacts/send";
            // console.log(this.contact);
            // this.loading.contact = true;
            try {
                const result = await axios.post(url, this.info);
                //this.loading.contact = false;
                this.messageSuccess = true;
                //setTimeout(() => { this.contactSend = false; }, 5000);
                grecaptcha.reset();
                this.info = {
                    fullName: null,
                    companyName: null,
                    email: null,
                    textMessage: null,
                    jobTitle: null,
                    captcha: null
                }
            } catch (error) {
                this.info = {
                    fullName: null,
                    companyName: null,
                    email: null,
                    textMessage: null,
                    jobTitle: null,
                    captcha: null
                }
                this.messageSuccess = false;
                console.log(error);
            }
        },
        displayControls(){
            this.controls = true;
            this.muted = false;
        }

    },

});


// add cookie to site web

    // var cookieName = "iacheck";
    // var cookieValue = "Website iacheck";
    // var cookieExpireDays = 30;

    // // when users click accept button
    // let acceptCookie = document.getElementById("acceptCookie");
    // let removeCookie = document.getElementById("removeCookie");
    // acceptCookie.onclick = function () {
    //     createCookie(cookieName, cookieValue, cookieExpireDays);
    // }
    // removeCookie.onclick = function () {
    //     createCookie(cookieName, ' ', cookieExpireDays);
    // }

    // // function to set cookie in web browser
    // let createCookie = function (cookieName, cookieValue, cookieExpireDays) {

    //     let currentDate = new Date();
    //     currentDate.setTime(currentDate.getTime() + (cookieExpireDays * 24 * 60 * 60 * 1000));
    //     let expires = "expires=" + currentDate.toGMTString();
    //     document.cookie = cookieName + "=" + cookieValue + ";" + expires + ";path=/";

    //     if (document.cookie) {
    //         document.getElementById("cookiePopup").style.display = "none";
    //     } else {
    //         alert("Unable to set cookie. Please allow all cookies site from cookie setting of your browser");
    //     }

    // }

    //  // get cookie from the web browser
    //  let getCookie = function (cookieName) {
    //     let name = cookieName + "=";
    //     let decodedCookie = decodeURIComponent(document.cookie);
    //     let ca = decodedCookie.split(';');
    //     for (let i = 0; i < ca.length; i++) {
    //         let c = ca[i];
    //         while (c.charAt(0) == ' ') {
    //             c = c.substring(1);
    //         }
    //         if (c.indexOf(name) == 0) {
    //             return c.substring(name.length, c.length);
    //         }
    //     }
    //     return undefined;
    // }

    //   // check cookie is set or not
    //   let checkCookie = function () {
    //     let check = getCookie(cookieName);
    //     if (check == undefined) document.getElementById("cookiePopup").style.display = "block";
    //     else document.getElementById("cookiePopup").style.display = "none";
    // }
    // setTimeout(() => {
    //     checkCookie();
    // }, 1000);



// var onloadCallback = function () {
//     if (window.location.pathname.includes('/bookDemo')) {
//         grecaptcha.render('g-recaptcha', {
//             'sitekey': '6LfKq_UjAAAAAMtZEbRv6NmFGpFCZXE-dFZI8yt0',
//             'callback': vm.callbackCaptcha,
//         });
//     }
// };





// if (window.location.pathname !== '/pages/buildpage/bookDemo') {



    gsap.registerPlugin(ScrollTrigger);

    // Define the timeline video
    // const vl = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".trigger-element-video",
    //         start: "top center",
    //         //bottom-=10% center
    //         //pin: true,
    //         end: "bottom 150x",
    //         scrub: 0.5, // 
    //         //markers: true,
    //         // duration: { min: 0.2, max: 3 },
    //         delay: 0.2,
    //     },
    // })

    var isDesktop = window.matchMedia("(min-width: 768px)").matches;


    // Add animations to the timeline video
    // if (isDesktop) {
    //     vl.to(".target-element-video", {
    //         width: "60%",
    //         ease: "power1.in",
    //         duration: 1,
    //         //delay:0.2

    //     });
    // }




    // var video = document.querySelector('.video-parent');
    // var button = document.querySelector('.button');

    // button.addEventListener('click', function() {
    //     togglePlayPause();
    // });

    // video.addEventListener('click', function() {
    //     togglePlayPause();
    // });

    // function togglePlayPause() {
    //     if (video.paused) {
    //         video.play();
    //         button.style.display = 'none';
    //     } else {
    //         video.pause();
    //         button.style.display = 'flex';
    //     }
    // }

    // var vid = document.getElementById("myVideo");
    // vid.muted = true;
    // document.querySelector('.unmuted').style.display = 'none';


    // function enableMute() {
    //     if (vid.muted) {
    //         vid.muted = false;
    //         document.querySelector('.muted').style.display = 'none';
    //         document.querySelector('.unmuted').style.display = 'block';
    //     } else {
    //         vid.muted = true;
    //         document.querySelector('.muted').style.display = 'block';
    //         document.querySelector('.unmuted').style.display = 'none';
    //     }
    //     // if (vid.requestFullscreen) {
    //     //  vid.requestFullscreen();
    //     // }
    // }



    ///////////////////////// add opacity to element-one
    // const ol = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".this-element-opacity",
    //         start: "top center",
    //         end: "bottom center",
    //         scrub: 1, // 
    //         //markers: true,
    //         // duration: { min: 0.2, max: 3 },
    //         delay: 0.2,
    //     },
    // });

    ///////////////////////// add opacity to element-one


    ///////////////////////////////////// hide elemnt one & display elemnt two



    // let headings = gsap.utils.toArray(".sections");
    // gsap.set('.sections', { y: 200, opacity: 0 });


    // var sectionsHeight = document.querySelector(".sections").offsetHeight;

    // let totalOffsetHeight = 0;

    // for (let index = 0; index < headings.length; index++) {
    //     const element = headings[index];

    //     totalOffsetHeight += element.offsetHeight
    // }

    // let video2 = document.querySelector('.video2');

    // const tlSection5 = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: "#section-parent",
    //         start: "top top",
    //         pin: true,
    //         pinSpacing: true,
    //         scrub: 1,
    //         //invalidateOnRefresh:true,
    //         //smoothChildTiming:true,
    //         // snap:{
    //         //     snapTo:"labelsDirectional",
    //         //     duration: 1,
    //         //     // ease: "none"
    //         // },
    //         end: () => totalOffsetHeight,
    //         //end: ()=> "+=" + 2 * document.querySelector("#section-parent").offsetHeight,

    //         //markers:true,
    //         id: "section-parent",
    //     }
    // })
    // end: ()=> "+=" + 1 * document.querySelector("#section5").offsetHeight,

    //tlSection5.to(pathSvgOne, {opacity: 1});

    // headings.forEach((heading, i) => {

    //     tlSection5.to(heading, { opacity: 1, y: 0, zIndex: 9999 });

    //     if (i == 0) {
    //         tlSection5.to(heading, { opacity: 1, y: 0, zIndex: 9999 })
    //     } else if (i == 1) {
    //         tlSection5.to(heading, { opacity: 1, y: 0, zIndex: 9999 })
    //     }
    //     else if (i == 2) {
    //         tlSection5.to(heading, { opacity: 1, y: 0, zIndex: 9999 })
    //     }
    //     //start video 2 whne i == 3
    //     else if (i == 3) {
    //         //tlSection5.to(heading, {opacity: 1, y: 0, onStart: video2.play()})
    //         tlSection5.to(heading, {
    //             opacity: 1, y: 0, zIndex: 9999,
    //             onStart: () => {
    //                 if (gsap.getProperty(heading, "opacity") === 1) {
    //                     video2.play();
    //                 }
    //             },
    //         });
    //     }
    //     else if (i == 4) {
    //         tlSection5.to(heading, { opacity: 1, y: 0, zIndex: 9999 })
    //     }

    //     if (i != 4) {
    //         tlSection5.to(heading, { opacity: 0, y: -100 });
    //     }

    // });

    ///////////////////////// play video 1 on scrollin down

    // let video1 = document.querySelector('.video1');

    // const tlvideo1 = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".target-video-1",
    //         start: "top 90px",
    //         end: "bottom center",
    //         //scrub: 1, // 
    //         //markers: true,
    //         // duration: { min: 0.2, max: 3 },
    //         delay: 0.2,
    //         onEnter: () => video1.play(),
    //     },
    // });
    //video1.play();
    // tlvideo1.to(video1, { play: () => video1.play() });




    //  var $owl = $('.owl-carousel-horizontal');

    // $owl.children().each(function (index) {
    //     $(this).attr('data-position', index); // NB: .attr() instead of .data()
    // });

    // $owl.owlCarousel({
    //     center: true,
    //     loop: false,
    //     items: 1,
    //     // mouseDrag: true,

    //     startPosition: 0,
    //     responsive: {
    //         0: {
    //             items: 3
    //         },
    //         600: {
    //             items: 3
    //         },
    //         1000: {
    //             items: 6
    //         }
    //     }
    // });

    //////////////////////

    // $('.brand-carousel').owlCarousel({
    //     loop:true,
    //     margin:10,
    //     autoplay:true,
    //     autoplayTimeout: 2000,
    //     animateOut: 'slideOutUp',
    //     animateIn: 'slideInUp',
    //     responsive:{
    //       0:{
    //         items:3
    //       },
    //       600:{
    //         items:2
    //       },
    //       1000:{
    //         items:4
    //       }
    //     }
    //   })

    $('.owl-carousel-client').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        rtl:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-carousel-brands').owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2000,
        autoplaySpeed: 2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-carousel-brands-rtl').owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout: 2000, 
        autoplaySpeed: 2000,
        autoplayHoverPause:true,
        rtl:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });

    $('.owl-carousel-companies').owlCarousel({
        items:4,
        loop:true,
        margin:10,
        rtl:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplaySpeed: 2000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:6
            }
        }
    });



    


    

    ////////////////// animation SGV

    // const svgsPath = gsap.utils.toArray('.svgAnimation path');
    // svgsPath.forEach((pathSvg, index) => {
    //     let pathLength = pathSvg.getTotalLength();
    //     //  console.log(pathLength,'pathLength pathLength');
    //     pathSvg.style.strokeDasharray = pathLength;
    //     pathSvg.style.strokeDashoffset = pathLength;

    //     setTimeout(() => {
    //         gsap.fromTo(pathSvg, {
    //             opacity: 1,
    //             strokeDashoffset: pathLength,
    //         }, {
    //             opacity: 1,
    //             duration: 3,
    //             repeat: -1,
    //             repeatDelay: 3,
    //             strokeDashoffset: - pathLength,
    //         })
    //     }, 1000);

    // });





    //////////////////////////////// slider image paltop - ipad phone
    // const tlIMG = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: ".trigger-images",
    //         start: "top 100px",
    //         end: "bottom center",
    //         scrub: 1.5, // 
    //         //duration: { min: 0.2, max: 2 },
    //         delay: 0.2,
    //         //markers: true,

    //     },
    // });

    // var isMobile = window.matchMedia("(max-width: 767px)").matches;


    // tlIMG.to(".target-image-laptop", { right: "-130px" })
    //     .to(".target-image-ipad", { right: "100px" })

    // //.to(".target-image-phone", {right : "680px"})
    // if (isDesktop) {
    //     tlIMG.to(".target-image-phone", { right: "680px" })
    // } else if (isMobile) {
    //     tlIMG.to(".target-image-phone", { right: "260px" })
    // }



    //////////////////////////////// hide and display header on footer   transform: 'translate3d(-140%)'
    // gsap.set('.header-section', {transform: 'translateY(-140%)'});

    // let tlheader = gsap.timeline({
    //     scrollTrigger: {
    //         trigger: '.section-footer',
    //         start: 'top bottom',
    //         end: 'bottom center',
    //         // markers: true,
    //         //scrub: 1,
    //         //pin: true,
    //         //pinSpacing: true,

    //     }
    // });

    // tlheader.to('.header-section', {onStart: $("#header").removeClass('nav-close')})


    // //tlheader.to('.header-section', {display: 'flex', transform: 'translateY(0%)', marginTop: '25px'})

    // if (isDesktop) {
    //     tlheader.fromTo('.header-section', {transform: 'translateY(-140%)', display: 'flex', marginTop: '25px' }, { transform: 'translateY(0%)', marginTop: '25px' });
    // } else if (isMobile) {
    //     tlheader.fromTo('.header-section', { transform: 'translateY(-170%)', display: 'block', marginTop: '15px' }, { transform: 'translateY(0%)', marginTop: '15px' });
    // }


    //section-footer

// }
