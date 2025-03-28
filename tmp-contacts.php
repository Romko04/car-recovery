<?php 
# Template Name: Contacts page
get_header(); ?>
<section class="contacts">
    <div class="title__wrapper contacts__title-wrapper">
        <div class="container">
            <h1 class="contacts__title"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="contacts__content">
        <div class="contacts__info">
            <ul class="social-list">
                <li class="social-item">
                    <a href="tel:<?php echo carbon_get_theme_option('eazycarsolutions_phone'); ?>" class="social-link">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6_125)">
                                <path
                                    d="M6.85166 2.49025C6.74097 2.34786 6.60126 2.23066 6.44179 2.14642C6.28232 2.06218 6.10676 2.01284 5.92676 2.00166C5.74676 1.99049 5.56644 2.01775 5.39778 2.08162C5.22912 2.14549 5.07598 2.24452 4.94853 2.37212L3.00978 4.31275C2.10416 5.22025 1.77041 6.50462 2.16603 7.6315C3.80805 12.2957 6.47909 16.5304 9.98104 20.0215C13.4721 23.5234 17.7068 26.1944 22.371 27.8365C23.4979 28.2321 24.7823 27.8984 25.6898 26.9927L27.6285 25.054C27.7561 24.9266 27.8552 24.7734 27.919 24.6048C27.9829 24.4361 28.0102 24.2558 27.999 24.0758C27.9878 23.8958 27.9385 23.7202 27.8542 23.5607C27.77 23.4013 27.6528 23.2616 27.5104 23.1509L23.1848 19.7871C23.0327 19.6691 22.8557 19.5872 22.6674 19.5476C22.479 19.508 22.284 19.5117 22.0973 19.5584L17.991 20.584C17.4429 20.721 16.8687 20.7137 16.3242 20.5629C15.7798 20.4121 15.2837 20.1229 14.8842 19.7234L10.2792 15.1165C9.87935 14.7172 9.58977 14.2212 9.43862 13.6767C9.28747 13.1322 9.27991 12.5579 9.41666 12.0096L10.4442 7.90337C10.4909 7.71662 10.4945 7.52169 10.4549 7.3333C10.4153 7.14492 10.3334 6.96799 10.2154 6.81587L6.85166 2.49025ZM3.53291 0.958373C3.86103 0.630153 4.25521 0.375492 4.6893 0.2113C5.12338 0.0471081 5.58743 -0.0228581 6.05063 0.00604739C6.51382 0.0349529 6.96557 0.162069 7.37587 0.378954C7.78618 0.59584 8.14565 0.897532 8.43041 1.264L11.7942 5.58775C12.411 6.38087 12.6285 7.414 12.3848 8.389L11.3592 12.4952C11.3061 12.7079 11.309 12.9307 11.3675 13.142C11.426 13.3532 11.5381 13.5457 11.6929 13.7009L16.2998 18.3077C16.4551 18.4629 16.648 18.5752 16.8596 18.6337C17.0712 18.6922 17.2943 18.6949 17.5073 18.6415L21.6117 17.6159C22.0928 17.4956 22.595 17.4862 23.0803 17.5885C23.5656 17.6909 24.0213 17.9022 24.4129 18.2065L28.7367 21.5702C30.291 22.7796 30.4335 25.0765 29.0423 26.4659L27.1035 28.4046C25.716 29.7921 23.6423 30.4015 21.7092 29.7209C16.7614 27.98 12.269 25.1474 8.56541 21.4334C4.85158 17.7303 2.01905 13.2386 0.27791 8.2915C-0.40084 6.36025 0.208535 4.28462 1.59604 2.89712L3.53478 0.958373H3.53291Z"
                                    fill="#1E3A8A" />
                            </g>
                            <defs>
                                <clipPath id="clip0_6_125">
                                    <rect width="30" height="30" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <?php echo carbon_get_theme_option('eazycarsolutions_phone'); ?>
                    </a>
                </li>
                <li class="social-item">
                    <a href="mailto:<?php echo carbon_get_theme_option('eazycarsolutions_email'); ?>"
                        class="social-link">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0.9375 6.5625V29.0625H29.0625V6.5625H0.9375ZM13.875 20.0156C14.2002 20.2575 14.5947 20.3882 15 20.3882C15.4053 20.3882 15.7998 20.2575 16.125 20.0156L17.5 18.9844L27.1875 26.25V27.1875H2.8125V26.25L12.5 18.9844L13.875 20.0156ZM15 18.5156L2.8125 9.375V8.4375H27.1875V9.375L15 18.5156ZM2.8125 11.7188L10.9375 17.8125L2.8125 23.9062V11.7188ZM27.1875 23.9062L19.0625 17.8125L27.1875 11.7188V23.9062Z"
                                fill="#1E3A8A" />
                        </svg>
                        <?php echo carbon_get_theme_option('eazycarsolutions_email'); ?>
                    </a>
                </li>
                <li class="social-item">
                    <a target="_blank"
                        href="<?php echo esc_url(carbon_get_theme_option('eazycarsolutions_address-google')); ?>"
                        class="social-link">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_6_135)">
                                <path
                                    d="M22.8113 16.7625C21.8288 18.7537 20.4975 20.7375 19.1363 22.5188C17.8449 24.198 16.4642 25.8066 15 27.3375C13.5358 25.8066 12.155 24.1981 10.8638 22.5188C9.5025 20.7375 8.17125 18.7537 7.18875 16.7625C6.195 14.7506 5.625 12.8662 5.625 11.25C5.625 8.7636 6.61272 6.37903 8.37087 4.62087C10.129 2.86272 12.5136 1.875 15 1.875C17.4864 1.875 19.871 2.86272 21.6291 4.62087C23.3873 6.37903 24.375 8.7636 24.375 11.25C24.375 12.8662 23.8031 14.7506 22.8113 16.7625ZM15 30C15 30 26.25 19.3388 26.25 11.25C26.25 8.26631 25.0647 5.40483 22.955 3.29505C20.8452 1.18526 17.9837 0 15 0C12.0163 0 9.15483 1.18526 7.04505 3.29505C4.93526 5.40483 3.75 8.26631 3.75 11.25C3.75 19.3388 15 30 15 30Z"
                                    fill="#1E3A8A" />
                                <path
                                    d="M15 15C14.0054 15 13.0516 14.6049 12.3483 13.9017C11.6451 13.1984 11.25 12.2446 11.25 11.25C11.25 10.2554 11.6451 9.30161 12.3483 8.59835C13.0516 7.89509 14.0054 7.5 15 7.5C15.9946 7.5 16.9484 7.89509 17.6516 8.59835C18.3549 9.30161 18.75 10.2554 18.75 11.25C18.75 12.2446 18.3549 13.1984 17.6516 13.9017C16.9484 14.6049 15.9946 15 15 15ZM15 16.875C16.4918 16.875 17.9226 16.2824 18.9775 15.2275C20.0324 14.1726 20.625 12.7418 20.625 11.25C20.625 9.75816 20.0324 8.32742 18.9775 7.27252C17.9226 6.21763 16.4918 5.625 15 5.625C13.5082 5.625 12.0774 6.21763 11.0225 7.27252C9.96763 8.32742 9.375 9.75816 9.375 11.25C9.375 12.7418 9.96763 14.1726 11.0225 15.2275C12.0774 16.2824 13.5082 16.875 15 16.875V16.875Z"
                                    fill="#1E3A8A" />
                            </g>
                            <defs>
                                <clipPath id="clip0_6_135">
                                    <rect width="30" height="30" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <?php echo carbon_get_theme_option('eazycarsolutions_address'); ?>
                    </a>
                </li>
                <li class="social-item">
                    <span class="social-link">
                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.5 27.5C22.4036 27.5 28 21.9036 28 15C28 8.09644 22.4036 2.5 15.5 2.5C8.59644 2.5 3 8.09644 3 15C3 21.9036 8.59644 27.5 15.5 27.5Z"
                                stroke="#1E3A8A" stroke-width="2" stroke-linejoin="round" />
                            <path d="M15.5086 7.5L15.5078 15.0055L20.8074 20.3051" stroke="#1E3A8A" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <?php echo carbon_get_theme_option('eazycarsolutions_working_hours'); ?>
                    </span>
                </li>
            </ul>
        </div>
        <div class="contacts__img-wrapper">
            <img src="<?php echo carbon_get_the_post_meta('contacts_image'); ?>" alt="Контакти"
                class="contacts__image" />
        </div>
    </div>
</section>
<section id="contact-form" class="promo">
    <div class="container promo__container">
        <div style="background: url(<?php echo esc_url(carbon_get_theme_option('promo_image') ); ?>) no-repeat center / cover;"
            class="promo__container-wrapper">
            <div class="promo__image">
                <img src="<?php echo carbon_get_theme_option('promo_image'); ?>" alt="Доставка щастя" />
            </div>
            <div class="promo__content-wrapper">
                <div class="promo__content">
                    <div class="promo__title-wrapper">
                        <h2 class="promo__title"><?php echo carbon_get_theme_option('form_title'); ?></h2>
                        <svg width="124" height="124" viewBox="0 0 124 124" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M36.4749 54.6727L55.399 76.1201C56.5197 77.3902 58.497 77.3999 59.6301 76.1409L107.97 22.4297"
                                stroke="#22C55E" stroke-width="5.66734" stroke-linecap="round" />
                            <path
                                d="M99.6489 43.3249C104.32 52.7427 105.293 63.5693 102.374 73.6687C99.4549 83.7681 92.8569 92.4068 83.8815 97.8804C74.9061 103.354 64.2052 105.265 53.89 103.236C43.5749 101.207 34.3947 95.3865 28.1606 86.9216C21.9265 78.4567 19.0913 67.9628 20.2144 57.5102C21.3375 47.0577 26.3374 37.4056 34.2274 30.4583C42.1175 23.5111 52.3248 19.7732 62.8355 19.9822C73.3462 20.1911 83.3968 24.3318 91.0045 31.5872"
                                stroke="#22C55E" stroke-width="5.66734" />
                        </svg>
                    </div>
                    <div class="promo__form form">
                        <?php echo do_shortcode('[contact-form-7 id="b1f289c" title="Контактна форма"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>