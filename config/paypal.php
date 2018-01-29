<?php

return array(
    /** set your paypal credential **/
    'client_id' =>'AdLYK1Hpwix0bIK2rj_HR4TR_aY-1x4JrAQgBzMGpgSoHdWU_Q6hVWjLp_yXjIEtzpnoOJmCPIveuJNg',
    'secret' => 'ED9jl3mXMfb28tmu9-QVRpHpHoUc-p-VD9Ei_UYBgimmqIpg8xeBVZx3bhnUh4T_fLiEFLYiBgwCj6F5',
    /**
    * SDK configuration
    */
    'settings' => array(
    /**
    * Available option 'sandbox' or 'live'
    */
    'mode' => 'sandbox',
    /**
    * Specify the max request time in seconds
    */
    'http.ConnectionTimeOut' => 1000,
    /**
    * Whether want to log to a file
    */
    'log.LogEnabled' => true,
    /**
    * Specify the file that want to write on
    */
    'log.FileName' => storage_path() . '/logs/paypal.log',
    /**
    * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
    *
    * Logging is most verbose in the 'FINE' level and decreases as you
    * proceed towards ERROR
    */
    'log.LogLevel' => 'FINE'
    ),
);

?>