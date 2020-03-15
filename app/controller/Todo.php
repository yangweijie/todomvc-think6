<?php
declare (strict_types = 1);

namespace app\controller;

use think\Request;
use app\model\Todo AS TodoModel;

class Todo
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        $data = TodoModel::select();
        foreach ($data as $key => &$value) {
            $value['completed'] = $value['completed'] == 'true'?true:false;
        }
        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $data = $request->param('data');
        TodoModel::where(1)->delete();
        if($data){
            foreach ($data as $key => $row) {
                TodoModel::create($row);
            }
        }
        return $this->index();
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
