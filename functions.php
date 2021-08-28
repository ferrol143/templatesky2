
<?php
// Daftarkan sebuah sidebar baru yang diberi nama 'sidebar'
function add_widget_Support() {
                register_sidebar( array(
                                'name'          => 'Sidebar',
                                'id'            => 'sidebar',
                                'before_widget' => '<div>',
                                'after_widget'  => '</div>',
                                'before_title'  => '<h2>',
                                'after_title'   => '</h2>',
                ) );
}
// Kaitkan inisiasi widget dan jalankan fungsi
add_action( 'widgets_init', 'add_Widget_Support' );

// Daftarkan menu navigasi baru
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
// Kaitkan ke init action hook, jalankan function menu navigasi.
add_action( 'init', 'add_Main_Nav' );
?>

 <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
  <aside id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
    <?php dynamic_sidebar( 'sidebar' ); ?>
  </aside>
<?php endif; ?>

