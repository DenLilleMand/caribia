<?php

/**
 * Widget API: Intro_Widget class
 *
 * @package WordPress
 * @subpackage Widgets
 * @since 4.4.0
 */

/**
 * Adds Foo_Widget widget.
 */
class Intro_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'intro_widget',
            __( 'Intro widget', 'text_domain' ),
            array( 'description' => __( 'A intro widget, should output a image, header, sub-headers
            and a description for each subheader', 'text_domain' ), )
        );

        add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
    }

    /**
     * Upload the Javascripts for the media uploader
     */
    public function upload_scripts()
    {
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        wp_enqueue_script('upload_media_widget', get_stylesheet_directory_uri() . '/js/upload-media.js', array('jquery'));
        wp_enqueue_style('thickbox');
    }


    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance) {
        $title = $instance['title'];
        $top_image_url = $instance['top_image_url'];
        $bottom_image_url = $instance['bottom_image_url'];
        $description = $instance['description'];
        echo $args['before_widget'];
        ?>
            <div class="intro-widget-container">
                <div class="header">
                    <img class="img-responsive top-image" src="<?php echo $top_image_url ?>" >
                    <img class="img-responsive bottom-image" src="<?php echo $bottom_image_url ?>" >
                    <h2><?php echo $title ?></h2>
                </div>
                <div class="separator"></div>
                <div class="body">
                    <p>
                        <?php echo $description ?>
                    </p>
                </div>
            </div>

        <?php
        echo $args['after_widget'];
    }

    /**
     * @param array $instance
     * @return string
     */
    public function form($instance) {
        $title = !empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'text_domain' );
        $top_image_url = !empty($instance['top_image_url']) ? $instance['top_image_url'] : __('New top image url', 'text_domain');
        $bottom_image_url = !empty($instance['bottom_image_url']) ? $instance['bottom_image_url'] : __('New bottom image url', 'text_domain');
        $description = !empty( $instance['description'] ) ? $instance['description'] : __( 'New description', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id('top_image_url')); ?>"><?php _e(esc_attr('Top image url:')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('top_image_url')); ?>" name="<?php echo esc_attr( $this->get_field_name('top_image_url')); ?>" type="text" value="<?php echo esc_attr($top_image_url); ?>">
            <input type="button" name="upload-btn" id="upload-btn-top-image" class="button-secondary image-file-upload" value="Upload Image">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('bottom_image_url')); ?>"><?php _e(esc_attr('Bottom image url:')); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('bottom_image_url')); ?>" name="<?php echo esc_attr( $this->get_field_name('bottom_image_url') ); ?>" type="text" value="<?php echo esc_attr($bottom_image_url); ?>">
            <input type="button" name="upload-btn" id="upload-btn-bottom-image" class="button-secondary image-file-upload" value="Upload Image">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php _e( esc_attr( 'Description:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" type="text" value="<?php echo esc_attr( $description ); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = !empty($new_instance['title']) ? strip_tags($new_instance['title']) : '';
        $instance['top_image_url'] = !empty($new_instance['top_image_url']) ? strip_tags($new_instance['top_image_url']) : '';
        $instance['bottom_image_url'] = !empty($new_instance['bottom_image_url']) ? strip_tags($new_instance['bottom_image_url']) : '';
        $instance['description'] = !empty($new_instance['description']) ? strip_tags($new_instance['description']) : '';
        return $instance;
    }

}