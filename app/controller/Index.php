<?php
namespace app\controller;

use app\BaseController;

use app\model\Todo;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        // $data = Todo::select();
        return View::fetch();
        return json($data);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
