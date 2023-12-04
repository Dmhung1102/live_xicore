<?php
add_theme_support('post-thumbnails');
add_action('init', 'create_blog_taxonomies');
function create_blog_taxonomies(){
    register_taxonomy('blog_category', 'blog', array(
        'hierarchical' => true,
        'rewrite' => array('slug' => 'blog-category'),
        'labels' => array(
            'name' => ('Danh Mục Blog'),
            'singular_name' => ('Danh Mục Blog'),
            'add_new' => ('Thêm Mới'),
            'add_new_item' => ('Thêm Mới'),
            'new_item' => ('Thêm Mới'),
            'search_items' => ('Tìm Kiếm'),
        ),
    ));
    flush_rewrite_rules( false );
}
function tao_custom_post_type()
{


    /*
     * Biến $label để chứa các text liên quan đến tên hiển thị của Post Type trong Admin
     */
    $label = array(
        'name' => 'Blogs', //Tên post type dạng số nhiều
        'singular_name' => 'Blog' //Tên post type dạng số ít
    );


    /*
     * Biến $args là những tham số quan trọng trong Post Type
     */
    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Travel blog post type', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'author',
            'thumbnail',
            'comments',
            'trackbacks',
            'revisions',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array( 'blog_category', 'post_tag' ), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => false, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => '', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
    register_post_type('blog', $args); //Tạo post type với slug tên là sanpham và các tham số trong biến $args ở trên
}
add_action('init', 'tao_custom_post_type');

add_filter('pre_get_posts','lay_custom_post_type');
function lay_custom_post_type($query) {
    if (is_home() && $query->is_main_query ())
        $query->set ('post_type', array ('post','blog'));
    return $query;
}
?>
