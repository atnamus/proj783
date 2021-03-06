<?php

return array(
    /*
      |--------------------------------------------------------------------------
      | Application Debug Mode
      |--------------------------------------------------------------------------
      |
      | When your application is in debug mode, detailed error messages with
      | stack traces will be shown on every error that occurs within your
      | application. If disabled, a simple generic error page is shown.
      |
     */

    'debug' => true,
    'debuger' => false,
    /*
      |--------------------------------------------------------------------------
      | Application URL
      |--------------------------------------------------------------------------
      |
      | This URL is used by the console to properly generate URLs when using
      | the Artisan command line tool. You should set this to the root of
      | your application so that it is used when running Artisan tasks.
      |
     */
    'url' => 'http://66.23.235.244/dev/makananas/public/',
    /*
      |--------------------------------------------------------------------------
      | Application Timezone
      |--------------------------------------------------------------------------
      |
      | Here you may specify the default timezone for your application, which
      | will be used by the PHP date and date-time functions. We have gone
      | ahead and set this to a sensible default for you out of the box.
      |
     */
    'timezone' => 'UTC',
    /*
      |--------------------------------------------------------------------------
      | Application Locale Configuration
      |--------------------------------------------------------------------------
      |
      | The application locale determines the default locale that will be used
      | by the translation service provider. You are free to set this value
      | to any of the locales which will be supported by the application.
      |
     */
    'locale' => 'en',
    /*
      |--------------------------------------------------------------------------
      | Application Fallback Locale
      |--------------------------------------------------------------------------
      |
      | The fallback locale determines the locale to use when the current one
      | is not available. You may change the value to correspond to any of
      | the language folders that are provided through your application.
      |
     */
    'fallback_locale' => 'en',
    /*
      |--------------------------------------------------------------------------
      | Application languages
      |--------------------------------------------------------------------------
      |This is list of languages which are currently supported
      |
     */
    'languages' => array('en', 'fr', 'de', 'es', 'ru', 'jp', 'it', 'sw'),
    /*
      |--------------------------------------------------------------------------
      | Encryption Key
      |--------------------------------------------------------------------------
      |
      | This key is used by the Illuminate encrypter service and should be set
      | to a random, 32 character string, otherwise these encrypted strings
      | will not be safe. Please do this before deploying an application!
      |
     */
    'key' => 'AVuR5e15sPHGDeDf8mHgV9YpA1NZok5i',
    'cipher' => MCRYPT_RIJNDAEL_128,
        /*
          |--------------------------------------------------------------------------
          | Autoloaded Service Providers
          |--------------------------------------------------------------------------
          |
          | The service providers listed here will be automatically loaded on the
          | request to your application. Feel free to add your own services to
          | this array to grant expanded functionality to your applications.
          |
         */
);
