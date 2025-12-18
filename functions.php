<?php
/**
 * Theme Functions - CMS Labb 1 Resäventyr
 *
 * Denna fil innehåller all temafunktionalitet och setup:
 * 
 * 1. Tema-setup (add_theme_support, register_nav_menus)
 * 2. Skript och stilar (wp_enqueue_scripts)
 * 3. Widget-områden (register_sidebar)
 * 4. Egen widget för senaste inlägg med bilder
 * 5. Kontaktformulär-hantering
 * 6. Hjälpfunktioner för menyer
 * 
 * @package CMS_Labb1
 * @since 1.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Backward compatibility for wp_body_open()
 * Added in WordPress 5.2
 */
if (!function_exists('wp_body_open')) {
    function wp_body_open() {
        do_action('wp_body_open');
    }
}

/**
 * Theme Setup
 */
function cms_labb1_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo');
    add_theme_support('automatic-feed-links');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Huvudmeny', 'cms-labb1'),
    ));

    // Set content width
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'cms_labb1_setup');

/**
 * Enqueue scripts and styles
 */
function cms_labb1_scripts() {
    // Google Fonts - Playfair Display for headings, Source Sans 3 for body
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Source+Sans+3:wght@400;600;700&display=swap',
        array(),
        null
    );

    // Styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0');
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/style.css', array('bootstrap', 'font-awesome', 'google-fonts'), '1.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('theme-style'), '1.0');

    // Scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'cms_labb1_scripts');

/**
 * Register widget areas
 */
function cms_labb1_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'cms-labb1'),
        'id'            => 'sidebar-1',
        'description'   => __('Widget-område för sidobar', 'cms-labb1'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    // Custom widget area for footer or other areas
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'cms-labb1'),
        'id'            => 'footer-widgets',
        'description'   => __('Widget-område för sidfot', 'cms-labb1'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'cms_labb1_widgets_init');

/**
 * Custom Widget: Recent Posts with Image
 */
class CMS_Labb1_Recent_Posts_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'cms_labb1_recent_posts',
            __('Senaste inlägg med bild', 'cms-labb1'),
            array('description' => __('Visar de senaste inläggen med utvald bild', 'cms-labb1'))
        );
    }

    public function widget($args, $instance) {
        $title = !empty($instance['title']) ? $instance['title'] : __('Senaste inlägg', 'cms-labb1');
        $number = !empty($instance['number']) ? absint($instance['number']) : 5;

        echo $args['before_widget'];
        if ($title) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        $recent_posts = new WP_Query(array(
            'posts_per_page' => $number,
            'post_status' => 'publish',
        ));

        if ($recent_posts->have_posts()) {
            echo '<ul>';
            while ($recent_posts->have_posts()) {
                $recent_posts->the_post();
                echo '<li>';
                if (has_post_thumbnail()) {
                    echo '<a href="' . esc_url(get_permalink()) . '">';
                    the_post_thumbnail('thumbnail');
                    echo '</a>';
                }
                echo '<a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a>';
                echo '<span class="post-date">' . get_the_date() . '</span>';
                echo '</li>';
            }
            echo '</ul>';
            wp_reset_postdata();
        }

        echo $args['after_widget'];
    }

    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : '';
        $number = !empty($instance['number']) ? absint($instance['number']) : 5;
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php _e('Titel:', 'cms-labb1'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')); ?>"><?php _e('Antal inlägg:', 'cms-labb1'); ?></label>
            <input class="tiny-text" id="<?php echo esc_attr($this->get_field_id('number')); ?>" name="<?php echo esc_attr($this->get_field_name('number')); ?>" type="number" step="1" min="1" value="<?php echo esc_attr($number); ?>" size="3">
        </p>
        <?php
    }

    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['number'] = (!empty($new_instance['number'])) ? absint($new_instance['number']) : 5;
        return $instance;
    }
}

// Register the custom widget
function cms_labb1_register_widgets() {
    register_widget('CMS_Labb1_Recent_Posts_Widget');
}
add_action('widgets_init', 'cms_labb1_register_widgets');

/**
 * Customize excerpt length
 */
function cms_labb1_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'cms_labb1_excerpt_length');

/**
 * Customize excerpt more
 */
function cms_labb1_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'cms_labb1_excerpt_more');

/**
 * Add custom body classes
 */
function cms_labb1_body_classes($classes) {
    if (is_singular()) {
        $classes[] = 'singular';
    }
    return $classes;
}
add_filter('body_class', 'cms_labb1_body_classes');

/**
 * Fix nav menu classes - prevent multiple items from being marked as current
 * This removes false "current" classes from menu items
 */
function cms_labb1_fix_nav_menu_classes($classes, $item) {
    // If we're on a single post, category, tag, or archive,
    // only mark the blog page as current (if it's the posts page)
    if (is_singular('post') || is_category() || is_tag() || is_author() || is_date()) {
        // Remove current classes from regular pages
        if ($item->object == 'page') {
            $posts_page_id = get_option('page_for_posts');

            // If this menu item is NOT the posts page, remove current classes
            if ($item->object_id != $posts_page_id) {
                $classes = array_diff($classes, array(
                    'current-menu-item',
                    'current_page_item',
                    'current-menu-parent',
                    'current_page_parent',
                    'current-menu-ancestor',
                    'current_page_ancestor',
                ));
            }
        }
    }

    return $classes;
}
add_filter('nav_menu_css_class', 'cms_labb1_fix_nav_menu_classes', 10, 2);

/**
 * Handle contact form submission
 */
function cms_labb1_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['cms_labb1_contact_nonce']) || !wp_verify_nonce($_POST['cms_labb1_contact_nonce'], 'cms_labb1_contact_form')) {
        wp_die(__('Säkerhetskontroll misslyckades.', 'cms-labb1'));
    }

    // Sanitize and validate input
    $name = sanitize_text_field($_POST['contact_name']);
    $email = sanitize_email($_POST['contact_email']);
    $message = sanitize_textarea_field($_POST['contact_message']);

    // Get admin email
    $to = get_option('admin_email');
    $subject = sprintf(__('Kontaktformulär från %s', 'cms-labb1'), get_bloginfo('name'));
    $body = sprintf(__("Namn: %s\nE-post: %s\n\nMeddelande:\n%s", 'cms-labb1'), $name, $email, $message);
    $headers = array('Content-Type: text/html; charset=UTF-8', 'From: ' . $name . ' <' . $email . '>');

    // Send email
    $sent = wp_mail($to, $subject, nl2br($body), $headers);

    // Redirect back with message
    if ($sent) {
        wp_redirect(add_query_arg('contact', 'success', wp_get_referer()));
    } else {
        wp_redirect(add_query_arg('contact', 'error', wp_get_referer()));
    }
    exit;
}
add_action('admin_post_cms_labb1_contact_form', 'cms_labb1_handle_contact_form');
add_action('admin_post_nopriv_cms_labb1_contact_form', 'cms_labb1_handle_contact_form');

/**
 * Fallback menu if no menu is assigned
 */
function cms_labb1_fallback_menu() {
	echo '<ul class="menu">';

	// Home link - active on front page
	$home_class = (is_front_page()) ? ' class="current-menu-item"' : '';
	echo '<li' . $home_class . '><a href="' . esc_url(home_url('/')) . '">Hem</a></li>';

	// Blog page link - active on blog/home page (posts page)
	$posts_page_id = get_option('page_for_posts');
	if ($posts_page_id) {
		$blog_class = (is_home() || is_singular('post') || is_category() || is_tag() || is_author() || is_archive()) ? ' class="current-menu-item"' : '';
		echo '<li' . $blog_class . '><a href="' . esc_url(get_permalink($posts_page_id)) . '">' . esc_html(get_the_title($posts_page_id)) . '</a></li>';
	}

	// Get pages (excluding front page and posts page)
	$front_page_id = get_option('page_on_front');
	$exclude_ids = array_filter(array($front_page_id, $posts_page_id));

	$pages = get_pages(array(
		'sort_column' => 'menu_order',
		'exclude' => $exclude_ids,
	));

	foreach ($pages as $page) {
		$current = (is_page($page->ID)) ? ' class="current-menu-item"' : '';
		echo '<li' . $current . '><a href="' . esc_url(get_permalink($page->ID)) . '">' . esc_html($page->post_title) . '</a></li>';
	}

	echo '</ul>';
}
