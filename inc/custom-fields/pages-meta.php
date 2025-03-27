<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

$language = pll_current_language();

$posts_services = get_posts([
    'post_type' => "services",
    'orderby' => 'date',
    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC',
    'numberposts' => -1,
    'offset' => -1,
    'category' => -1,
    'lang'        => $language,
]);

$posts_sales = get_posts([
    'post_type' => "sales",
    'orderby' => 'date',
    'order' => isset($_POST['date']) && $_POST['date'] === 'DESC' ? 'DESC' : 'ASC',
    'numberposts' => -1,
    'offset' => -1,
    'category' => -1,
    'lang'        => $language,
]);

$post_options_services = [];
$post_options_sales = []; 

if ($posts_sales) {
    foreach ($posts_sales as $post) {
        $post_options_sales[$post->ID] = $post->post_title; 
    }
}

if ($posts_services) {
    foreach ($posts_services as $post) {
        $post_options_services[$post->ID] = $post->post_title; 
    }
}

Container::make('post_meta', 'Настройки')
    ->where('post_id', 'IN', ['11', '71'])
    ->add_tab(__('Баннер'), array(
        Field::make('complex', 'hero_sales_list', 'Список скидок')
        ->add_fields(array(
            Field::make('text', 'hero_text', 'Заголовок'),
            Field::make('text', 'hero_link', 'Ссылка'),
            Field::make('image', 'hero_image', 'Изображение')
                ->set_value_type('url'),
        ))
            
    ))
    ->add_tab(__('Услуги'), array(
        Field::make('text', 'src_back', 'Фоновый текст'),
        Field::make('rich_text', 'src_title', 'Заголовок'),
        Field::make('text', 'view_text', 'Текст кнопки просмотра'),
        Field::make('complex', 'service__list', 'Список услуг')
            ->add_fields(array(
                Field::make('select', 'service_select', 'Выберите услугу')
                    ->add_options($post_options_services)
            ))
    ))
    ->add_tab(__('УТП'), array(
        Field::make('complex', 'utp__list', 'Список УТП')
            ->add_fields(array(
                Field::make('text', 'title', 'Заголовок'),
                Field::make('complex', 'adv__list', 'Список преимуществ')
                    ->add_fields(array(
                        Field::make('text', 'text', 'Текст'),
                    ))
            ))
    ))
    ->add_tab(__('О нас'), array(
        Field::make('text', 'abt_title', 'Заголовок'),
        Field::make('rich_text', 'abt_text', 'Текст'),
        Field::make('text', 'abt_back', 'Фоновый текст'),
        Field::make('image', 'abt_photo', 'Изображение')
            ->set_value_type('url')
            ->set_width(50),
        Field::make('image', 'abt_icon', 'Изображение')
            ->set_value_type('url')
            ->set_width(50),
        Field::make('text', 'abt_btn_text', 'Текст кнопки просмотра')
    ))
    ->add_tab(__('Видео YouTube'), array(
        Field::make('textarea', 'video_link', 'Ссылка на видео'),
        Field::make('image', 'video_previe', 'Предпросмотр видео')
            ->set_value_type('url')
            ->set_width(50)
    ))
    ->add_tab(__('Преимущества'), array(
        Field::make('text', 'title_advantages', 'Заголовок'),
        Field::make('text', 'years_advantages_title', 'Заголовок лет'),
        Field::make('text', 'years_advantages', 'Количество лет'),
        Field::make('text', 'clients_advantages_title', 'Заголовок клиентов'),
        Field::make('text', 'clients_advantages', 'Количество клиентов'),
        Field::make('text', 'specialist_advantages_title', 'Заголовок специалистов'),
        Field::make('text', 'specialist_advantages', 'Количество специалистов')
    ))
    ->add_tab(__('Мы обслуживаем'), array(
        Field::make('text', 'title_serve', 'Заголовок'),
        Field::make('complex', 'logos_serve', 'Логотипы')
            ->add_fields(array(
                Field::make('image', 'photo_serve', 'Логотип')
                    ->set_value_type('url')
                    ->set_width(50)
            ))
    ))
    ->add_tab(__('Наша команда'), array(
        Field::make('text', 'title_team', 'Заголовок'),
        Field::make('complex', 'team_list', 'Команда')
            ->add_fields(array(
                Field::make('image', 'specialist_team', 'Изображение специалиста')
                    ->set_value_type('url')
                    ->set_width(50),
                Field::make('text', 'specialist_name', 'Имя специалиста')
                    ->set_width(50),
                Field::make('text', 'specialist_experience', 'Опыт'),
                Field::make('text', 'post_title', 'Должность'),
                Field::make('text', 'post_number', 'Номер'),
                Field::make('text', 'post_number_link', 'Ссылка на номер')
            ))
    ))
    ->add_tab(__('Отзывы'), array(
        Field::make('rich_text', 'title_reviews', 'Заголовок'),
        Field::make('text', 'title_back', 'Фоновый текст'),
        Field::make('text', 'btn_reviews', 'Текст кнопки')
    ))
    ->add_tab(__('Блог'), array(
        Field::make('text', 'blog_ttl', 'Заголовок')
    ))
    ->add_tab(__('Обратная связь'), array(
        Field::make('text', 'feadback_ttl', 'Заголовок'),
        Field::make('textarea', 'feadback_txt', 'Подзаголовок')
    ))
    ->add_tab(__('Инструкция'), array(
        Field::make('text', 'instruction_ttl', 'Заголовок'),
        Field::make('complex', 'instruction_list', 'Список инструкций')
            ->add_fields(array(
                Field::make('image', 'instruction_image', 'Изображение')
                    ->set_value_type('url')
                    ->set_width(50),
                Field::make('text', 'instruction_lst_ttl', 'Текст')
                    ->set_width(50)
            ))
            ->set_max(3)
    ));

// Container::make('post_meta', 'Настройки отзывов')
//     ->where('post_id', 'IN', ['204', '196'])
//     ->add_fields(array(
//         Field::make('text', 'title_reviews', 'Заголовок'),
//         Field::make('textarea', 'subtitle_reviews', 'Подзаголовок'),
//         Field::make('text', 'fullname_reviews', 'Метка поля полного имени'),
//         Field::make('text', 'message_reviews', 'Метка поля сообщения'),
//         Field::make('text', 'rating_reviews', 'Метка поля рейтинга')
//     ));

Container::make('post_meta', 'Настройки')
    ->show_on_post_type(array('page'))
    ->show_on_template('template-portfolio.php')
    ->add_tab(__('Портфолио', 'text_domain'), array(
        Field::make('complex', 'prtf_list', 'Список портфолио')
            ->add_fields(array(
                Field::make('image', 'utf_photo', 'Изображение')
                    ->set_value_type('url')
                    ->set_width(50)
            ))
    ));

    Container::make('post_meta', __('Настройки страницы страхования', 'crb'))
    ->show_on_template('template-insurance.php')
    ->add_fields(array(
        Field::make('rich_text', 'insurance_heading', __('Заголовок', 'crb')),
        Field::make('text', 'insurance_description', __('Описание', 'crb')),
        Field::make('text', 'insurance_button_text', __('Текст кнопки', 'crb')),
        Field::make('text', 'documents_heading', __('Заголовок раздела документов', 'crb')),
        Field::make('image', 'document_image_1', __('Изображение документа 1', 'crb'))->set_value_type('url'),
        Field::make('image', 'document_image_2', __('Изображение документа 2', 'crb'))->set_value_type('url'),
        Field::make('image', 'document_image_3', __('Изображение документа 3', 'crb'))->set_value_type('url'),
        Field::make('image', 'document_image_4', __('Изображение документа 4', 'crb'))->set_value_type('url'),
        Field::make('text', 'green_card_heading', __('Заголовок "Зеленая карта"', 'crb')),
        Field::make('textarea', 'green_card_description', __('Описание "Зеленая карта"', 'crb')),
        Field::make('image', 'green_card_image', __('Изображение "Зеленая карта"', 'crb'))->set_value_type('url'),
        Field::make('text', 'autocivil_heading', __('Заголовок "Автоцивилка"', 'crb')),
        Field::make('textarea', 'autocivil_description', __('Описание "Автоцивилка"', 'crb')),
        Field::make('text', 'form_heading', __('Заголовок формы', 'crb')),
        Field::make('text', 'form_subheading', __('Подзаголовок формы', 'crb'))
    ));

?>
