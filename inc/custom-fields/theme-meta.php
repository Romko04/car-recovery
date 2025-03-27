<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

$language = pll_current_language();

// Отримання постів блогу
// Получение постов блога для украинского языка
$posts_blog_ua = get_posts([
    'post_type' => 'blog',
    'orderby' => 'date',
    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC',
    'numberposts' => -1,
    'lang' => 'uk',
]);

// Получение постов блога для русского языка
$posts_blog_ru = get_posts([
    'post_type' => 'blog',
    'orderby' => 'date',
    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC',
    'numberposts' => -1,
    'lang' => 'ru',
]);

// Получение постов сервисов для украинского языка
$posts_services_ua = get_posts([
    'post_type' => 'services',
    'orderby' => 'date',
    'order' => 'ASC',
    'numberposts' => -1,
    'lang' => 'uk',
]);

// Получение постов сервисов для русского языка
$posts_services_ru = get_posts([
    'post_type' => 'services',
    'orderby' => 'date',
    'order' => 'ASC',
    'numberposts' => -1,
    'lang' => 'ru',
]);

// Получение постов акций для украинского языка
$posts_sales_ua = get_posts([
    'post_type' => "sales",
    'orderby' => 'date',
    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC',
    'numberposts' => -1,
    'lang' => 'uk',
]);

// Получение постов акций для русского языка
$posts_sales_ru = get_posts([
    'post_type' => "sales",
    'orderby' => 'date',
    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC',
    'numberposts' => -1,
    'lang' => 'ru',
]);

$post_options_sales_ua = [];
if ($posts_sales_ua) {
    foreach ($posts_sales_ua as $post) {
        $post_options_sales_ua[$post->ID] = $post->post_title;
    }
}

$post_options_sales_ru = [];
if ($posts_sales_ru) {
    foreach ($posts_sales_ru as $post) {
        $post_options_sales_ru[$post->ID] = $post->post_title;
    }
}

$post_options_services_ua = [];
if ($posts_services_ua) {
    foreach ($posts_services_ua as $post) {
        $post_options_services_ua[$post->ID] = $post->post_title;
    }
}

$post_options_services_ru = [];
if ($posts_services_ru) {
    foreach ($posts_services_ru as $post) {
        $post_options_services_ru[$post->ID] = $post->post_title;
    }
}

// Создание массивов для выбора постов в блоге для каждого языка
$post_options_blog_ua = [];
if ($posts_blog_ua) {
    foreach ($posts_blog_ua as $post) {
        $post_options_blog_ua[$post->ID] = $post->post_title;
    }
}

$post_options_blog_ru = [];
if ($posts_blog_ru) {
    foreach ($posts_blog_ru as $post) {
        $post_options_blog_ru[$post->ID] = $post->post_title;
    }
}


Container::make('theme_options', 'Настройки сайта')
    ->add_tab(__('Общие'), [
        Field::make('text', 'phone', 'Текст телефона'),
        Field::make('text', 'phone_link', 'Ссылка на телефон'),
        Field::make('textarea', 'cart_uk', 'Корзина iframe (UA)')->set_help_text('Вставьте iframe, высота и ширина 100%'),
        Field::make('textarea', 'cart_ru', 'Корзина iframe (RU)')->set_help_text('Вставьте iframe, высота и ширина 100%'),
        Field::make('text', 'location_link_uk', 'Ссылка на местоположение (UA)'),
        Field::make('text', 'location_link_ru', 'Ссылка на местоположение (RU)'),
        Field::make('text', 'instagram', 'Ссылка на Instagram'),
        Field::make('rich_text', 'address_uk', 'Адрес (UA)'),
        Field::make('rich_text', 'address_ru', 'Адрес (RU)'),
        Field::make('text', 'telegram', 'Ссылка на Telegram'),
        Field::make('text', 'facebook', 'Ссылка на Facebook'),
        Field::make('text', 'viber', 'Ссылка на Viber'),
        Field::make('text', 'email', 'Email'),
        Field::make('image', 'logo_ru', 'Логотип (RU)')->set_value_type('url'),
        Field::make('complex', 'phones', 'Номера телефонов')
            ->add_fields('phone', [
                Field::make('rich_text', 'phone_uk', 'Текст телефона (UA)'),
                Field::make('text', 'phone_link_uk', 'Ссылка на телефон (UA)'),
                Field::make('rich_text', 'phone_ru', 'Текст телефона (RU)'),
                Field::make('text', 'phone_link_ru', 'Ссылка на телефон (RU)')
        ])
    ])
    ->add_tab(__('Бонус'), array(
        Field::make('text', 'bonus_title_uk', 'Заголовок (укр)'),
        Field::make('rich_text', 'bonus_descr_uk', 'Текст (укр)'),
        Field::make('text', 'bonus_link_uk', 'Ссылка на бонус (укр)'),
        Field::make('text', 'bonus_title_ru', 'Заголовок (рус)'),
        Field::make('rich_text', 'bonus_descr_ru', 'Текст (рус)'),
        Field::make('text', 'bonus_link_ru', 'Ссылка на бонус (рус)')
    ))
    ->add_tab(__('Гарантия'), array(
        Field::make('text', 'guarantee_title_ru', 'Заголовок (RU)'),
        Field::make('text', 'guarantee_title_uk', 'Заголовок (UK)'),
        Field::make('complex', 'guarantee_list', 'Пункты')
            ->add_fields(array(
                Field::make('image', 'guarantee_icon', 'Иконка')
                    ->set_value_type('url'),
                Field::make('rich_text', 'guarantee_descr_ru', 'Текст (RU)'),
                Field::make('rich_text', 'guarantee_descr_uk', 'Текст (UK)'),
            ))
            ->set_max(2)
    ))
    
    ->add_tab(__('Настройки блога'), [
        Field::make('text', 'title_seo_blog_ua', 'Заголовок SEO блога (UA)'),
        Field::make('text', 'title_seo_blog_ru', 'Заголовок SEO блога (RU)'),
        Field::make('text', 'desc_seo_blog_ua', 'Описание SEO блога (UA)'),
        Field::make('text', 'desc_seo_blog_ru', 'Описание SEO блога (RU)'),
        Field::make('text', 'blog_pagination', 'Количество постов блога'),
        Field::make('complex', 'blog_ua', 'Популярные в боковой панели (UA)')->add_fields([
            Field::make('select', 'blog_select', 'Выберите пост')->add_options($post_options_blog_ua),
        ]),
        Field::make('complex', 'blog_ru', 'Популярные в боковой панели (RU)')->add_fields([
            Field::make('select', 'blog_select', 'Выберите пост')->add_options($post_options_blog_ru),
        ]),
    ])
    ->add_tab(__('Настройки акций'), [
        Field::make('text', 'title_sales_blog_ua', 'Заголовок SEO акций (UA)'),
        Field::make('text', 'title_sales_blog_ru', 'Заголовок SEO акций (RU)'),
        Field::make('text', 'desc_sales_blog_ua', 'Описание SEO акций (UA)'),
        Field::make('text', 'desc_sales_blog_ru', 'Описание SEO акций (RU)'),
        Field::make('text', 'sales_pagination', 'Количество постов акций'),
        Field::make('complex', 'sales-uk', 'Список акций UA')->add_fields([
            Field::make('select', 'item', 'Выберите акцию')->add_options($post_options_sales_ua),
        ]),
        Field::make('complex', 'sales-ru', 'Список акций RU')->add_fields([
            Field::make('select', 'item', 'Выберите акцию')->add_options($post_options_sales_ru),
        ]),
    ])
    ->add_tab(__('Настройки сервисов'), [
        Field::make('text', 'title_services_blog_ua', 'Заголовок SEO сервисов (UA)'),
        Field::make('text', 'title_services_blog_ru', 'Заголовок SEO сервисов (RU)'),
        Field::make('text', 'desc_services_blog_ua', 'Описание SEO сервисов (UA)'),
        Field::make('text', 'desc_services_blog_ru', 'Описание SEO сервисов (RU)'),
        Field::make('text', 'services_pagination', 'Количество постов сервисов'),
    ])
    ->add_tab(__('Карта'), [
        Field::make('file', 'crb_video_1_uk', __('Видео 1 (UA)'))
            ->set_type('video')
            ->set_width(50),
        Field::make('text', 'crb_video_1_text_uk', __('Текст видео 1 (UA)'))
            ->set_width(50),
        Field::make('file', 'crb_video_1_ru', __('Видео 1 (RU)'))
            ->set_type('video')
            ->set_width(50),
        Field::make('text', 'crb_video_1_text_ru', __('Текст видео 1 (RU)'))
            ->set_width(50),
        Field::make('file', 'crb_video_2_uk', __('Видео 2 (UA)'))
            ->set_type('video')
            ->set_width(50),
        Field::make('text', 'crb_video_2_text_uk', __('Текст видео 2 (UA)'))
            ->set_width(50),
        Field::make('file', 'crb_video_2_ru', __('Видео 2 (RU)'))
            ->set_type('video')
            ->set_width(50),
        Field::make('text', 'crb_video_2_text_ru', __('Текст видео 2 (RU)'))
            ->set_width(50),
    ])
    ->add_tab(__('Форма отзывов'), [
        Field::make('text', 'not_valid', 'Текст "невалидно" - UA'),
        Field::make('text', 'succes_text', 'Текст "успешно" - UA'),
        Field::make('text', 'not_valid_ru', 'Текст "невалидно" - RU'),
        Field::make('text', 'succes_text_ru', 'Текст "успешно" - RU'),
        Field::make('text', 'not_valid_email', 'Текст "невалидный email" - UA'),
        Field::make('text', 'not_valid_email_ru', 'Текст "невалидный email" - RU'),
        Field::make('text', 'error_ua', 'Ошибка - UA'),
        Field::make('text', 'error_ru', 'Ошибка - RU'),
    ])
    ->add_tab(__('Часто задаваемые вопросы (FAQ)'), [
        Field::make('complex', 'faqs_list', 'Часто задаваемые вопросы')->add_fields([
            Field::make('text', 'faq_title_uk', 'Заголовок UA')->set_width(50),
            Field::make('text', 'faq_title_ru', 'Заголовок RU')->set_width(50),
            Field::make('textarea', 'faq_text_uk', 'Текст UA')->set_width(50),
            Field::make('textarea', 'faq_text_ru', 'Текст RU')->set_width(50),
        ]),
    ])
    ->add_tab(__('Уникальное торговое предложение (UTP)'), [
        Field::make('complex', 'utp_list', 'Список УТП')->add_fields([
            Field::make('image', 'utp_photo', 'Изображение')->set_value_type('url')->set_width(50),
            Field::make('textarea', 'utp_description_uk', 'Описание UA'),
            Field::make('textarea', 'utp_description_ru', 'Описание RU'),
        ]),
    ])
    ->add_tab(__('Схема работы'), [
        Field::make('complex', 'scheme', 'Схема работы')->add_fields([
            Field::make('text', 'item_uk', 'Элемент схемы UA'),
            Field::make('text', 'item_ru', 'Элемент схемы RU'),
        ]),
    ])
    ->add_tab(__('Дополнительно'), [
        Field::make('complex', 'additional-uk', 'Список сервисов UA')->add_fields([
            Field::make('select', 'item-uk', 'Выберите сервис')->add_options($post_options_services_ua),
        ]),
        Field::make('complex', 'additional-ru', 'Список сервисов RU')->add_fields([
            Field::make('select', 'item-ru', 'Выберите сервис')->add_options($post_options_services_ru),
        ]),
    ]);
