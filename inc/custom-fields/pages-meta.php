<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;



Container::make('post_meta', 'Настройки')
->show_on_template('tmp-home.php')
    ->add_tab(__('Баннер'), array(
        Field::make('text', 'banner_title', __('Заголовок банера')),
        Field::make('rich_text', 'banner_text', __('Текст банера')),
        Field::make('image', 'banner_image', __('Зображення банера'))
        ->set_value_type('url'),
    ))
    ->add_tab(__('Наша команда'), array(
        Field::make('text', 'team_title', __('Заголовок')),
            Field::make('complex', 'team', __('Наша команда'))
                ->add_fields(array(
                    Field::make('text', 'team_name', __('Ім’я')),
                    Field::make('text', 'team_position', __('Посада')),
                    Field::make( 'text', 'team_member_qr-link', __('Посилання на QR') ),
                    Field::make( 'image', 'team_member_qr', __('Зображення QR' ))
                    ->set_value_type('url'),
                    Field::make('image', 'team_image', __('Зображення'))
                        ->set_value_type('url'),
                ))
    ))
    ->add_tab(__('Питання, які вирішуємо'), array(
        Field::make('text', 'issue_section_title', __('Заголовок секції')), // Заголовок секції
        Field::make('complex', 'issues_list', __('Питання, які вирішуємо'))
            ->add_fields(array(
                Field::make('image', 'issue_image', __('Зображення'))
                    ->set_value_type('url'),
                Field::make('text', 'issue_title', __('Заголовок')),
            )),
    ))
    ->add_tab(__('Як це працює?'), array(
        Field::make('rich_text', 'work_section_title', __('Заголовок секції')), // Заголовок секції
        Field::make('image', 'work_section_image', __('Зображення секції')) // Зображення для секції
            ->set_value_type('url'),
        Field::make('complex', 'work_steps', __('Кроки'))
        ->set_max(4)
            ->add_fields(array(
                Field::make('textarea', 'step_description', __('Опис кроку')), // Опис для кожного кроку
            )),
    ))
    ->add_tab(__('Наші Партнери'), array(
        Field::make('complex', 'partners_logos', __('Партнери'))
                ->add_fields(array(
                    Field::make('complex', 'logos', __('Логотипи'))
                        ->set_max(3) // Ліміт на 5 логотипів для кожного партнера
                        ->add_fields(array(
                            Field::make('image', 'logo', __('Логотип партнера'))
                                ->set_value_type('url'),
                        )),
                )),
    ))
    ->add_tab(__('Наші роботи'), array(
        Field::make('complex', 'portfolio_items', __('Портфоліо'))
            ->add_fields(array(
                Field::make('image', 'portfolio_image', __('Зображення портфоліо'))
                    ->set_value_type('url'),
            )),
    ))
    ->add_tab(__('SEO налаштування'), array(
        Field::make('text', 'home_page_title', __('Тайтл сторінки')),
        Field::make('textarea', 'home_page_description', __('Дескрипшн сторінки')),
    ));





Container::make('post_meta', 'Настройки')
    ->show_on_template('tmp-about.php')
    ->add_tab(__('Наша місія'), array(
        Field::make('text', 'about_section_title', 'Заголовок секції'),
        Field::make('rich_text', 'about_section_mission_text', 'Текст'),
        Field::make('image', 'about_section_mission_image', 'Зображення')
            ->set_value_type('url')
    ))
->add_tab(__('Наші досягнення'), array(
        Field::make('text', 'achievements_section_title', __('Заголовок секції')),
        Field::make('image', 'achievements_section_image', __('Зображення секції'))
            ->set_value_type('url'),
        Field::make('text', 'achievements_years_number', __('Число років')),
        Field::make('textarea', 'achievements_years_text', __('Текст для років')),
        Field::make('text', 'achievements_cars_number', __('Число відремонтованих автомобілів')),
        Field::make('textarea', 'achievements_cars_text', __('Текст для відремонтованих автомобілів')),
        Field::make('text', 'achievements_partners_number', __('Число задоволених партнерів')),
        Field::make('textarea', 'achievements_partners_text', __('Текст для задоволених партнерів')),
    ))
->add_tab(__('Ваші вигоди від співпраці'), array(
        Field::make('text', 'benefits_section_title', __('Заголовок секції')),
        Field::make('image', 'benefits_section_image', __('Зображення секції'))
            ->set_value_type('url'),
        Field::make('complex', 'benefits_list', __('Список вигод'))
            ->add_fields(array(
                Field::make('text', 'benefit_title', __('Заголовок вигоди')),
                Field::make('textarea', 'benefit_text', __('Текст вигоди')),
            )),
    ))
    ->add_tab(__('SEO налаштування'), array(
        Field::make('text', 'about_page_title', __('Тайтл сторінки')),
        Field::make('textarea', 'about_page_description', __('Дескрипшн сторінки')),
    ));


Container::make('post_meta', 'Настройки')
    ->show_on_template('tmp-contacts.php')
    ->add_fields(array(
        Field::make('image', 'contacts_image', 'Зображення')
    ->set_value_type('url')
    ))
    ->add_tab(__('SEO налаштування'), array(
        Field::make('text', 'contacts_page_title', __('Тайтл сторінки')),
        Field::make('textarea', 'contacts_page_description', __('Дескрипшн сторінки')),
    ));