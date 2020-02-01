<?php

/**
 * Created by PhpStorm.
 * User: miyaye
 * Date: 2019/3/21
 * Time: 下午5:08
 * trait
 */
trait OwnerTrait
{
    public function owner()
    {
        var_dump('this is owner');
    }
}

class Article{
    use OwnerTrait;
}

class Comment{
    use OwnerTrait;
}

var_dump((new Article())->owner());