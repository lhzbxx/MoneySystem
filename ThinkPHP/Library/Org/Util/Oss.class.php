<?php
/**
 * Created by 楚门集团.
 * User: 杨小龙
 * Date: 2014/10/10
 * Time: 22:38
 */
namespace Org\Util;
use \Aliyun\OSS\OSSClient;
require_once dirname(__FILE__).'\Aliyun\aliyun.php';
class Oss{
    private $config='';
    public function __construct(){
        $this->config=C("UPLOAD_SITEIMG_OSS")['driverConfig'];
    }
    public function img_ob($ob,$imgname,$path='',$size='',$key=''){
        $client=$this->client_oss($this->config);
        if($size==''){
            $size=strlen($ob);
        }

        if($path==''){
            $path=C("UPLOAD_SITEIMG_OSS2")['savePath'].date("Y-m",time()).'/'.$imgname;
        }
        else{
            $path=$path.date("Y-m",time()).'/'.$imgname;
        }
        if(is_array($key)){
            $s=$this->oss_upload($client,$ob,$size,$path,$key);
        }
        else{
            $s=$this->oss_upload($client,$ob,$size,$path);
        }
        if($s){
            return $s;
        }
        else {
            return false;
        }
    }
    public function delete($key){
        $client=$this->client_oss($this->config);
        $client->deleteObject(array(
            'Bucket' => $this->config['Bucket'],
            'Key' => $key,
        ));
    }
    private function client_oss($a){
        $client = OSSClient::factory(array(
            'AccessKeyId' => $a['AccessKeyId'],
            'AccessKeySecret' => $a['AccessKeySecret'],
        ));
        return $client;

    }
    private function oss_upload($client,$content,$length,$name,$key=''){
        $tmp_arr=array(
            'Bucket' => $this->config['Bucket'],
            'Key' => $name,
            'Content' => $content,
            'ContentLength' => $length,
        );
        if(is_array($key)){
            $tmp_arr=array_merge($tmp_arr,$key);
        }
//        die(print_r($tmp_arr));
        $state=$client->putObject($tmp_arr);
        if($state){
            return OSS.$name;
        }
        else{
            return false;
        }
    }
}