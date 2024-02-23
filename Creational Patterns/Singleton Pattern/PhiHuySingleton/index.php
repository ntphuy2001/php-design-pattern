<?php
require_once 'classes/Singleton.php';
require_once 'classes/ChildSingleton1.php';
require_once 'classes/ChildSingleton2.php';

ChildSingleton1::getInstance();
ChildSingleton2::getInstance();
Singleton::getInstance()->showInstance();