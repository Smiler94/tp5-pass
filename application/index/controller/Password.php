<?php

namespace app\index\controller;

use app\common\controller\Common;
use think\Facade\Request;

class Password extends Common
{
    public function addPassword()
    {
        $data = Request::param();

        var_dump($data);
    }
}