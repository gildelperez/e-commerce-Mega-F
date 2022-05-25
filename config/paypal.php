<?php

return array(

    /**
     * Set our Sandbox and Live credentials
     */
    'client_id' => 'AbY9CPkPYCNzuiMtwm2-f1G2FOgYWmeSvJD9t4ouNGkMo8f_-Qm6ryVnkVuilWBRsNwtScXOkLJ-wHx5',    
    'secret' => 'EEuzLMBJMPcz7bJK8_iN2Q2pwDCyL1lKQ-lMu8tvwqq49ki1VtGTmVuGey6eMK69Cwr7rdjzpmCoTYkR',

    
    /**
     * SDK configuration settings
     */
    'settings' => array(

        /** 
         * Payment Mode
         *
         * Available options are 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        
        // Specify the max connection attempt (3000 = 3 seconds)
        'http.ConnectionTimeOut' => 30,
       
        // Specify whether or not we want to store logs
        'log.LogEnabled' => true,
        
        // Specigy the location for our paypal logs
        'log.FileName' => storage_path() . '/logs/paypal.log',
        
        /** 
         * Log Level
         *
         * Available options: 'DEBUG', 'INFO', 'WARN' or 'ERROR'
         * 
         * Logging is most verbose in the DEBUG level and decreases 
         * as you proceed towards ERROR. WARN or ERROR would be a 
         * recommended option for live environments.
         * 
         */
        'log.LogLevel' => 'FINE'
    ),
);
