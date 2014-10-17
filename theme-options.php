<?php

/////////////////////////////////////////////////////////////////////
// Add DevDm Theme Options to the Appearance Menu and Admin Bar
////////////////////////////////////////////////////////////////////

    function dmbs_theme_options_menu() {
        add_theme_page( 'Opcje RoboDrifta', 'Opcje RoboDrifta', 'manage_options', 'devdm-theme-options', 'devdm_theme_options' );
    }
    add_action( 'admin_menu', 'dmbs_theme_options_menu' );

    add_action( 'admin_bar_menu', 'toolbar_link_to_dmbs_options', 999 );

    function toolbar_link_to_dmbs_options( $wp_admin_bar ) {
        $args = array(
            'id'    => 'devdm_theme_options',
            'title' => __('Opcje RoboDrifta','devdmbootstrap3'),
            'href'  => home_url() . '/wp-admin/themes.php?page=devdm-theme-options',
            'meta'  => array( 'class' => 'devdm-theme-options' ),
            'parent' => 'site-name'
        );
        $wp_admin_bar->add_node( $args );
    }

////////////////////////////////////////////////////////////////////
// Add admin.css enqueue
////////////////////////////////////////////////////////////////////

    function devdm_theme_style() {
        wp_enqueue_style('devdm-theme', get_template_directory_uri() . '/css/admin.css');
    }
    add_action('admin_enqueue_scripts', 'devdm_theme_style');

////////////////////////////////////////////////////////////////////
// Register our settings options (the options we want to use)
////////////////////////////////////////////////////////////////////

    $dm_options = array(
        'link_do_regulaminu' => ''
    );
    $dm_options = array(
        'fb' => ''
    );


    function dm_register_settings() {
        register_setting( 'dm_theme_options', 'dm_options', 'dm_validate_options' );
    }

    add_action ('admin_init', 'dm_register_settings');
    $dm_settings = get_option( 'dm_options', $dm_options );


////////////////////////////////////////////////////////////////////
// Validate Options
////////////////////////////////////////////////////////////////////

    function dm_validate_options( $input ) {

        global $dm_options, $dm_sidebar_sizes;

        $settings = get_option( 'dm_options', $dm_options );


        $input['link_do_regulaminu'] = wp_filter_nohtml_kses( $input['link_do_regulaminu'] );
        $input['fb'] = wp_filter_nohtml_kses( $input['fb'] );

        return $input;
    }

////////////////////////////////////////////////////////////////////
// Display Options Page
////////////////////////////////////////////////////////////////////

    function devdm_theme_options() {

    if ( !current_user_can( 'manage_options' ) )  {
        wp_die('You do not have sufficient permissions to access this page.');
    }

        //get our global options
        global $dm_options, $dm_sidebar_sizes, $developer_uri;

        //get our logo
        $logo = get_template_directory_uri() . '/img/logo.png'; ?>

        <div class="wrap">
               <?php

               if ( ! isset( $_REQUEST['settings-updated'] ) )

                   $_REQUEST['settings-updated'] = false;

               ?>

               <?php if ( false !== $_REQUEST['settings-updated'] ) : ?>

               <div class='saved'><p><strong><?php _e('No jest gdzieś tam zapisane','devdmbootstrap3') ;?></strong></p></div>

               <?php endif; ?>

            <form action="options.php" method="post">

                <?php
                    $settings = get_option( 'dm_options', $dm_options );
                    settings_fields( 'dm_theme_options' );
                ?>

                <table cellpadding='10'>
                    <tr valign="top"><th><h3>Regulamin</h3></th></tr>
                    <td>
                        <input type="text" id="link_do_regulaminu" name="dm_options[link_do_regulaminu]" value="<?php esc_attr_e($settings['link_do_regulaminu']); ?>" />
                        <label for="link_do_regulaminu"><?php echo 'Trzeba dać link do regulaminu' ;?></label>
                    </td>
                </tr>
                    <tr valign="top"><th><h3>Facebook</h3></th></tr>
                    <td>
                        <input type="text" id="fb" name="dm_options[fb]" value="<?php esc_attr_e($settings['fb']); ?>" />
                        <label for="fb"><?php echo 'Trzeba dać link do Facebooka' ;?></label>
                    </td>
                </tr>
                </table>

                <p class="submit">
                    <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes','devdmbootstrap3'); ?>" />
                </p>

            </form>

        </div>
<?php

}
?>
