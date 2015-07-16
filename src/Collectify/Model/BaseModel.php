<?php

namespace Collectify\Model;

use RedBeanPHP\SimpleModel;

abstract Class BaseModel extends  SimpleModel
{
    public $slug;
    public $createdAt;
    public $updatedAt;

}