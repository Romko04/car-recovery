<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'theme_options', 'Настройки сайта' )
        ->add_tab( __('Контакти'), [
            Field::make( 'text', 'eazycarsolutions_phone', 'Телефон' )
                ->set_default_value( '+380(98) 812 45 77' ),
            Field::make( 'text', 'eazycarsolutions_email', 'Email' )
                ->set_default_value( 'VIP@ecsolutions.com.ua' ),
            Field::make( 'text', 'eazycarsolutions_address', 'Адреса' )
                ->set_default_value( 'Київ, Ризька 73г' ),
            Field::make( 'text', 'eazycarsolutions_address-google', 'Адреса для Google Maps' ),
            Field::make( 'text', 'eazycarsolutions_working_hours', 'Час роботи' )
                ->set_default_value( 'Пн-Пт 9:00-18:00' ),
        ] )
        ->add_tab(__('Цінності'), array(
            Field::make('text', 'values_title', __('Заголовок цінностей')), // Заголовок цінностей
            Field::make('rich_text', 'values_intro_text', __('Вступний текст цінностей')), // Вступний текст
            Field::make('complex', 'values_list', __('Список цінностей'))
                ->add_fields(array(
                    Field::make('text', 'value_title', __('Заголовок цінності')),
                    Field::make('text', 'value_description', __('Опис цінності')),
                )),
                Field::make('file', 'crb_video_1_uk', __('Видео 1 (UA)'))
                ->set_type('video')
                ->set_width(50)
                ->set_help_text('Завантажте відео файл (.mp4, .webm)')
        ))
        ->add_tab(__('Відгуки'), array(
        Field::make('complex', 'reviews_items', __('Відгуки'))
            ->set_max(10) // Ліміт на 10 відгуків
            ->add_fields(array(
                Field::make('text', 'review_name', __('Ім\'я клієнта')),
                Field::make('text', 'review_job', __('Посада клієнта')),
                Field::make('image', 'review_logo', __('Логотип клієнта'))
                    ->set_value_type('url'),
                Field::make('textarea', 'review_text', __('Текст відгуку')),
            )),
        ))    
        ->add_tab(__('Форма'), array(
            Field::make('image', 'promo_image', __('Зображення'))
            ->set_value_type('url'),
            Field::make('rich_text', 'form_title', __('Заголовок')),
            ));