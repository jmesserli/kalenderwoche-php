<?php require_once 'vendor/autoload.php';

use Carbon\Carbon;

Flight::route('/', function () {
    $now = Carbon::now('Europe/Zurich');

    Flight::json([
        'date_time' => $now->toIso8601String(),
        'week_of_year' => $now->weekOfYear
    ]);
});

Flight::start();