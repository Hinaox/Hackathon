<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -  
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function indexAdmin(){
        $article="article";
		$i=0;
		$data['categ']=$this->Fonctions->getCategorie();
		$data['article']=$this->Fonctions->getAllContent(0,3,$article);
		foreach($data['article'] as $article)
		{
			$data['article_image'][$i]=$this->Picture->getPrincipalPicsArticle($article['photo']);
			$i++;
		}
		$livre="livre";
		$data['livre']=$this->Fonctions->getAllContent(0,3,$livre);
		$data['livre_image']=array();
		$j=0;
		foreach($data['livre'] as $livre)
		{
			$data['livre_image'][$j]=$this->Picture->getPrincipalPics($livre['photo']);
			$j++;
		}
		$data['video']=$this->Fonctions->getVideo();

		$data['pageAdmin']='admin_accueil';
		$this->load->view('template_admin',$data);
	}
}
