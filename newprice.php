<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
  "1b915a41f532a434dc4e", // Replace with 'key' from dashboard
  "ef4a4c41640d0f843793", // Replace with 'secret' from dashboard
  "1360050", // Replace with 'app_id' from dashboard
  array(
    'cluster' => 'eu' // Replace with 'cluster' from dashboard
  )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
while (true) {
  $pusher->trigger('price-btcusd', 'new-price', array(
    'value' => rand(0, 1000)
  ));
  sleep(1);
}
