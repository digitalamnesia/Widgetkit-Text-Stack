<?php

return array(

    'name' => 'widget/text-stack',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'text-stack',
        'label' => 'Text Stack',
        'core'  => true,
        'icon'  => 'plugins/widgets/text-stack/widget.svg',
        'view'  => 'plugins/widgets/text-stack/views/widget.php',
        'item'  => array('title', 'content', 'media', 'second_media'),
        'settings' => array(
            'width'             => '1-2',
            'align'             => 'right',
            'breakpoint'        => 'medium',
            'alternate'         => false,
            'gutter'            => true,
            'gutter_vertical'   => 'default',
            'divider'           => false,
            'panel'             => true,
            'content_align'     => true,
            'animation_media'   => 'none',
            'animation_content' => 'none',

            'media'             => true,
            'image_width'       => 'auto',
            'image_height'      => 'auto',
            'media_border'      => 'none',
            'media_overlay'     => 'icon',
            'overlay_animation' => 'fade',
            'media_animation'   => 'scale',
			
			#FIRST CONTENT
            'title'             => true,
            'content'           => true,
			'social_buttons'    => true,
            'title_size'        => 'panel',
            'text_align'        => 'left',
            'link'              => true,
            'link_style'        => 'button',
            'link_text'         => 'Read more',
            'badge'             => true,
            'badge_style'       => 'badge',
            'badge_position'    => 'panel',
			
			#SECOND CONTENT
			'second_media'		=> true,
			'second_title'      => true,
			'second_content'    => true,
			'text_width'			=> '1-2',
			'second_align'		=> 'right',
			'second_link'		=> true,
			'second_social_buttons'    => true,
            

            'link_target'       => false,
            'class'             => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('text-stack.edit', 'plugins/widgets/text-stack/views/edit.php', true);
        }

    )

);
