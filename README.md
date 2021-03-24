## Constants

The plugin requires the following constants to be defined

- `WP_CRON_HTTP_BASIC_USERNAME`
- `WP_CRON_HTTP_BASIC_PASSWORD`

## Bedrock

If you're using bedrock, add this block to `config/application.php` to define the constants.

```
/**
 * WP CRON basic authentication
 */
if (env('WP_CRON_AUTH_ENABLED')) {
    Config::define('WP_CRON_HTTP_BASIC_USERNAME', env('WP_CRON_HTTP_BASIC_USERNAME'));
    Config::define('WP_CRON_HTTP_BASIC_PASSWORD', env('WP_CRON_HTTP_BASIC_PASSWORD'));
}
```

And the following lines to `.env` and `.env.example`

```
WP_CRON_AUTH_ENABLED=true
WP_CRON_HTTP_BASIC_USERNAME=
WP_CRON_HTTP_BASIC_PASSWORD=
```
