<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        echo "fk";
        //首页的list
    }

    public function cln(){
        $Zhangbu=M("Zhangbu");
        $d=$Zhangbu->order('date desc')->select();

        $this->data=$d;
        $this->display();
    }

    public function admin(){
        $name=I("post.name","");
        $info=I("post.info","");
        $date=I("post.date",'');

        if($name=='' || $info=='' || $date==''){
            $this->display();
        }
        else{
            $Zhangbu=M("Zhangbu");
            $add_arr['name']=$name;
            $add_arr['info']=$info;
            $add_arr['date']=$date;

            $s=$Zhangbu->add($add_arr);
            if($s){
                $this->success("添加账本成功~");
            }
            else{
                $this->error("添加账本失败~");
            }
        }
    }

    public function publish(){

        $account=I("post.account","");
        $thing=I("post.thing","");
        $date=I("post.date","");

        if($account=='' || $thing=='' || $date=='') {
            $this->action_url=U('Home/Index/publish','','')."?fid=".I("get.fid","");
            $this->display();
        }
        else{
            $setting=C('UPLOAD_SITEIMG_OSS2');
            $fieldname = "file";
            $setting['savePath']='fapiao/';
            $Upload = new \Think\Upload($setting);
            $info = $Upload->upload();
            if(!$info){
                $this->error("写入云存储失败~");
            }
            else {
                $url_oss = OSS2 . $info[$fieldname]['savepath'] . $info[$fieldname]['savename'];
                $Moneylist=M("Moneylist");
                $add_arr['pic']=$url_oss;
                $add_arr['account']=$account;
                $add_arr['thing']=$thing;
                $add_arr['date']=$date;
                $add_arr['fid']=I("get.fid","1");

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

}