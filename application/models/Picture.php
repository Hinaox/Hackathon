<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Picture extends CI_Model
  {
      
    public function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    public function getAllPics($photo)
    {
        $retour=array();
        $i=1;
        while($this->file_get_contents_curl(site_url('assets/img/'.$photo.$i.'png')))
        {
            $retour[$i-1]=$photo.$i."png";
            $i++;
        }
        return $retour;
    }

    public function getPrincipalPics($photo)
    {
        $allpath = "";
        if($this->file_get_contents_curl(site_url('assets/img/'.$photo.'1.png')))
        {
            $allpath = site_url('assets/img/'.$photo.'1.png');
        }
        else 
        {
            $allpath = site_url('assets/img/default.png');
        }
        return $allpath;
    }
    
    public function getPrincipalPicsArticle($photo)
    {
        $allpath = "";
        if($this->file_get_contents_curl(site_url('assets/img/'.$photo.'1.png')))
        {
            $allpath = site_url('assets/img/'.$photo.'1.png');
        }
        else 
        {
            $allpath = site_url('assets/img/defaultArticle1.png');
        }
        return $allpath;
    }
  }
?>