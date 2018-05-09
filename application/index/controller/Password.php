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
        $page = Request::param('page', 0);
        $password = new \app\index\model\Password;
        $count = $password->count();
        $list = $password->page($page, 10)->select();

        return $this->resSuccess([
            'list' => $list,
            'page_count' => ceil($count/10),
            'record_count' => $count
        ]);
    }
}