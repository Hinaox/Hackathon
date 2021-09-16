<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Picture extends CI_Model
  {
    public function getNumbersPics($photo)
    {
        $nbphotos = 0;
        if(file_exists(site_url('assets/img/'.$photo.'1.png')))
        {
            $nbphotos = 1;
            if(file_exists(site_url('assets/img/'.$photo.'2.png')))
            {
                $nbphotos = 2;
                if(file_exists(site_url('assets/img/'.$photo.'3.png')))
                {
                    $nbphotos = 3;
                }
            }
        }
        return $nbphotos;
    }

    public function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printing it to the browser.
        curl_setopt($ch, CURLOPT_URL, $url);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
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