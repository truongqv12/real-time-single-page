<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Laravel CORS
    |--------------------------------------------------------------------------
    |
    | allowedOrigins, allowedHeaders and allowedMethods can be set to array('*')
    | to accept any value.
    |
    */
   
    'supportsCredentials' => false,
    'allowedOrigins' => ['*'],
    'allowedOriginsPatterns' => ['*'],
    'allowedHeaders' => ['Content-Type', 'X-Requested-With', 'Authorization', 'Accept', 'Origin', 'Accept-Encoding'],
    'allowedMethods' => ['GET', 'POST', 'PUT',  'DELETE', 'OPTION'],
    'exposedHeaders' => ['*'],
    'maxAge' => 0,

];
