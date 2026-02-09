<?php

$menuItems = [
    'home' => 'index.php',
    'about' => 'about.php',
    'contact' => 'contact.php'
];

echo '<ul class="flex space-x-6">';

foreach($menuItems as $key => $value) {
    echo '<li><a href="' . $value . '" class="text-gray-300 hover:text-white">' . $key . '</a></li>';
} 

echo '</ul>';

?>

