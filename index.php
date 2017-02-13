<?php
use Carbon\Carbon;

require_once 'vendor/autoload.php';

Flight::route('/', function () {
    $now = Carbon::now('Europe/Zurich');

    Flight::json([
        date_time => $now->toIso8601String(),
        week_of_year => $now->weekOfYear
    ]);
});

Flight::start();