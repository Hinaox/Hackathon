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
		// $data['book_visited']=$this->Fonctions->bookOrderByVisite();
		// $data['nom_image']=array();
		// $i=0;
		// foreach($data['book_visited'] as $book)
		// {
		// 	$data['nom_image'][$i]=$this->Picture->getPrincipalPics($book['photo']);
		// 	$i++;
		// }

		// $data['article_visited']=$this->Fonctions->articleOrderByVisite();
		// $data['article_image']=array();
		// $i=0;
		// foreach($data['article_visited'] as $article)
		// {
		// 	$data['article_image'][$i]=$this->Picture->getPrincipalPicsArticle($article['photo']);
		// 	$i++;
		// }
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
		$data['page']='ficheLivre';
		$this->load->view('template',$data);
	}
	public function ficheArticle(){
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
		if ($_FILES['nomfichier']['error']) {
		  switch ($_FILES['nomfichier']['error']){
		    case 1: // UPLOAD_ERR_INI_SIZE
		      echo "Le fichier dépasse la limite autorisée par le serveur (fichier php.ini) !";
		      break;
		    case 2: // UPLOAD_ERR_FORM_SIZE
		      echo "Le fichier dépasse la limite autorisée dans le formulaire HTML !";
		      break;
		    case 3: // UPLOAD_ERR_PARTIAL
		      echo "L'envoi du fichier a été interrompu pendant le transfert !";
		      break;
		    case 4: // UPLOAD_ERR_NO_FILE
		      echo "Le fichier que vous avez envoyé a une taille nulle !";
		      break;
		  	}
		}else{
	   		$nom = $_FILES['nomfichier']['name'];
	   		$nomUpload = $_FILES['nomfichier']['tmp_name'];
	   		// var_dump($nom);
		  $nomdestination = "F:/Info Mendrika/ITU LECONS/Rojo/PHP/05-php-S1/UwAmp/www/hack/Hackathon/application/upload/".$nom."";
		  move_uploaded_file($nomUpload, $nomdestination);
		  echo "upload vita";
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
	
	public function loadFPDF()
	{
		$retourlivre=array();
		$retourarticle=array();
		$categorie=$this->Fonctions->getCategorieFpdf();
		$i=0;
		$nb=1;
		foreach($categorie as $cat)
		{
			$retourlivre[$i]=$nb."-".strtoupper($cat['nom']);
			$livr=$this->Fonctions->getAllContentByCat($cat['nom'],'livre');
			$i++;

			foreach($livr as $li)
			{
				$retourlivre[$i]='    '.$li['titre'];
				$i++;
			}

			$nb++;
		}
		$ar=0;
		$nbar=1;
		foreach($categorie as $cat)
		{
			$retourarticle[$ar]=$nbar."-".strtoupper($cat['nom']);
			$articl=$this->Fonctions->getAllContentByCat($cat['nom'],'article');
			$ar++;

			foreach($articl as $li)
			{
				$retourarticle[$ar]='    '.$li['titre'];
				$ar++;
			}

			$nbar++;
		}

		$bookPdf=array();
		$picBook=array();	
		$myBook=$this->Fonctions->getAllContentFpdf("livre");
		$b=0;
		foreach($myBook as $myBookPdf)
		{
			$bookPdf[$b]=$myBookPdf;
			$picBook[$b]=$this->Picture->getPrincipalPics($myBookPdf['photo']);
			$picBook[$b]=explode(".",$picBook[$b])[0];
			$b++;
		}
		$articlePdf=array();
		$picArticle=array();
		$myArticle=$this->Fonctions->getAllContentFpdf("article");
		$a=0;
		foreach($myArticle as $myArPdf)
		{
			$articlePdf[$a]=$myArPdf;
			$picArticle[$a]=$this->Picture->getPrincipalPics($myArPdf['photo']);
			$a++;
		}
		$data['articlePdf']=$articlePdf;
		$data['bookPdf']=$bookPdf;
		$data['livre']=$retourlivre;
		$data['article']=$retourarticle;
		$data['picBook']=$picBook;
		$data['picArticle']=$picArticle;
		$this->load->view('accueil_fpdf',$data);
	}
}
