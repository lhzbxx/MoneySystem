<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $Book=M("Book");
        $d=$Book->order('date desc')->select();
        $this->data=$d;
        $this->display();
    }

    // public function bookList(){
    //     $Book=M("Book");
    //     $d=$Book->getFild('name');
    //     $this->ajaxReturn($d);
    // }

    public function checkShow(){
        $book=I("get.book");
        $List=M("List");
        $d=$List->where("book='%s'",$book)->order('date desc')->select();
        $this->data=$d;
        $this->display();
    }

    public function bookShow(){
        $Book=M("Book");
        $d=$Book->order('date desc')->select();
        $this->data=$d;
        $this->display();
    }

    public function bookAdd(){
        $name=I("post.name","");
        $info=I("post.info","");
        $date=I("post.date",'');

        if($name=='' || $info=='' || $date==''){
            $this->display();
        }
        else{
            $Book=M("Book");
            $add_arr['name']=$name;
            $add_arr['info']=$info;
            $add_arr['date']=$date;
            $s=$Book->add($add_arr);
            if($s){
                $this->success("添加账本成功~");
            }
            else{
                $this->error("添加账本失败~");
            }
        }
    }

    public function checkAdd(){
        $Book=M("Book");
        $d=$Book->select();
        $this->data=$d;

        $amount =   I("post.amount","");
        $info   =   I("post.info","");
        $date   =   I("post.date","");
        $book   =   I("post.book","");
        $fid    =   I("post.fid","");

        if($amount=='' || $info=='' || $date=='' || $book=='') {
            $this->action_url=U('Home/Index/checkAdd');
            $this->display();
        }
        else{
            // $setting=C('UPLOAD_SITEIMG_OSS2');
            // $fieldname = "file";
            // $setting['savePath']='fapiao/';
            // $Upload = new \Think\Upload($setting);
            // $info = $Upload->upload();
            // if(!$info){
            //     $this->error("写入云存储失败~");
            // }
            // else {
            //     $url_oss = OSS2 . $info[$fieldname]['savepath'] . $info[$fieldname]['savename'];
            //     $Moneylist=M("Moneylist");
            //     $add_arr['pic']=$url_oss;
            //     $add_arr['amount']=$amount;
            //     $add_arr['info']=$info;
            //     $add_arr['date']=$date;
            //     $add_arr['fid']=I("get.fid","1");
            //     $s=$Moneylist->add($add_arr);
            //     if($s){
            //         $this->success("写入数据库成功~");
            //     }
            //     else{
            //         $this->error("写入数据库失败~");
            //     }
            // }
            $Moneylist=M("List");
            $add_arr['pic']="fixed";
            $add_arr['amount']=$amount;
            $add_arr['info']=$info;
            $add_arr['date']=$date;
            $add_arr['book']=$book;
            $add_arr['fid']=$fid;

            $s=$Moneylist->add($add_arr);
            if($s){
                $this->success("写入数据库成功~");
            }
            else{
                $this->error("写入数据库失败~");
            }
        }
    }

}