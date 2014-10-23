<?php

return array(
    /*
      |--------------------------------------------------------------------------
      | Mail "Pretend"
      |--------------------------------------------------------------------------
      |
      | When this option is enabled, e-mail will not actually be sent over the
      | web and will instead be written to your application's logs files so
      | you may inspect the message. This is great for local development.
      |
     */
    'pretend' => false,
    'log' => false,
    'driver' => 'smtp',
    'host' => 'smtp.gmail.com',
    'port' => 465,
    'from' => array('address' => 'no-reply@makananas.com', 'name' => 'Site support'),
    'encryption' => 'ssl',
    'username' => 'sumanta.ghosh@infoway.us',
    'password' => 'amivalochilam',
);
