<?php

namespace app\index\model;

use app\common\model\Common;

class Password extends Common
{
    public function getTypeAttr($type)
    {
        $types = [
            1 => '工作',
            2 => '生活'
        ];
        return $types[$type];
    }
}