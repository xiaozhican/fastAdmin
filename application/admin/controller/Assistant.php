<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/7/16
 * Time: 10:44
 */
namespace app\admin\controller;
use app\common\controller\Backend;
use think\Db;


class Assistant extends Backend{
    //活动列表
    public function lists(){
        $list = Db::name('assistant')->order('create_time desc')->select();
        $this->assign('list',$list);
        return $this->view->fetch();
    }
    //编辑
    public function edit($id=null){
        $query = \app\admin\model\Assistant::get($id);
        if(request()->isPost()){
            $params = request()->post();
            //var_dump($params);eixt;
            $result = $query->save($params);
            if($result !== false){
                $this->success('修改成功','assistant/lists');
            }else{
                $this->error('修改失败');
            }
        }
        $this->assign('query',$query);
        return $this->view->fetch();
    }
    //添加
    public function add(){
        return $this->view->fetch();
    }
    public function upload(){
        //$params = request()->post();
        return $this->view->fetch();
    }
}