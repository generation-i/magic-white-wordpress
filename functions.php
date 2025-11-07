<?php
@ini_set('upload_max_size', '1024M');
@ini_set('post_max_size', '1024M');
@ini_set('max_execution_time', '300');

add_filter('big_image_size_threshold', '__return_false'); // removes 2560px limit

add_filter('wp_image_editors', function ($editors) {
    return ['WP_Image_Editor_GD'];
}, 10, 1);


function handle_contact_form_submission()
{
    if (isset($_POST['submit_contact_form'])) {
        global $wpdb;

        $table_name = $wpdb->prefix . 'contact_form_submissions';

        // Sanitize input values
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $message = sanitize_textarea_field($_POST['message']);

        if (empty($name) || empty($email) || empty($message)) {
            $_SESSION['contact_form_status'] = 'error';
            wp_redirect(home_url('/contact/'));
            exit;
        }

        // Email validation
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Redirect with error if email is not valid
            $_SESSION['contact_form_status'] = 'invalid_email';
            wp_redirect(home_url('/contact/'));
            exit;
        }

        $inserted = $wpdb->insert(
            $table_name,
            array(
                'name' => $name,
                'email' => $email,
                'message' => $message,
                'created_at' => current_time('mysql')
            )
        );

        if ($inserted) {
            $_SESSION['contact_form_status'] = 'success';
        } else {
            $_SESSION['contact_form_status'] = 'error';
        }

        wp_redirect(home_url('/contact/'));
        exit;
    }
}

function create_contact_form_table()
{

    global $wpdb;

    $table_name = $wpdb->prefix . 'contact_form_submissions'; // Example table name: wp_contact_form_submissions
    $charset_collate = $wpdb->get_charset_collate(); // For correct database character set and collation

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT(20) NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        message TEXT NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php'); // Load the upgrade functions
    dbDelta($sql); // This safely creates or updates the table
}
function start_session_for_contact_form()
{
    if (!session_id()) {
        session_start();
    }
}
function enqueue_custom_admin_styles()
{
    echo '<style>
        .pagination {
            padding: 10px;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
            padding: 6px 12px;
            background-color: #f1f1f1;
            border-radius: 5px;
            color: #333;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .pagination a:hover {
            background-color: #0073aa;
            color: white;
        }
        .pagination .current {
            background-color: #0073aa;
            color: white;
            padding: 6px 12px;
            border-radius: 5px;
        }
        .pagination .previous,
        .pagination .next {
            font-weight: normal;
            padding: 6px 10px;
        }
        .pagination .previous:hover,
        .pagination .next:hover {
            background-color: #0073aa;
            color: white;
        }
            .mb-3{
                margin-bottom: 3vh !important;
}
    </style>';
}

function display_contact_form_submissions()
{
    global $wpdb;

    // Set the number of records per page
    $records_per_page = 10;

    // Get the current page number from the query string, default to page 1
    $current_page = isset($_GET['paged']) ? (int) $_GET['paged'] : 1;

    // Calculate the offset for the query
    $offset = ($current_page - 1) * $records_per_page;

    // Get the total number of submissions
    $total_submissions = $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}contact_form_submissions");

    // Get the submissions for the current page
    $results = $wpdb->get_results(
        $wpdb->prepare(
            "SELECT * FROM {$wpdb->prefix}contact_form_submissions ORDER BY created_at DESC LIMIT %d OFFSET %d",
            $records_per_page,
            $offset
        )
    );

    // Display the page content
    echo '<div class="wrap">';
    echo '<h1 class="mb-3">Contact Form Submissions</h1>';

    if (empty($results)) {
        echo '<p>No submissions yet.</p>';
    } else {
        // Display the table
        echo '<table class="wp-list-table widefat fixed striped">';
        echo '<thead><tr>';
        echo '<th style="width: 20%;">Name</th>'; // Adjusted width
        echo '<th style="width: 25%;">Email</th>'; // Adjusted width
        echo '<th>Message</th>'; // Let message take the remaining space
        echo '<th style="width: 15%;">Date</th>'; // Adjusted width
        echo '</tr></thead>';
        echo '<tbody>';
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->message) . '</td>';
            echo '<td>' . esc_html($row->created_at) . '</td>';
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';

        // Display pagination controls
        $total_pages = ceil($total_submissions / $records_per_page);

        if ($total_pages > 1) {
            echo '<div class="pagination">';

            // Display "Previous" link
            if ($current_page > 1) {
                echo '<a href="?page=contact_form_submissions&paged=' . ($current_page - 1) . '">&laquo; Previous</a>';
            }

            // Display page numbers
            for ($i = 1; $i <= $total_pages; $i++) {
                if ($i == $current_page) {
                    echo '<span class="current">' . $i . '</span>';
                } else {
                    echo '<a href="?page=contact_form_submissions&paged=' . $i . '">' . $i . '</a>';
                }
            }

            // Display "Next" link
            if ($current_page < $total_pages) {
                echo '<a href="?page=contact_form_submissions&paged=' . ($current_page + 1) . '">Next &raquo;</a>';
            }

            echo '</div>';
        }
    }

    echo '</div>';
}



// Add custom menu item in the WordPress Admin Dashboard
function add_contact_form_menu_item()
{
    add_menu_page(
        'Contact Form Submissions',      // Page title
        'Enquires',      // Menu title
        'manage_options',                // Capability required to access
        'contact_form_submissions',      // Menu slug
        'display_contact_form_submissions', // Function to display the page
        'dashicons-phone',               // Phone icon (change this to the desired icon)
        20                               //     Position
    );
}
add_action('admin_menu', 'add_contact_form_menu_item');
add_action('admin_head', 'enqueue_custom_admin_styles');
add_action('after_setup_theme', 'create_contact_form_table');
add_action('init', 'start_session_for_contact_form');
add_action('init', 'handle_contact_form_submission');




//testimonial


// Register Custom Post Type: Testimonial
// Register Testimonial CPT
function create_testimonial_cpt()
{
    $labels = array(
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'menu_name' => 'Testimonials',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'new_item' => 'New Testimonial',
        'view_item' => 'View Testimonial',
        'all_items' => 'All Testimonials',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-testimonial',
        'supports' => array('title'),
        'has_archive' => false,
        'rewrite' => array('slug' => 'testimonials'),
    );

    register_post_type('testimonial', $args);
}
add_action('init', 'create_testimonial_cpt');

// Add Meta Box
function add_testimonial_meta_boxes()
{
    add_meta_box('testimonial_meta', 'Testimonial Fields', 'testimonial_meta_callback', 'testimonial', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_testimonial_meta_boxes');

// Meta Box UI
function testimonial_meta_callback($post)
{
    $heading = get_post_meta($post->ID, 'testimonial_heading', true);
    $description = get_post_meta($post->ID, 'testimonial_description', true);
    $author = get_post_meta($post->ID, 'testimonial_author', true);
    $order = get_post_meta($post->ID, 'testimonial_order', true);
    $image_id = get_post_meta($post->ID, 'testimonial_image_id', true);
    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';

    wp_nonce_field('save_testimonial_meta', 'testimonial_meta_nonce');
?>
    <p><label><strong>Testimonial Heading:</strong></label><br>
        <input type="text" name="testimonial_heading" value="<?php echo esc_attr($heading); ?>" style="width: 100%;" required>
    </p>

    <p><label><strong>Testimonial Description:</strong></label><br>
        <textarea name="testimonial_description" rows="5" style="width: 100%;" required><?php echo esc_textarea($description); ?></textarea>
    </p>

    <p><label><strong>Testimonial Author:</strong></label><br>
        <input type="text" name="testimonial_author" value="<?php echo esc_attr($author); ?>" style="width: 100%;" required>
    </p>

    <p><label><strong>Order By:</strong></label><br>
        <input type="number" name="testimonial_order" value="<?php echo esc_attr($order); ?>" style="width: 100px;" min="0" required>
    </p>

    <p><label><strong>Testimonial Image:</strong></label><br>
        <input type="button" class="upload_image_button button" value="Upload Image" /><br><br>
        <input type="hidden" name="testimonial_image_id" id="testimonial_image_id" value="<?php echo esc_attr($image_id); ?>">
        <img id="testimonial_image_preview" src="<?php echo esc_url($image_url); ?>" style="max-width: 150px;">
    </p>

    <script>
        jQuery(document).ready(function($) {
            $('.upload_image_button').click(function(e) {
                e.preventDefault();
                var image_frame = wp.media({
                    title: 'Select Testimonial Image',
                    multiple: false,
                    library: {
                        type: ['image/jpeg', 'image/png', 'image/jpg']
                    },
                    button: {
                        text: 'Use This Image'
                    }
                });

                image_frame.on('select', function() {
                    var attachment = image_frame.state().get('selection').first().toJSON();
                    $('#testimonial_image_id').val(attachment.id);
                    $('#testimonial_image_preview').attr('src', attachment.url);
                });

                image_frame.open();
            });
        });
    </script>
<?php
}

// Enqueue Media Scripts
function enqueue_testimonial_admin_scripts($hook)
{
    global $post;
    if (($hook === 'post-new.php' || $hook === 'post.php') &&
        (isset($_GET['post_type']) && $_GET['post_type'] === 'testimonial' || (isset($post) && $post->post_type === 'testimonial'))
    ) {
        wp_enqueue_media();
    }
}
add_action('admin_enqueue_scripts', 'enqueue_testimonial_admin_scripts');

// Save Fields with Validation
function save_testimonial_meta($post_id)
{
    if (!isset($_POST['testimonial_meta_nonce']) || !wp_verify_nonce($_POST['testimonial_meta_nonce'], 'save_testimonial_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    $required_fields = [
        'testimonial_heading',
        'testimonial_description',
        'testimonial_author',
        'testimonial_order',
        'testimonial_image_id'
    ];

    $errors = [];

    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = $field;
        }
    }

    // If there are errors, store them in transient and prevent saving
    if (!empty($errors)) {
        set_transient('testimonial_errors_' . $post_id, $errors, 30);
        remove_action('save_post', 'save_testimonial_meta'); // prevent loop
        wp_update_post(['ID' => $post_id, 'post_status' => 'draft']);
        add_action('save_post', 'save_testimonial_meta');
        return;
    }

    // Save valid fields
    foreach ($required_fields as $field) {
        update_post_meta($post_id, $field, sanitize_text_field($_POST[$field]));
    }
}
add_action('save_post', 'save_testimonial_meta');

// Show Admin Notice if validation failed
function testimonial_admin_notices()
{
    global $post;
    if ($post && get_post_type($post) === 'testimonial') {
        $errors = get_transient('testimonial_errors_' . $post->ID);
        if ($errors) {
            echo '<div class="notice notice-error"><p><strong>Error:</strong> Please fill all required fields.</p></div>';
            delete_transient('testimonial_errors_' . $post->ID);
        }
    }
}
add_action('admin_notices', 'testimonial_admin_notices');


//work-pages

function register_work_post_type()
{
    register_post_type('work', [
        'labels' => [
            'name'          => 'Works',
            'singular_name' => 'Work',
            'add_new_item'  => 'Add New Work',
            'edit_item'     => 'Edit Work',
        ],
        'public'       => true,
        'has_archive'  => false,
        'supports'     => ['title'],
        'menu_icon'    => 'dashicons-portfolio',
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_work_post_type');

// ===============================
// 2. Register Taxonomy
// ===============================
function register_work_taxonomy()
{
    register_taxonomy('work_category', 'work', [
        'label'        => 'Work Categories',
        'hierarchical' => true,
        'public'       => true,
        'rewrite'      => ['slug' => 'work-category'],
        'show_in_rest' => true,
    ]);
}
add_action('init', 'register_work_taxonomy');

// ===============================
// 3. Enqueue Admin Scripts
// ===============================
function work_admin_scripts($hook)
{
    global $post;
    if (($hook === 'post-new.php' || $hook === 'post.php') && isset($post) && $post->post_type === 'work') {
        wp_enqueue_media();
        wp_enqueue_script('work-admin', get_template_directory_uri() . '/js/work-admin.js', ['jquery'], null, true);
        // We also need inline script for immediate editing; we'll print fallback inline JS in meta box for one-file ease.
    }
}
add_action('admin_enqueue_scripts', 'work_admin_scripts');

// ===============================
// 4. Add Meta Box
// ===============================
function add_work_meta_boxes()
{
    add_meta_box('work_meta', 'Work Details', 'render_work_meta_box', 'work', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_work_meta_boxes');

// ===============================
// 5. Render Meta Box
// ===============================
function render_work_meta_box($post)
{
    $heading      = get_post_meta($post->ID, 'work_heading', true);
    $description  = get_post_meta($post->ID, 'work_description', true);

    $main_image   = intval(get_post_meta($post->ID, 'work_image', true));
    $main_video   = intval(get_post_meta($post->ID, 'work_video', true));
    $main_vthumb  = intval(get_post_meta($post->ID, 'work_video_thumb', true));

    $gallery_data = get_post_meta($post->ID, 'work_gallery', true);
    $gallery_data = $gallery_data ? json_decode($gallery_data, true) : [];
    $is_homepage  = get_post_meta($post->ID, 'is_homepage', true);

    // Show inline error messages (if any)
    $error_code = isset($_GET['work_error']) ? sanitize_text_field(wp_unslash($_GET['work_error'])) : '';
    $error_msgs = [
        'missing_main' => 'Error: You must upload either a main image OR a main video (not both).',
        'missing_vthumb' => 'Error: A thumbnail is required for the main video.',
        'gallery_video_thumb' => 'Error: All gallery videos must have a thumbnail.',
    ];
    if ($error_code && isset($error_msgs[$error_code])) {
        echo '<div class="notice notice-error inline"><p>' . esc_html($error_msgs[$error_code]) . '</p></div>';
    }

    wp_nonce_field('save_work_meta', 'work_meta_nonce');
?>
    <p><label><strong>Work Heading</strong></label><br>
        <input type="text" name="work_heading" value="<?php echo esc_attr($heading); ?>" style="width:100%;">
    </p>

    <p><label><strong>Work Description</strong></label><br>
        <textarea name="work_description" rows="4" style="width:100%;"><?php echo esc_textarea($description); ?></textarea>
    </p>

    <hr>
    <h3>Main Media (Either Image OR Video Required)</h3>
    <p>
        <label>Main Image:</label><br>
        <input type="button" class="button upload_main_image" value="Upload Image">
        <input type="button" class="button remove_main_image" value="Remove Image">
        <input type="hidden" name="work_image" id="work_image" value="<?php echo esc_attr($main_image); ?>">
    <div><img id="work_image_preview" src="<?php echo $main_image ? esc_url(wp_get_attachment_url($main_image)) : ''; ?>" style="max-width:150px;<?php echo $main_image ? '' : 'display:none;'; ?>"></div>
    </p>

    <p>
        <label>Main Video:</label><br>
        <input type="button" class="button upload_main_video" value="Upload Video">
        <input type="button" class="button remove_main_video" value="Remove Video">
        <input type="hidden" name="work_video" id="work_video" value="<?php echo esc_attr($main_video); ?>">
    <div id="main_video_filename"><?php echo $main_video ? esc_html(basename(wp_get_attachment_url($main_video))) : ''; ?></div>
    </p>

    <p>
        <label>Main Video Thumbnail:</label><br>
        <input type="button" class="button upload_main_video_thumb" value="Upload Thumbnail">
        <input type="button" class="button remove_main_video_thumb" value="Remove Thumbnail">
        <input type="hidden" name="work_video_thumb" id="work_video_thumb" value="<?php echo esc_attr($main_vthumb); ?>">
    <div><img id="work_video_thumb_preview" src="<?php echo $main_vthumb ? esc_url(wp_get_attachment_url($main_vthumb)) : ''; ?>" style="max-width:150px;<?php echo $main_vthumb ? '' : 'display:none;'; ?>"></div>
    </p>

    <hr>
    <h3>Gallery (Multiple Images/Videos)</h3>
    <input type="button" class="button upload_gallery_items" value="Upload Gallery Items">
    <input type="hidden" name="work_gallery" id="work_gallery" value="<?php echo esc_attr(json_encode($gallery_data)); ?>">
    <div id="gallery_items_preview" style="margin-top:10px;">
        <?php foreach ($gallery_data as $index => $item):
            $type = isset($item['type']) ? $item['type'] : 'image';
            $id   = isset($item['id']) ? intval($item['id']) : 0;
            $thumb = isset($item['thumb']) ? intval($item['thumb']) : 0;
        ?>
            <div class="gallery-item" data-index="<?php echo $index; ?>" style="margin-bottom:8px; border:1px solid #ddd; padding:8px;">
                <input type="hidden" class="gi_type" value="<?php echo esc_attr($type); ?>">
                <input type="hidden" class="gi_id" value="<?php echo esc_attr($id); ?>">
                <input type="hidden" class="gi_thumb" value="<?php echo esc_attr($thumb); ?>">
                <?php if ($type === 'image'): ?>
                    <div><img src="<?php echo $id ? esc_url(wp_get_attachment_url($id)) : ''; ?>" style="max-width:100px;"></div>
                <?php else: ?>
                    <div>Video: <?php echo $id ? esc_html(basename(wp_get_attachment_url($id))) : ''; ?></div>
                    <?php if ($thumb): ?>
                        <div><img src="<?php echo esc_url(wp_get_attachment_url($thumb)); ?>" style="max-width:100px;"></div>
                    <?php endif; ?>
                    <input type="button" class="button upload_gallery_video_thumb" value="Upload Video Thumbnail" data-index="<?php echo $index; ?>">
                <?php endif; ?>
                <input type="button" class="button remove_gallery_item" value="Remove" data-index="<?php echo $index; ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <p>
        <label>
            <input type="checkbox" name="is_homepage" value="1" <?php checked($is_homepage, '1'); ?>>
            Show on homepage
        </label>
    </p>
    <p>
        <label><strong>Display Order</strong></label><br>
        <input type="number" name="display_order" value="<?php echo esc_attr(get_post_meta($post->ID, 'display_order', true)); ?>" style="width:100px;">
    </p>


    <script>
        jQuery(document).ready(function($) {
            // Utility to get & set gallery JSON from hidden input
            function getGallery() {
                try {
                    var g = JSON.parse($('#work_gallery').val() || '[]');
                    if (!Array.isArray(g)) g = [];
                    return g;
                } catch (e) {
                    return [];
                }
            }

            function setGallery(g) {
                $('#work_gallery').val(JSON.stringify(g));
            }

            function isVideo(mime) {
                return mime && mime.indexOf('video') === 0;
            }

            // MAIN IMAGE
            $('.upload_main_image').on('click', function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select Main Image',
                    multiple: false,
                    library: {
                        type: 'image'
                    }
                });
                frame.on('select', function() {
                    var att = frame.state().get('selection').first().toJSON();
                    $('#work_image').val(att.id);
                    $('#work_image_preview').attr('src', att.url).show();
                });
                frame.open();
            });
            $('.remove_main_image').on('click', function(e) {
                e.preventDefault();
                $('#work_image').val('');
                $('#work_image_preview').attr('src', '').hide();
            });

            // MAIN VIDEO
            $('.upload_main_video').on('click', function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select Main Video',
                    multiple: false,
                    library: {
                        type: 'video'
                    }
                });
                frame.on('select', function() {
                    var att = frame.state().get('selection').first().toJSON();
                    $('#work_video').val(att.id);
                    $('#main_video_filename').text(att.filename || att.url ? (att.filename || att.url.split('/').pop()) : '');
                });
                frame.open();
            });
            $('.remove_main_video').on('click', function(e) {
                e.preventDefault();
                $('#work_video').val('');
                $('#main_video_filename').text('');
            });

            // MAIN VIDEO THUMB
            $('.upload_main_video_thumb').on('click', function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select Video Thumbnail',
                    multiple: false,
                    library: {
                        type: 'image'
                    }
                });
                frame.on('select', function() {
                    var att = frame.state().get('selection').first().toJSON();
                    $('#work_video_thumb').val(att.id);
                    $('#work_video_thumb_preview').attr('src', att.url).show();
                });
                frame.open();
            });
            $('.remove_main_video_thumb').on('click', function(e) {
                e.preventDefault();
                $('#work_video_thumb').val('');
                $('#work_video_thumb_preview').attr('src', '').hide();
            });

            // GALLERY UPLOAD (merge with existing)
            $('.upload_gallery_items').on('click', function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select Gallery Items',
                    multiple: true
                });
                frame.on('select', function() {
                    var selection = frame.state().get('selection');
                    var gallery = getGallery();
                    var startIndex = gallery.length;
                    selection.map(function(attachment) {
                        var att = attachment.toJSON();
                        if (isVideo(att.mime)) {
                            gallery.push({
                                type: 'video',
                                id: att.id,
                                thumb: null
                            });
                        } else {
                            gallery.push({
                                type: 'image',
                                id: att.id
                            });
                        }
                    });

                    // Re-render preview area from gallery array
                    $('#gallery_items_preview').empty();
                    gallery.forEach(function(item, idx) {
                        var html = '<div class="gallery-item" data-index="' + idx + '" style="margin-bottom:8px; border:1px solid #ddd; padding:8px;">';
                        if (item.type === 'image') {
                            html += '<input type="hidden" class="gi_type" value="image">';
                            html += '<input type="hidden" class="gi_id" value="' + item.id + '">';
                            html += '<div><img src="' + (item.id ? wp.media.attachment(item.id).get('url') : '') + '" style="max-width:100px;"></div>';
                        } else {
                            html += '<input type="hidden" class="gi_type" value="video">';
                            html += '<input type="hidden" class="gi_id" value="' + item.id + '">';
                            html += '<input type="hidden" class="gi_thumb" value="' + (item.thumb || '') + '">';
                            html += '<div>Video: ' + (item.id ? (wp.media.attachment(item.id).get('filename') || wp.media.attachment(item.id).get('url').split('/').pop()) : '') + '</div>';
                            html += '<input type="button" class="button upload_gallery_video_thumb" value="Upload Video Thumbnail" data-index="' + idx + '">';
                            if (item.thumb) {
                                html += '<div><img src="' + wp.media.attachment(item.thumb).get('url') + '" style="max-width:100px;"></div>';
                            }
                        }
                        html += '<input type="button" class="button remove_gallery_item" value="Remove" data-index="' + idx + '">';
                        html += '</div>';
                        $('#gallery_items_preview').append(html);
                    });

                    setGallery(gallery);
                });
                frame.open();
            });

            // Upload thumbnail for a gallery video (works for both existing & newly added)
            $(document).on('click', '.upload_gallery_video_thumb', function(e) {
                e.preventDefault();
                var index = parseInt($(this).data('index'), 10);
                var gallery = getGallery();
                var frame = wp.media({
                    title: 'Select Video Thumbnail',
                    multiple: false,
                    library: {
                        type: 'image'
                    }
                });
                frame.on('select', function() {
                    var att = frame.state().get('selection').first().toJSON();
                    if (!gallery[index]) return;
                    gallery[index].thumb = att.id;
                    setGallery(gallery);
                    // update preview: replace or append img
                    var $container = $('div.gallery-item[data-index="' + index + '"]');
                    $container.find('img').remove();
                    $container.append('<div><img src="' + att.url + '" style="max-width:100px;"></div>');
                });
                frame.open();
            });

            // Remove gallery item
            $(document).on('click', '.remove_gallery_item', function(e) {
                e.preventDefault();
                var index = parseInt($(this).data('index'), 10);
                var gallery = getGallery();
                if (!gallery || !gallery.length) return;
                // Remove the item
                gallery.splice(index, 1);
                // re-render
                $('#gallery_items_preview').empty();
                gallery.forEach(function(item, idx) {
                    var html = '<div class="gallery-item" data-index="' + idx + '" style="margin-bottom:8px; border:1px solid #ddd; padding:8px;">';
                    if (item.type === 'image') {
                        html += '<input type="hidden" class="gi_type" value="image">';
                        html += '<input type="hidden" class="gi_id" value="' + item.id + '">';
                        html += '<div><img src="' + (item.id ? wp.media.attachment(item.id).get('url') : '') + '" style="max-width:100px;"></div>';
                    } else {
                        html += '<input type="hidden" class="gi_type" value="video">';
                        html += '<input type="hidden" class="gi_id" value="' + item.id + '">';
                        html += '<input type="hidden" class="gi_thumb" value="' + (item.thumb || '') + '">';
                        html += '<div>Video: ' + (item.id ? (wp.media.attachment(item.id).get('filename') || wp.media.attachment(item.id).get('url').split('/').pop()) : '') + '</div>';
                        html += '<input type="button" class="button upload_gallery_video_thumb" value="Upload Video Thumbnail" data-index="' + idx + '">';
                        if (item.thumb) {
                            html += '<div><img src="' + wp.media.attachment(item.thumb).get('url') + '" style="max-width:100px;"></div>';
                        }
                    }
                    html += '<input type="button" class="button remove_gallery_item" value="Remove" data-index="' + idx + '">';
                    html += '</div>';
                    $('#gallery_items_preview').append(html);
                });
                setGallery(gallery);
            });

            // Keep previews in sync for case where WP media frame provides URLs via wp.media.attachment()
            // Note: wp.media.attachment(...) is used above — ensure media JS is available (we enqueued wp media earlier).
        });
    </script>
    <?php
}

// ===============================
// 6. Save Meta Box Data with Validation (inline errors & preserve data)
// ===============================
function save_work_meta($post_id)
{
    // Basic checks
    if (!isset($_POST['work_meta_nonce']) || !wp_verify_nonce($_POST['work_meta_nonce'], 'save_work_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (get_post_type($post_id) !== 'work') return;

    // Collect posted values (do not update DB until validation passes)
    $main_image  = isset($_POST['work_image']) ? intval($_POST['work_image']) : 0;
    $main_video  = isset($_POST['work_video']) ? intval($_POST['work_video']) : 0;
    $main_vthumb = isset($_POST['work_video_thumb']) ? intval($_POST['work_video_thumb']) : 0;
    $gallery_raw = isset($_POST['work_gallery']) ? wp_unslash($_POST['work_gallery']) : '[]';
    $gallery     = json_decode($gallery_raw, true);

    if (!is_array($gallery)) $gallery = [];

    // Validation rules
    $error = '';
    if ((!$main_image && !$main_video) || ($main_image && $main_video)) {
        $error = 'missing_main';
    } elseif ($main_video && !$main_vthumb) {
        $error = 'missing_vthumb';
    } else {
        // gallery items: for each video ensure thumb exists
        foreach ($gallery as $item) {
            if (isset($item['type']) && $item['type'] === 'video') {
                if (empty($item['thumb'])) {
                    $error = 'gallery_video_thumb';
                    break;
                }
            }
        }
    }

    if ($error) {
        // Pass the error code to the redirect URL so we can show inline error on edit screen
        add_filter('redirect_post_location', function ($location) use ($error) {
            return add_query_arg('work_error', $error, $location);
        });
        // do NOT update meta (preserve old persisted values)
        return;
    }

    // If validation passed, update meta
    update_post_meta($post_id, 'work_heading', sanitize_text_field($_POST['work_heading'] ?? ''));
    update_post_meta($post_id, 'work_description', sanitize_textarea_field($_POST['work_description'] ?? ''));

    update_post_meta($post_id, 'work_image', $main_image);
    update_post_meta($post_id, 'work_video', $main_video);
    update_post_meta($post_id, 'work_video_thumb', $main_vthumb);
    update_post_meta($post_id, 'work_gallery', wp_slash(json_encode($gallery)));
    update_post_meta($post_id, 'is_homepage', isset($_POST['is_homepage']) ? '1' : '0');
    if (isset($_POST['display_order'])) {
        update_post_meta($post_id, 'display_order', intval($_POST['display_order']));
    }
}
add_action('save_post', 'save_work_meta');

// ===============================
// 7. Filter homepage query to only show "Is Homepage" works
// ===============================
function filter_homepage_works($query)
{
    if (!is_admin() && $query->is_main_query() && is_home()) {
        $query->set('meta_query', [
            [
                'key'   => 'is_homepage',
                'value' => '1',
            ]
        ]);
    }
}
add_action('pre_get_posts', 'filter_homepage_works');

//load more


add_action('wp_ajax_load_more_work', 'load_more_work_callback');
add_action('wp_ajax_nopriv_load_more_work', 'load_more_work_callback');

function load_more_work_callback()
{
    $term = sanitize_text_field($_GET['term']);
    $page = intval($_GET['page']);

    $term_obj = get_term_by('slug', $term, 'work_category');
    if (!$term_obj) {
        wp_send_json(['html' => '', 'work_data' => []]);
    }

    $is_film_poster = strtolower($term_obj->name) === 'film posters';

    $works = new WP_Query([
        'post_type'      => 'work',
        'tax_query'      => [[
            'taxonomy' => 'work_category',
            'field'    => 'slug',
            'terms'    => $term
        ]],
        'posts_per_page' => 8,
        'paged'          => $page,
    ]);

    $html = '';
    $new_work_data = [];

    if ($works->have_posts()) {
        ob_start();
        while ($works->have_posts()) {
            $works->the_post();

            $post_id     = get_the_ID();
            $heading     = get_post_meta($post_id, 'work_heading', true);
            $description = get_post_meta($post_id, 'work_description', true);
            $image_id    = get_post_meta($post_id, 'work_image', true);
            $video_id    = get_post_meta($post_id, 'work_video', true);
            $video_thumb_id = get_post_meta($post_id, 'work_video_thumb', true);

            $image_url   = $image_id ? wp_get_attachment_url($image_id) : '';
            $video_url   = $video_id ? wp_get_attachment_url($video_id) : '';
            $video_thumb = $video_thumb_id ? wp_get_attachment_url($video_thumb_id) : '';

            $gallery_raw = get_post_meta($post_id, 'work_gallery', true);
            $gallery_items = $gallery_raw ? json_decode($gallery_raw, true) : [];

            $gallery_urls = [];
            if ($gallery_items && is_array($gallery_items)) {
                foreach ($gallery_items as $item) {
                    if (!isset($item['type']) || !isset($item['id'])) continue;

                    if ($item['type'] === 'image') {
                        $gallery_urls[] = [
                            'type' => 'image',
                            'src'  => wp_get_attachment_url($item['id'])
                        ];
                    } elseif ($item['type'] === 'video') {
                        $gallery_urls[] = [
                            'type'   => 'video',
                            'src'    => wp_get_attachment_url($item['id']),
                            'thumb'  => !empty($item['thumb']) ? wp_get_attachment_url($item['thumb']) : ''
                        ];
                    }
                }
            }

            $image_sources = [];
            if ($video_url) {
                $image_sources[] = ['type' => 'video', 'src' => $video_url, 'thumb' => $video_thumb ?: $image_url];
            } else {
                $image_sources[] = ['type' => 'image', 'src' => $image_url];
            }
            $image_sources = array_merge($image_sources, $gallery_urls);

            $new_work_data[] = [
                'id'           => $post_id,
                'title'        => $heading,
                'desc'         => $description,
                'imageSources' => $image_sources
            ];

            // --- HTML output ---
            if ($is_film_poster) {
    ?>
                <div class="flip-card">
                    <?php if ($video_url): ?>
                        <video class="w-full h-full object-contain filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                            onclick="openFullscreenImage('<?php echo esc_url($image_url); ?>')"
                            poster="<?php echo esc_url($video_thumb ?: $image_url); ?>"
                            muted preload="none">
                            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                        </video>
                    <?php elseif ($image_url): ?>
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($heading); ?>"
                            class="w-full h-full object-contain filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                            onclick="openFullscreenImage('<?php echo esc_url($image_url); ?>')">
                    <?php endif; ?>
                </div>
            <?php
            } else {
            ?>
                <div class="flex flex-col md:justify-between">
                    <div class="order-1 md:order-3 w-full h-[300px] sm:h-[350px] md:h-[400px] lg:h-[500px] flex items-center justify-center overflow-hidden">
                        <?php if ($video_url): ?>
                            <video class="w-full h-full object-cover filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                onclick="openWorkModal(event, '<?php echo esc_js($post_id); ?>')"
                                poster="<?php echo esc_url($video_thumb ?: $image_url); ?>"
                                muted preload="none">
                                <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                            </video>
                        <?php elseif ($image_url): ?>
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($heading); ?>"
                                class="w-full h-full object-cover filter grayscale hover:grayscale-0 transition duration-300 cursor-pointer"
                                onclick="openWorkModal(event, '<?php echo esc_js($post_id); ?>')">
                        <?php endif; ?>
                    </div>
                    <h3 class="order-2 md:order-1 text-base md:text-2xl font-bold uppercase mt-2"><?php echo esc_html($heading); ?></h3>
                    <p class="order-3 md:order-2 text-sm text-gray-600 mt-1 mb-5"><?php echo esc_html($description); ?></p>
                </div>
    <?php
            }
        }
        $html = ob_get_clean();
    }

    wp_reset_postdata();

    wp_send_json([
        'html'       => $html,
        'work_data'  => $new_work_data
    ]);
}

//banner

/**
 * Register Banner CPT
 */
function create_banner_cpt()
{
    $labels = array(
        'name'          => 'Banners',
        'singular_name' => 'Banner',
        'menu_name'     => 'Home Page Banner',
        'add_new'       => 'Add New',
        'add_new_item'  => 'Add New Banner',
        'edit_item'     => 'Edit Banner',
        'new_item'      => 'New Banner',
        'view_item'     => 'View Banner',
        'all_items'     => 'All Banners',
    );

    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_icon'     => 'dashicons-format-image',
        'supports'      => array('title'),
        'has_archive'   => false,
        'rewrite'       => array('slug' => 'banners'),
    );

    register_post_type('banner', $args);
}
add_action('init', 'create_banner_cpt');

/**
 * Add Meta Box
 */
function add_banner_meta_boxes()
{
    add_meta_box('banner_meta', 'Banner Fields', 'banner_meta_callback', 'banner', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_banner_meta_boxes');

/**
 * Meta Box UI
 */
function banner_meta_callback($post)
{
    $banner_type  = get_post_meta($post->ID, 'banner_type', true);
    $image_id     = get_post_meta($post->ID, 'banner_image_id', true);
    $video_id     = get_post_meta($post->ID, 'banner_video_id', true);
    $order        = get_post_meta($post->ID, 'banner_order', true);

    $image_url = $image_id ? wp_get_attachment_url($image_id) : '';
    $video_url = $video_id ? wp_get_attachment_url($video_id) : '';

    wp_nonce_field('save_banner_meta', 'banner_meta_nonce');
    ?>
    <p><label><strong>Banner Type:</strong></label><br>
        <select name="banner_type" id="banner_type" style="width:200px;">
            <option value="image" <?php selected($banner_type, 'image'); ?>>Image</option>
            <option value="video" <?php selected($banner_type, 'video'); ?>>Video</option>
        </select>
    </p>

    <div id="banner_image_field" style="margin-bottom:20px; <?php echo ($banner_type === 'video') ? 'display:none;' : ''; ?>">
        <label><strong>Banner Image:</strong></label><br>
        <input type="button" class="upload_banner_image button" value="Upload Image" /><br><br>
        <input type="hidden" name="banner_image_id" id="banner_image_id" value="<?php echo esc_attr($image_id); ?>">
        <img id="banner_image_preview" src="<?php echo esc_url($image_url); ?>" style="max-width: 200px;">
    </div>

    <div id="banner_video_field" style="margin-bottom:20px; <?php echo ($banner_type === 'image' || !$banner_type) ? 'display:none;' : ''; ?>">
        <label><strong>Banner Video:</strong></label><br>
        <input type="button" class="upload_banner_video button" value="Upload Video" /><br><br>
        <input type="hidden" name="banner_video_id" id="banner_video_id" value="<?php echo esc_attr($video_id); ?>">
        <?php if ($video_url): ?>
            <video id="banner_video_preview" src="<?php echo esc_url($video_url); ?>" style="max-width:200px;" controls></video>
        <?php endif; ?>
    </div>

    <p><label><strong>Order No:</strong></label><br>
        <input type="number" name="banner_order" value="<?php echo esc_attr($order); ?>" style="width: 100px;" min="0">
    </p>

    <script>
        jQuery(document).ready(function($) {
            // Toggle fields based on dropdown
            $('#banner_type').on('change', function() {
                if ($(this).val() === 'image') {
                    $('#banner_image_field').show();
                    $('#banner_video_field').hide();
                } else {
                    $('#banner_image_field').hide();
                    $('#banner_video_field').show();
                }
            });

            // Upload image
            $('.upload_banner_image').click(function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select Banner Image',
                    multiple: false,
                    library: {
                        type: 'image'
                    },
                    button: {
                        text: 'Use This Image'
                    }
                });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('#banner_image_id').val(attachment.id);
                    $('#banner_image_preview').attr('src', attachment.url);
                });
                frame.open();
            });

            // Upload video
            $('.upload_banner_video').click(function(e) {
                e.preventDefault();
                var frame = wp.media({
                    title: 'Select Banner Video',
                    multiple: false,
                    library: {
                        type: 'video'
                    },
                    button: {
                        text: 'Use This Video'
                    }
                });
                frame.on('select', function() {
                    var attachment = frame.state().get('selection').first().toJSON();
                    $('#banner_video_id').val(attachment.id);
                    if ($('#banner_video_preview').length === 0) {
                        $('<video id="banner_video_preview" controls style="max-width:200px;"></video>').insertAfter('#banner_video_id');
                    }
                    $('#banner_video_preview').attr('src', attachment.url);
                });
                frame.open();
            });
        });
    </script>
<?php
}


/**
 * Enqueue Media Scripts
 */
function enqueue_banner_admin_scripts($hook)
{
    global $post;
    if (($hook === 'post-new.php' || $hook === 'post.php') &&
        (isset($_GET['post_type']) && $_GET['post_type'] === 'banner' || (isset($post) && $post->post_type === 'banner'))
    ) {
        wp_enqueue_media();
    }
}
add_action('admin_enqueue_scripts', 'enqueue_banner_admin_scripts');

/**
 * Save Meta
 */
function save_banner_meta($post_id)
{
    if (!isset($_POST['banner_meta_nonce']) || !wp_verify_nonce($_POST['banner_meta_nonce'], 'save_banner_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    update_post_meta($post_id, 'banner_type', sanitize_text_field($_POST['banner_type']));
    update_post_meta($post_id, 'banner_image_id', intval($_POST['banner_image_id']));
    update_post_meta($post_id, 'banner_video_id', intval($_POST['banner_video_id']));
    update_post_meta($post_id, 'banner_order', intval($_POST['banner_order']));
}
add_action('save_post', 'save_banner_meta');
