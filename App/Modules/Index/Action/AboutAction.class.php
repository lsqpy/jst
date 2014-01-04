<?php
// 本类由系统自动生成，仅供测试用途
class AboutAction extends Action {
    public function index(){
        //新闻列表
        $map['status'] = 1;
        $map['type'] = 2;
        $fields = array('id','color','litpic','title','brieftitle','cid','redirecturl','addtime');
        $news = M('Article')->field($fields)->where($map)->order('sort desc')->findPage(10);
        $this->assign($news);
        
        //联系方式
        $this->assign('info',F('webconfig','','./App/Conf/'));
	    $this->display();
    }
}