<?php
/**
 * bluehost-wordpress-plugin
 * Build: d6dc549357a820604db9
 */

/**
 * ENTRY: app
 */
 wp_register_script(
     'bwp-manifest-app',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'manifest~app-6b19276bdf660caff3f7.js',
     apply_filters( 'bwp_manifest_app_js_deps', array('lodash', 'react', 'react-dom', 'wp-a11y', 'wp-api-fetch', 'wp-components', 'wp-compose', 'wp-data', 'wp-dom-ready', 'wp-element', 'wp-i18n', 'wp-keycodes', 'wp-polyfill', 'wp-url', ) ),
     false,
     true
 );
 $bwpManifestAppData = apply_filters( 'bwp_manifest_app_data', array() );
 if ( ! empty( $bwpManifestAppData ) ) {
    \wp_localize_script(
        'bwp-manifest-app',
        'bwpManifestApp',
        $bwpManifestAppData
    );
 }
 wp_register_script(
     'bwp-vendors-app',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'vendors~app-ce733503059c92405a0a.js',
     apply_filters( 'bwp_vendors_app_js_deps', array('bwp-manifest-app', ) ),
     false,
     true
 );
 $bwpVendorsAppData = apply_filters( 'bwp_vendors_app_data', array() );
 if ( ! empty( $bwpVendorsAppData ) ) {
    \wp_localize_script(
        'bwp-vendors-app',
        'bwpVendorsApp',
        $bwpVendorsAppData
    );
 }
 wp_register_script(
     'bwp-app',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'app-7d818d8c327ac79829c4.js',
     apply_filters( 'bwp_app_js_deps', array('bwp-vendors-app', ) ),
     false,
     true
 );
 $bwpAppData = apply_filters( 'bwp_app_data', array() );
 if ( ! empty( $bwpAppData ) ) {
    \wp_localize_script(
        'bwp-app',
        'bwpApp',
        $bwpAppData
    );
 }
wp_register_style(
    'bwp-app',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'app-7d818d8c327ac79829c4.css',
    apply_filters( 'bwp_app_css_deps', array() ),
    false
);

/**
 * ENTRY: dashboard
 */
 wp_register_script(
     'bwp-manifest-dashboard',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'manifest~dashboard-fb8aa89177217c164a62.js',
     apply_filters( 'bwp_manifest_dashboard_js_deps', array('react', 'wp-api-fetch', 'wp-dom-ready', 'wp-element', 'wp-i18n', 'wp-polyfill', 'wp-url', ) ),
     false,
     true
 );
 $bwpManifestDashboardData = apply_filters( 'bwp_manifest_dashboard_data', array() );
 if ( ! empty( $bwpManifestDashboardData ) ) {
    \wp_localize_script(
        'bwp-manifest-dashboard',
        'bwpManifestDashboard',
        $bwpManifestDashboardData
    );
 }
 wp_register_script(
     'bwp-dashboard',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'dashboard-cac1b4463a82fa11d65f.js',
     apply_filters( 'bwp_dashboard_js_deps', array('bwp-manifest-dashboard', ) ),
     false,
     true
 );
 $bwpDashboardData = apply_filters( 'bwp_dashboard_data', array() );
 if ( ! empty( $bwpDashboardData ) ) {
    \wp_localize_script(
        'bwp-dashboard',
        'bwpDashboard',
        $bwpDashboardData
    );
 }
wp_register_style(
    'bwp-dashboard',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'dashboard-cac1b4463a82fa11d65f.css',
    apply_filters( 'bwp_dashboard_css_deps', array() ),
    false
);

/**
 * ENTRY: editortours
 */
 wp_register_script(
     'bwp-manifest-editortours',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'manifest~editortours-a5f62121d21cb9555f6d.js',
     apply_filters( 'bwp_manifest_editortours_js_deps', array('lodash', 'react', 'wp-api-fetch', 'wp-components', 'wp-data', 'wp-dom-ready', 'wp-edit-post', 'wp-element', 'wp-i18n', 'wp-plugins', 'wp-polyfill', 'wp-url', ) ),
     false,
     true
 );
 $bwpManifestEditortoursData = apply_filters( 'bwp_manifest_editortours_data', array() );
 if ( ! empty( $bwpManifestEditortoursData ) ) {
    \wp_localize_script(
        'bwp-manifest-editortours',
        'bwpManifestEditortours',
        $bwpManifestEditortoursData
    );
 }
 wp_register_script(
     'bwp-editortours',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'editortours-518691ec4aabaa905c84.js',
     apply_filters( 'bwp_editortours_js_deps', array('bwp-manifest-editortours', ) ),
     false,
     true
 );
 $bwpEditortoursData = apply_filters( 'bwp_editortours_data', array() );
 if ( ! empty( $bwpEditortoursData ) ) {
    \wp_localize_script(
        'bwp-editortours',
        'bwpEditortours',
        $bwpEditortoursData
    );
 }
wp_register_style(
    'bwp-editortours',
     trailingslashit( BLUEHOST_PLUGIN_URL ) . 'build/' . 'editortours-518691ec4aabaa905c84.css',
    apply_filters( 'bwp_editortours_css_deps', array() ),
    false
);

// auto-generated by wp-dependency-webpack-plugin
