<?php

return [
    'enabled' => env('HONEYPOT_ENABLED', true),
    'field_name' => 'subject',
    'field_time_name' => 'form_time',
    'minimum_elapsed_time' => 3,
    'abort_message' => 'Something went wrong. Unable to complete request.',
];