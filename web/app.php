<?php
require_once __DIR__ . '/../core/bootstrap.php';
use RedBeanPHP\Facade as R;

/**
 * @var $item \Collectify\Model\Item
 */
$item = R::dispense('item');
$item->title = "Mon title";
R::store($item);