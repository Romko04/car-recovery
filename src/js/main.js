document.addEventListener("DOMContentLoaded", () => {
  class App {
    constructor() {
      this.header = document.querySelector(".header");
      this.workSection = document.querySelector(".work");
      this.steps = document.querySelectorAll(".step");
      this.logo = document.querySelector(".logo-element");
      this.initSwiper();
      this.initObservers();
    }

    initSwiper() {
      new Swiper(".team__swiper.swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: { nextEl: ".swiper-button-next--team", prevEl: ".swiper-button-prev--team" },
        breakpoints: { 991.98: { spaceBetween: 20, slidesPerView: 3 } },
      });

      new Swiper(".partners__swiper.swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: { nextEl: ".swiper-button-next--partners", prevEl: ".swiper-button-prev--partners" },
        breakpoints: { 991.98: { spaceBetween: 20, slidesPerView: 3 } },
      });

      new Swiper(".portfolio__swiper.swiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: { nextEl: ".swiper-button-next--portfolio", prevEl: ".swiper-button-prev--portfolio" },
        breakpoints: { 991.98: { spaceBetween: 20, slidesPerView: 2 } },
      });
    }
    createObserver(target, callback, threshold = 0.5) {
      if (!target) return;

      const observer = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              callback(entry.target);
              observer.unobserve(entry.target); // Спостерігаємо тільки один раз
            }
          });
        },
        { threshold }
      );

      observer.observe(target);
    }
    initObservers() {
      // Спостерігач для блоку з кроками
      this.createObserver(this.workSection, () => this.activateSteps(), 0.65);

      // Спостерігач для логотипу
      this.createObserver(this.logo, (el) => el.classList.add("in-view"), 0.5);
    }

    activateSteps() {
      try {
        this.steps.forEach((step) => {
          step.classList.add("in-view"); // Додаємо клас для анімації
        });
      } catch (error) {
        console.log(error);
      }
    }
  }

  new App();
});
