<?php
$socials = [
    'Instagram' => 'https://instagram.com/',
    'Facebook' => 'https://facebook.com/',
    'Twitter' => 'https://twitter.com/'
];
?>

<div class="bg-white shadow p-4 flex justify-center space-x-6 mb-6">

    <?php
    foreach ($socials as $key => $value) {
        echo '<li><a href="' . $value . '" class="text-gray-700 hover:text-black">' . $key . '</a></li>';
    }
    ?>

</div>