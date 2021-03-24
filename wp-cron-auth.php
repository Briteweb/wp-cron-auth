<?php
/**
 * Plugin Name:  WP-CRON Basic Auth
 * Plugin URI:   https://github.com/Briteweb/wp-cron-auth
 * Description:  Enable CRON behind basic auth.
 * Version:      1.0.0
 * Author:       Briteweb
 * Author URI:   https://briteweb.com
 * License:      MIT License
 */

$shouldAddAuthentication = defined('WP_CRON_HTTP_BASIC_USERNAME') && defined('WP_CRON_HTTP_BASIC_PASSWORD');

/**
 * Enable CRON behind HTTP Auth.
 */
if (function_exists('add_filter') && $shouldAddAuthentication) {
    add_filter('cron_request', function ($request) {
        $headers = ['Authorization' => sprintf('Basic %s', base64_encode(WP_CRON_HTTP_BASIC_USERNAME.':'.WP_CRON_HTTP_BASIC_USERNAME))];

        $request['args']['headers'] = isset($request['args']['headers']) ? array_merge($request['args']['headers'], $headers) : $headers;

        return $request;
    });
}
