<?php
require_once './classes/Data/VideoData.php';
require_once './classes/Data/ImageData.php';
require_once './classes/notifiers/EmailNotifier.php';
require_once './classes/notifiers/PhoneNotifier.php';
require_once './classes/notifiers/YoutubeNotifier.php';
$videoData = new VideoData();

$emailNotifier = new EmailNotifier($videoData);
$phoneNotifier = new PhoneNotifier($videoData);
$youtubeNotifier = new YoutubeNotifier($videoData);

$imageData = new ImageData();
$imageEmailNotifier = new EmailNotifier($imageData);

$videoData->setTitle('Observer Design Pattern');
echo '<hr/>';

$videoData->detachObserver($phoneNotifier);
$videoData->setDescription('Huy Nguyen');

echo '<hr/>';
$imageData->setTitle('Picture 1');
$imageData->setPhotographer('Phi Huy');
