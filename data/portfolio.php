<?php
$categoroes = array('Construction', 'Health', 'Sports', 'Education', 'Marketing', 'Rental');
$portfolio = array(
    array(
        'website_title' => 'My Landing Concierge',
        'technologies' => array('HTML-5', 'Bootstrap-4', 'CSS-3', 'jQuery'),
        'images' => array('1.png', '2.png', '3.png'),
        'imgDir' => 'my_landing_concierge',
        'category' => $categoroes[0],
        'link' => '',
    ),
    array(
        'website_title' => 'Better Choice Repairs',
        'technologies' => array('HTML-5', 'Bootstrap-4', 'CSS-3'),
        'images' => array('1.png', '2.png'),
        'imgDir' => 'better_choice_repairs',
        'category' => $categoroes[0],
        'link' => '',
    ),
    array(
        'website_title' => 'Kindertagespflege finden',
        'technologies' => array('HTML-5', 'Bootstrap-4', 'CSS-3', 'PHP', 'Maria DB'),
        'images' => array('1.png', '2.png', '3.png'),
        'imgDir' => 'child_care',
        'category' => $categoroes[1],
        'link' => '',
    ),
    array(
        'website_title' => 'Internly',
        'technologies' => array('HTML-5', 'Bootstrap-4', 'CSS-3', 'jQuery'),
        'images' => array('1.png', '2.png', '3.png'),
        'imgDir' => 'interly',
        'category' => $categoroes[3],
        'link' => '',
    ),
    array(
        'website_title' => 'Mehr Arzt fur Dich',
        'technologies' => array('HTML-5', 'Bootstrap-4', 'CSS-3', 'PHP', 'Maria DB'),
        'images' => array('1.png', '2.png', '3.png'),
        'imgDir' => 'doctor',
        'category' => $categoroes[1],
        'link' => '',
    ),
    array(
        'website_title' => 'Health Guide',
        'technologies' => array('HTML-5', 'Bootstrap-4', 'CSS-3', 'PHP', 'Maria DB'),
        'images' => array('1.png', '2.png', '3.png'),
        'imgDir' => 'furenand',
        'category' => $categoroes[1],
        'link' => '',
    ),
    array(
        'website_title' => 'FH Estimation',
        'technologies' => array('HTML-5', 'Bootstrap-4', 'CSS-3', 'PHP'),
        'images' => array('1.png', '2.png', '3.png'),
        'imgDir' => 'fhestimation',
        'category' => $categoroes[0],
        'link' => '',
    ),
    array(
        'website_title' => 'Live Soft 24',
        'technologies' => array('HTML-5', 'Bootstrap-5', 'CSS-3', 'PHP', 'HLS'),
        'images' => array('1.png', '2.png', '3.png'),
        'imgDir' => 'video_player',
        'category' => $categoroes[2],
        'link' => '',
    ),
    array(
        'website_title' => 'Bigwin',
        'technologies' => array('HTML-5', 'Bootstrap-5', 'CSS-3', 'jQuery', 'NodeJS', 'Socket IO'),
        'images' => array('1.png'),
        'imgDir' => 'bigwin',
        'category' => $categoroes[2],
        'link' => '',
    ),
    array(
        'website_title' => 'TMA Agency',
        'technologies' => array('HTML-5', 'Bootstrap-5', 'CSS-3'),
        'images' => array('1.png','2.png','3.png','4.png','5.png','6.png'),
        'imgDir' => 'tma-agency',
        'category' => $categoroes[4],
        'link' => '',
    ),
    array(
        'website_title' => 'NV Rent A Car',
        'technologies' => array('HTML-5', 'Bootstrap-5', 'CSS-3', 'jQuery', 'API Integration'),
        'images' => array('1.png','2.png','3.png','4.png','5.png'),
        'imgDir' => 'nv-rent-a-car',
        'category' => $categoroes[5],
        'link' => '',
    )
);

if(isset($_POST) && isset($_POST['index']) ){
    $index = $_POST['index'];
    die( json_encode( $portfolio[$index] ) );
}
?>