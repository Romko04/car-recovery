document.addEventListener("DOMContentLoaded",()=>{class t{constructor(){this.header=document.querySelector(".header"),this.workSection=document.querySelector(".work"),this.steps=document.querySelector(".steps"),this.logo=document.querySelector(".logo-element"),this.achievementNumbers=document.querySelectorAll(".achievements__number"),this.portfolioContent=document.querySelector(".portfolio__content"),this.reviewsContent=document.querySelector(".reviews__content"),this.body=document.querySelector("body"),this.initSwiper(),this.initListeners(),this.initObservers()}initSwiper(){if(document.querySelector(".team__swiper.swiper")&&new Swiper(".team__swiper.swiper",{slidesPerView:1,spaceBetween:20,navigation:{nextEl:".swiper-button-next--team",prevEl:".swiper-button-prev--team"},breakpoints:{991.98:{spaceBetween:20,slidesPerView:3}},pagination:{el:".swiper-pagination--team",clickable:!0,dynamicBullets:!0}}),document.querySelector(".partners__swiper.swiper")&&new Swiper(".partners__swiper.swiper",{slidesPerView:2,spaceBetween:20,navigation:{nextEl:".swiper-button-next--partners",prevEl:".swiper-button-prev--partners"},breakpoints:{991.98:{spaceBetween:20,slidesPerView:3}},pagination:{el:".swiper-pagination--partners",clickable:!0,dynamicBullets:!0}}),document.querySelector(".portfolio__swiper.swiper")){let e=new Swiper(".portfolio__swiper.swiper",{slidesPerView:1,spaceBetween:20,navigation:{nextEl:".swiper-button-next--portfolio",prevEl:".swiper-button-prev--portfolio"},breakpoints:{991.98:{spaceBetween:20,slidesPerView:2}},autoplay:{delay:3e3,disableOnInteraction:!0},pagination:{el:".swiper-pagination--portfolio",clickable:!0,dynamicBullets:!0}});this.portfolioContent.addEventListener("mouseenter",()=>e.autoplay.stop()),this.portfolioContent.addEventListener("mouseleave",()=>e.autoplay.start())}if(document.querySelector(".reviews__swiper.swiper")){let e=new Swiper(".reviews__swiper.swiper",{slidesPerView:1,spaceBetween:20,navigation:{nextEl:".swiper-button-next--reviews",prevEl:".swiper-button-prev--reviews"},breakpoints:{991.98:{spaceBetween:20,slidesPerView:3}},autoplay:{delay:3e3,disableOnInteraction:!0},pagination:{el:".swiper-pagination--reviews",clickable:!0,dynamicBullets:!0}});this.reviewsContent.addEventListener("mouseenter",()=>e.autoplay.pause()),this.reviewsContent.addEventListener("mouseleave",()=>e.autoplay.start())}}createObserver(e,i,t=.5){e&&new IntersectionObserver((e,t)=>{e.forEach(e=>{e.isIntersecting&&(i(e.target),t.unobserve(e.target))})},{threshold:t}).observe(e)}initObservers(){this.createObserver(this.workSection,()=>this.activateSteps(),.4),this.createObserver(this.logo,e=>e.classList.add("in-view"),.5),this.createObserver(document.querySelector(".achievements__info"),()=>this.animateNumbers(),.15)}anchorHandler(t){try{var i=document.querySelector("header .menu__body");let s=.2,n=(i.classList.contains("active")&&this.toggleMenu(),window.pageYOffset),o=t.getAttribute("href").substring(1),e=document.getElementById(o),a=e.getBoundingClientRect().top,l=null;requestAnimationFrame(function e(t){null==l&&(l=t);let i=t-l,r=a<0?Math.max(n-i/s,n+a):Math.min(n+i/s,n+a);window.scrollTo(0,r);r!=n+a?requestAnimationFrame(e):location.hash="#"+o})}catch(e){console.log(e)}}animateNumbers(){this.achievementNumbers.forEach(e=>{let t=parseInt(e.getAttribute("data-target")),i=e.getAttribute("data-target").includes("15"),r=Math.ceil(t/100),s=0,n=setInterval(()=>{(s+=r)>=t&&(s=t,clearInterval(n)),e.textContent=i?s+" років":s+"+"},30)})}initListeners(){try{window.addEventListener("click",e=>{e.target.closest(".header__burger")&&this.toggleMenu(),e.target.closest(".anchor")&&(e.preventDefault(),this.anchorHandler(e.target))})}catch(e){console.log(e)}}toggleMenu(){e.target.closest(".header__burger").classList.toggle("active"),document.querySelector("header .menu__body").classList.toggle("active"),document.body.classList.toggle("body--lock")}activateSteps(){try{this.steps.classList.add("active")}catch(e){console.log(e)}}}new t});