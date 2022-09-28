<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'mn_term_fields');
function mn_term_fields()
{
    Container::make('term_meta', 'Term Meta')
        ->where('term_taxonomy', '=', 'category')
        ->or_where('term_taxonomy', '=', 'post_tag')
        ->add_fields([
            Field::make('checkbox', 'ask_use_term_meta', 'Aktifkan Custom SEO Term Meta?')
                ->set_option_value('yes'),
            Field::make('text', 'term_meta_title', 'Judul Term')
                ->set_conditional_logic([
                    [
                        'field' => 'ask_use_term_meta',
                        'value' => true,
                    ],
                ]),
            Field::make('textarea', 'term_meta_description', 'Deskripsi Term')
                ->set_conditional_logic([
                    [
                        'field' => 'ask_use_term_meta',
                        'value' => true,
                    ],
                ]),
            Field::make('checkbox', 'ask_use_term_color', 'Aktifkan Warna Background dan warna text pada category?')
                ->set_option_value('yes'),
            Field::make('color', 'term_color', 'Background Term')
                ->set_default_value('#2f0632')
                ->set_alpha_enabled(true)
                ->set_palette([
                    '#1e0520',
                    '#010b8b',
                    '#0be7fb',
                    '#fecc50',
                    '#ff6d69',
                    '#ffd802',
                ])
                ->set_conditional_logic([
                    [
                        'field' => 'ask_use_term_color',
                        'value' => true,
                    ],
                ]),
            Field::make('color', 'term_color_text', 'Text Term')
                ->set_default_value('#0be7fb')
                ->set_alpha_enabled(true)
                ->set_palette([
                    '#f5f5f5',
                    '#ffffff',
                    '#eeeeee',
                    '#000000',
                    '#333333',
                ])
                ->set_conditional_logic([
                    [
                        'field' => 'ask_use_term_color',
                        'value' => true,
                    ],
                ]),
        ]);
}
