<?php

namespace app\index\validate;

use think\Validate;

class Password extends Validate
{
    protected $rule = [
        'name' => 'require|max:20',
        'account' => 'require|max:100',
        'url' => 'require|url',
        'type' => 'in:1,2',
        'password' => 'require|max:100',
        'repassword' => 'require|confirm:password',
        'remark' => 'max:255'
    ];
}