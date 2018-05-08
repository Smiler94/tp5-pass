<?php

namespace app\index\controller;

use app\common\controller\Common;
use think\Facade\Request;

class Password extends Common
{
    public function addPassword()
    {
        $data = Request::param();

        $validate = new \app\index\validate\Password;

        if ($validate->check($data)) {
            $password = new \app\index\model\Password($data);
            if ($id = $password->save()) {
                return $this->resSuccess([
                    'id' => $id
                ]);
            }
        }
        return $this->resError($validate->getError());
    }

    public function passwordList()
    {
        $password = new \app\index\model\Password;

        $list = $password->page(0, 10)->select();

        return $this->resSuccess([
            'list' => $list,
            'page_count' => 10
        ]);
    }
}