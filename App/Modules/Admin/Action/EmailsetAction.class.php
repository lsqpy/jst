<?php
/**
 *      @title Email配置信息
 *      @author Lsq <lsqpy@163.com>
 *      @date   2013-12-03
 */
class EmailsetAction extends CommonAction {

    public function _initialize(){
        parent::_initialize();
    }
    
    public function index(){
        
        $this->assign('info',F('emailconfig','','./App/Conf/'));
        $this->display();
    }

    public function doEdit(){
        
        unset($_POST['x']);
        unset($_POST['y']);
        F('emailconfig',$_POST,'./App/Conf/');
        $this->success("提交成功！",U('index'));   
    
    }
    
    public function send(){
        
        $data = F('emailconfig','','./App/Conf/');
        import('ORG.Net.Smtp');
        $smtpserver = $data['host'];    //SMTP服务器
        $smtpserverport = $data['port'];    //SMTP服务器端口
        $smtpusermail = $data['username'];  //SMTP服务器的用户邮箱
        $smtpuser = $data['username'];  //SMTP服务器的用户帐号
        $smtppass = $data['password'];  //SMTP服务器的用户密码

        $smtpemailto = explode(",",$_POST['mailto']);    //发送给谁
        $mailsubject = $_POST['subject'];    //邮件主题
        $mailbody = $_POST['body'];       //邮件内容
        $mailtype = $_POST['type'];       //邮件格式（HTML/TXT）,TXT为文本邮件
        
        
        $smtp= new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
       	$smtp->debug = FALSE;   //是否显示发送的调试信息
        
        foreach($smtpemailto as $mailto){
            $smtp->sendmail($mailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
        }
        
        $this->success("提交成功！");
        
    }

}