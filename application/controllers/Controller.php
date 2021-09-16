<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

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

	public function index()
	{
		$data['page']='accueil';
		$livre = "livre";
		$data['book_visited']=$this->Fonctions->contentOrderByVisite($livre);
		$data['nom_image']=array();
		$i=0;
		foreach($data['book_visited'] as $book)
		{
			$data['nom_image'][$i]=$this->Picture->getPrincipalPics($book['photo']);
			$i++;
		}

		$article = "article";
		$data['article_visited']=$this->Fonctions->contentOrderByVisite($article);
		$data['article_image']=array();
		$i=0;
		foreach($data['article_visited'] as $article)
		{
			$data['article_image'][$i]=$this->Picture->getPrincipalPicsArticle($article['photo']);
			$i++;
		}
		$this->load->view('template',$data);
	}

	public function livre(){
		$data['page']='livre';
		$this->load->view('template',$data);
	}
	public function login(){
		$data['page']='login';
		$this->load->view('template',$data);
	}
	public function inscription(){
		$data['page']='inscription';
		$this->load->helper('Date');
		$this->load->view('template',$data);

	}
	public function ficheLivre(){
		$vue = $this->input->get('id');
		$type = $this->input->get('type');
		$i=0;
		$data['boky'] = $this->Fonctions->getContentById($vue,$type);
		foreach($data['boky'] as $book)
		{
			$data['nom_image']=$this->Picture->getAllPics($book['photo']);
			$data['default_image']=$this->Picture->getPrincipalPics($book['photo']);
			$i++;
		}
		$data['page']='ficheLivre';
		$this->load->view('template',$data);
	}
	public function ficheArticle(){
		$vue = $this->input->get('id');
		$type = $this->input->get('type');
		$data['article'] = $this->Fonctions->getContentById($vue,$type);
		foreach($data['article'] as $article)
		{
			$data['nom_image']=$this->Picture->getAllPics($article['photo']);
			$data['default_image']=$this->Picture->getPrincipalPics($article['photo']);
		}
		$data['page']='ficheArticle';
		$this->load->view('template',$data);
	}
	public function authentification()
	{
		$login = $this->input->post('email');
		$mdp = $this->input->post('mdp');
		$data['user'] = $this->Fonctions->tcheckLoginUser($login,$mdp);
		$data['admin'] = $this->Fonctions->tcheckLoginAdmin($login,$mdp);
		if($data['user'] == "ok" || $data['admin'] == "ok")
		{
			$data['page']='accueil';
			$data['book_visited']=$this->Fonctions->bookOrderByVisite();
			$data['nom_image']=array();
			$i=0;
			foreach($data['book_visited'] as $book)
			{
				$data['nom_image'][$i]=$this->Picture->getPrincipalPics($book['photo']);
				$i++;
			}

			$data['article_visited']=$this->Fonctions->articleOrderByVisite();
			$data['article_image']=array();
			$i=0;
			foreach($data['article_visited'] as $article)
			{
				$data['article_image'][$i]=$this->Picture->getPrincipalPicsArticle($article['photo']);
				$i++;
			}
		}
		else
		{
			$data['erreur'] = "Diso ny mailaka na ny teny miafina !!!";
			$data['page']='login';
		}
		$this->load->view('template',$data);
	}
	public function article(){
		$data['page']='article';
		$this->load->view('template',$data);
	}
	public function recherche(){
		$data['page']='resultatRecherche';
		$this->load->view('template',$data);
	}
	public function insertion(){
		$data['page']='insertion';
		$this->load->view('template',$data);
	}


	public function upload()
	{
		if ($$_FILES["nomfichier"]["size"] < 20000)
		{
			if ($_FILES["nomfichier"]["error"] > 0)
			{
				switch ($_FILES['nomfichier']['error'])
				{
					case 1: // UPLOAD_ERR_PARTIAL
					  echo "Tsy tontonsa hatramin'ny farany ny fangatahanao !";
					  break;
					case 2: // UPLOAD_ERR_NO_FILE
					  echo "Tsy misy lanjany ny  fampitanao !";
					  break;
				}
			}
		  else
			{
				$nom = $_FILES['nomfichier']['name'];
				$nomUpload = $_FILES['nomfichier']['tmp_name'];
				// var_dump($nom);
				$nomdestination = "F:/Info Mendrika/ITU LECONS/Rojo/PHP/05-php-S1/UwAmp/www/hack/Hackathon/application/upload/".$nom."";
				move_uploaded_file($nomUpload, $nomdestination);
				echo "tontonsa ny fampitanao";

				if (file_exists("upload/" . $_FILES["file"]["name"]))
				{
					echo "efa misy anarana mitovy amin'ny ".$_FILES["file"]["name"]." ao";
				}
			}

		}
		else
		{
			echo "tsy mety ny lahatsoratra ampitanao";
		}

	}
	public function indexAdmin(){
		$data['pageAdmin']='admin_accueil';
		$this->load->view('template_admin',$data);
	}
	public function contenu(){
		$data['page']='contenu';
		$this->load->view('template',$data);
	}
	public function contenu_accueil(){
		$data['page']='contenu';
		$data['page_contenu']='contenu_accueil';
		$this->load->view('template',$data);
	}
	public function contenu_video(){
		$data['page']='contenu';
		$data['page_contenu']='contenu_video';
		$this->load->view('template',$data);
	}
	public function contenu_livre(){
		$data['page']='contenu';
		$data['page_contenu']='contenu_livre';
		$this->load->view('template',$data);
	}
	public function contenu_audio(){
		$data['page']='contenu';
		$data['page_contenu']='contenu_audio';
		$this->load->view('template',$data);
	}
	public function contenu_article(){
		$data['page']='contenu';
		$data['page_contenu']='contenu_article';
		$this->load->view('template',$data);
	}

	//controller vers les pages d'insertion

	public  function insertion_livre(){
		$data['page']='insertion';
		$data['page_insertion']='insertion_livre';
		$this->load->view('template',$data);
	}
	public  function insertion_article(){
		$data['page']='insertion';
		$data['page_insertion']='insertion_article';
		$this->load->view('template',$data);
	}
	public  function insertion_video(){
		$data['page']='insertion';
		$data['page_insertion']='insertion_video';
		$this->load->view('template',$data);
	}
	public  function insertion_vocal(){
		$data['page']='insertion';
		$data['page_insertion']='insertion_vocal';
		$this->load->view('template',$data);
	}
}
