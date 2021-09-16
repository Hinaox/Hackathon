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

    public function getPrincipalPics($photo)
    {
        $allpath = "";
        if(file_exists(site_url('assets/img/'.$photo.'1.png')))
        {
            $allpath = site_url('assets/img/'.$photo.'1.png');
        }
        else 
        {
            $allpath = site_url('assets/img/defaultPics.png');
        }
        return $allpath;
    }
  }
?>