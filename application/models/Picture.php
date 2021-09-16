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
        $i=0;
        for($ii=1;$ii<=3;$ii++)
        {
            if($this->file_get_contents_curl(site_url('assets/img/'.$photo.$ii.'.png')))
            {
                $retour[$ii-1]=site_url('assets/img/'.$photo.$ii.'.png');
                $i++;
            }
            else
            {
                $retour[$ii-1]=$this->getPrincipalPics($photo);
                $i++;
            }
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