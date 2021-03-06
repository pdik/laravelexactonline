<?php
return
    [
        /**
         * Setup OAUTH connection
         */

        'client_id' => env('EXACT_CLIENT_ID', ''),
        'client_secret' => env('EXACT_CLIENT_SECRET', ''),
        'webhook_secret' => env('EXACT_WEBHOOK_SECRET', ''),
        'type' => 'one', //one , multiuser

        /**
         * Type model only for multiuser
         */
        'type_model' => 'app/models/user',

        /**
         * For local development use NGROK
         */
        'callback' => env('EXACT_CALLBACK', 'localhost'),
        'webhook_url' => 'webhook', //will result in /api/v1/webhook as your url

        /**
         * Webhook subscription topics
         * See Exact online documentation for more information
         */
        'webhook_topics' => [
            'Documents',
            'Accounts',
            'SalesInvoices',
            'FinancialTransactions',
        ],

        'layout' => 'laravelExactonline::layout',
    ];