<?php 
# Template Name: About page
get_header(); ?>
<section class="about">
    <div class="title__wrapper about__title-wrapper">
        <div class="container">
            <h1 class="about__title"><?php the_title(); ?></h1>
        </div>
    </div>
    <div class="about__mission-wrapper">
        <div class="container about__container">
            <div class="about__mission">
                <div class="about__mission-info">
                    <h2 class="about__mission-title title">
                        <?php echo carbon_get_the_post_meta('about_section_title'); ?></h2>
                    <p class="about__mission-text">
                        <?php echo carbon_get_the_post_meta('about_section_mission_text'); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="about__mission-image">
            <img src="<?php echo carbon_get_the_post_meta('about_section_mission_image'); ?>"
                alt="Команда працює разом" />
        </div>
    </div>
</section>
<section class="achievements">
    <div class="container achievements__container">
        <div class="title__wrapper">
            <h2 class="achievements__title title">
                <?php echo carbon_get_the_post_meta('achievements_section_title'); ?>
            </h2>
        </div>
        <div class="achievements__content">
            <div class="achievements__image">
                <img src="<?php echo carbon_get_the_post_meta('achievements_section_image'); ?>"
                    alt="Команда обговорює проект" />
            </div>
            <div class="achievements__info">
                <div class="achievements__item achievements__item--years">
                    <span class="achievements__number"
                        data-target="<?php echo carbon_get_the_post_meta('achievements_years_number'); ?>">
                        <?php echo carbon_get_the_post_meta('achievements_years_number'); ?>
                        0 років
                    </span>
                    <p class="achievements__text">
                        <?php echo carbon_get_the_post_meta('achievements_years_text'); ?>
                    </p>
                </div>
                <div class="achievements__item achievements__item--cars">
                    <span class="achievements__number"
                        data-target="<?php echo carbon_get_the_post_meta('achievements_cars_number'); ?>">
                        0
                    </span>
                    <p class="achievements__text">
                        <?php echo carbon_get_the_post_meta('achievements_cars_text'); ?>
                    </p>
                </div>
                <div class="achievements__item achievements__item--partners">
                    <span class="achievements__number"
                        data-target="<?php echo carbon_get_the_post_meta('achievements_partners_number'); ?>">
                        0
                    </span>
                    <p class="achievements__text">
                        <?php echo carbon_get_the_post_meta('achievements_partners_text'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
$values_title = carbon_get_theme_option('values_title');
$values_intro_text = carbon_get_theme_option('values_intro_text');
$values_list = carbon_get_theme_option('values_list');
$values_video_id = carbon_get_theme_option('crb_video_1_uk');
$values_video_url = $values_video_id ? wp_get_attachment_url($values_video_id) : '';

?>

<section class="values">
    <div class="container values__container">
        <div class="title__wrapper values__title-wrapper">
            <h2 class="title"><?php echo esc_html($values_title); ?></h2>
        </div>
    </div>
    <div class="container">
        <div class="values__content">
            <?php if ($values_video_url): ?>
            <div class="values__video">
                <video autoplay muted loop playsinline>
                    <source src="<?php echo esc_url($values_video_url); ?>" type="video/mp4" />
                    Ваш браузер не підтримує відео.
                </video>
            </div>
            <?php endif; ?>
            <div class="values__content-text">
                <?php if ($values_intro_text): ?>
                <div class="values__text-top">
                    <p><?php echo wp_kses_post($values_intro_text); ?></p>
                </div>
                <?php endif; ?>

                <?php if (!empty($values_list)): ?>
                <ul class="values__list">
                    <?php foreach ($values_list as $value): ?>
                    <li class="values__item">
                        <div class="values__item-icon">
                            <!-- SVG-іконка -->
                            <svg width="83" height="83" viewBox="0 0 83 83" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M24.4115 36.5952L37.0934 50.968C37.8356 51.8091 39.1451 51.8156 39.8955 50.9817L72.2672 15.0132"
                                    stroke="#22C55E" stroke-width="7.41072" stroke-linecap="round" />
                                <path
                                    d="M66.7184 28.9908C69.8475 35.2992 70.4988 42.5512 68.5436 49.3161C66.5884 56.0809 62.1689 61.8674 56.1569 65.5338C50.1449 69.2002 42.9771 70.4802 36.0677 69.1213C29.1583 67.7624 23.0091 63.8633 18.8333 58.1933C14.6575 52.5232 12.7584 45.4941 13.5107 38.4926C14.263 31.4911 17.612 25.0259 22.897 20.3724C28.1821 15.7189 35.0192 13.2151 42.0596 13.3551C49.1 13.4951 55.8322 16.2687 60.9281 21.1286"
                                    stroke="#22C55E" stroke-width="3.75339" />
                            </svg>
                        </div>
                        <div class="values__item-text">
                            <span class="values__item-text-bold"><?php echo esc_html($value['value_title']); ?></span>
                            <span><?php echo esc_html($value['value_description']); ?></span>
                        </div>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section
    style="background: url(<?php echo carbon_get_the_post_meta('benefits_section_image'); ?>) no-repeat top / cover;"
    class="benefits">
    <div class="benefits__content">
        <div class="container">
            <div class="title__wrapper">
                <h2 class="title">
                    <?php echo carbon_get_the_post_meta('benefits_section_title'); ?>
                </h2>
            </div>
        </div>
        <div class="container benefits__container">
            <?php
            $benefits = carbon_get_the_post_meta('benefits_list');
            if (!empty($benefits)) :
            ?>
            <ul class="benefits__list">
                <?php foreach ($benefits as $benefit) : ?>
                <li class="benefits__item">
                    <div class="benefits__item-icon">
                        <!-- Сюди можна додати кастомні SVG через Carbon Fields, якщо потрібно -->
                        <svg width="150" height="150" viewBox="0 0 150 150" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M44.1211 66.1362L67.4544 92.5806C68.5751 93.8507 70.5523 93.8604 71.6854 92.6014L130.607 27.1326"
                                stroke="#22C55E" stroke-width="5.66734" stroke-linecap="round" />
                            <path
                                d="M121.075 52.1451C126.792 63.6707 127.982 76.9205 124.41 89.2803C120.838 101.64 112.763 112.212 101.779 118.911C90.7947 125.61 77.6988 127.948 65.075 125.465C52.4511 122.983 41.2162 115.859 33.5869 105.499C25.9575 95.14 22.4878 82.2974 23.8622 69.5054C25.2367 56.7133 31.3556 44.901 41.0116 36.3988C50.6676 27.8966 63.1594 23.3222 76.0225 23.5779C88.8856 23.8337 101.186 28.9011 110.496 37.7804"
                                stroke="#22C55E" stroke-width="5.66734" />
                        </svg>
                    </div>
                    <div class="benefits__item-info">
                        <h3 class="benefits__item-title">
                            <?php echo esc_html($benefit['benefit_title']); ?>
                        </h3>
                        <p class="benefits__item-text">
                            <?php echo esc_html($benefit['benefit_text']); ?>
                        </p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php
$reviews = carbon_get_theme_option('reviews_items');

if ($reviews) :
?>
<section class="reviews">
    <div class="container reviews__container">
        <div class="title__wrapper reviews__title-wrapper">
            <h2 class="title">Відгуки</h2>
        </div>
    </div>
    <div class="reviews__content">
        <div class="container reviews__container">
            <div class="swiper reviews__swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($reviews as $review) : ?>
                    <div class="swiper-slide">
                        <div class="slide-content--reviews">
                            <div class="reviews__text-wrapper">
                                <div class="reviews__text-name-wrapper">
                                    <span
                                        class="reviews__text-name"><?php echo esc_html($review['review_name']); ?></span>
                                    <span
                                        class="reviews__text-job"><?php echo esc_html($review['review_job']); ?></span>
                                </div>
                                <?php if (!empty($review['review_logo'])) : ?>
                                <div class="reviews__logo-wrapper">
                                    <img src="<?php echo esc_url($review['review_logo']); ?>" alt="логотип клієнта"
                                        class="reviews__logo" />
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="reviews__value">
                                <?php echo esc_html($review['review_text']); ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination--reviews"></div>
        </div>
        <div class="swiper-button-prev swiper-button-prev--reviews">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0.292892 8.70711C-0.0976315 8.31658 -0.0976315 7.68342 0.292892 7.29289L6.65685 0.928932C7.04738 0.538408 7.68054 0.538408 8.07107 0.928932C8.46159 1.31946 8.46159 1.95262 8.07107 2.34315L2.41421 8L8.07107 13.6569C8.46159 14.0474 8.46159 14.6805 8.07107 15.0711C7.68054 15.4616 7.04738 15.4616 6.65685 15.0711L0.292892 8.70711ZM21 9H1V7H21V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
        <div class="swiper-button-next swiper-button-next--reviews">
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.7071 8.70711C21.0976 8.31658 21.0976 7.68342 20.7071 7.29289L14.3431 0.928932C13.9526 0.538408 13.3195 0.538408 12.9289 0.928932C12.5384 1.31946 12.5384 1.95262 12.9289 2.34315L18.5858 8L12.9289 13.6569C12.5384 14.0474 12.5384 14.6805 12.9289 15.0711C13.3195 15.4616 13.9526 15.4616 14.3431 15.0711L20.7071 8.70711ZM0 9H20V7H0V9Z"
                    fill="#F7FAFF" />
            </svg>
        </div>
    </div>
</section>
<?php endif; ?>

<section id="contact-form" class="promo">
    <div class="container promo__container">
        <div class="promo__container-wrapper">
            <div class="promo__image">
                <img src="<?php echo carbon_get_theme_option('promo_image'); ?>" alt="Доставка щастя" />
            </div>
            <div style="background: url(<?php echo esc_url(carbon_get_theme_option('promo_image') ); ?>) no-repeat center / cover;"
                class="promo__content-wrapper">
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
                    <form class="promo__form form">
                        <div class="form__group">
                            <input type="text" class="form__input" placeholder="Ваше ім’я" />
                        </div>
                        <div class="form__group">
                            <input type="tel" class="form__input" placeholder="Номер телефону" />
                        </div>
                        <div class="form__button-wrapper">
                            <button class="form__button button" type="submit">Надіслати</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>