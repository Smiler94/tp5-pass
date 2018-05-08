<?php

namespace app\common\controller;

use think\Controller;

class Common extends Controller
{
    protected $response = [
        'code' => '0',
        'msg' => '',
        'info' => null
    ];

    public function resSuccess($content)
    {
        $this->response['info'] = $content;

        return $this->response;
    }

    public function resError($msg)
    {
        $this->response['code'] = '1';
        $this->response['msg'] = $msg;

        return $this->response;
    }
}