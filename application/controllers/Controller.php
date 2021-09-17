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
		$livre = "livre";
		$article = "article";
		$data['user'] = $this->Fonctions->tcheckLoginUser($login,$mdp);
		$data['admin'] = $this->Fonctions->tcheckLoginAdmin($login,$mdp);
		if($data['user'] == "ok" || $data['admin'] == "ok")
		{
			$data['page']='accueil';
			$data['book_visited']=$this->Fonctions->contentOrderByVisite($livre);
			$data['nom_image']=array();
			$i=0;
			foreach($data['book_visited'] as $book)
			{
				$data['nom_image'][$i]=$this->Picture->getPrincipalPics($book['photo']);
				$i++;
			}
	
			$data['article_visited']=$this->Fonctions->contentOrderByVisite($article);
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
				$nomdestination = site_url('assets/pdf/'.nom.'');
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

	public function download()
	{
		$file_name=$this->input->post('download');
		echo "file : ".$file_name;
		$url = site_url('assets/pdf/'.$file_name.''); 
		echo "url : ".$url;

		// $fichier_nom = basename($url);
		$fichier_contenu = file_get_contents($url);
		// $dossier_enregistrement = "telechargement/";

		// if(file_put_contents($dossier_enregistrement . $fichier_nom, $fichier_contenu)) 
		// { 
		// 	echo "Fichier téléchargé avec succès"; 
		// } 
		// else 
		// { 
		// 	echo "Fichier non téléchargé"; 
		// } 
		force_download($file_name,$url);
	}

	
	public function contenu(){
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

		// $pg=$this->input->get('pg');
		// $nbParPage = 3;
		// $pageActuel = 1;
		// if($pg != null)
		// {
		// 	$pageActuel = $pg;
		// }

		// $livre="livre";

		// $data['livre']=$this->Fonctions->getAllContent($pageActuel,$nbParPage,$livre);



		$data['page']='contenu';
		$this->load->view('template',$data);
	}
	public function contenu_accueil(){
		$data['categ']=$this->Fonctions->getCategorie();
		$data['page']='contenu';
		$data['page_contenu']='contenu_accueil';
		$this->load->view('template',$data);
	}
	public function contenu_video(){
		$data['categ']=$this->Fonctions->getCategorie();
		$data['page']='contenu';
		$data['page_contenu']='contenu_video';
		$this->load->view('template',$data);
	}
	public function contenu_livre(){

		$livre="livre";
		$pg=$this->input->get('pg');
		$nbParPage = 3;
		$pageActuel = 0;
		if($pg != null)
		{
			$pageActuel = $pg;
		}
		$data['categ']=$this->Fonctions->getCategorie();
		$data['livre']=$this->Fonctions->getAllContent($pageActuel,$nbParPage,$livre);
		$j=0;
		foreach($data['livre'] as $livre)
		{
			$data['livreimage'][$j]=$this->Picture->getPrincipalPics($livre['photo']);
			$j++;
		}
		$data['page']='contenu';
		$data['page_contenu']='contenu_livre';
		$this->load->view('template',$data);
	}
	public function contenu_audio(){
		$data['categ']=$this->Fonctions->getCategorie();
		$data['page']='contenu';
		$data['page_contenu']='contenu_audio';
		$this->load->view('template',$data);
	}
	public function contenu_article(){
		$data['categ']=$this->Fonctions->getCategorie();

		$article="article";
		$pg=$this->input->get('pg');
		$nbParPage = 3;
		$pageActuel = 0;
		if($pg != null)
		{
			$pageActuel = $pg;
		}
		$data['categ']=$this->Fonctions->getCategorie();
		$data['article']=$this->Fonctions->getAllContent($pageActuel,$nbParPage,$article);
		$j=0;
		foreach($data['article'] as $livre)
		{
			$data['articleimage'][$j]=$this->Picture->getPrincipalPics($article['photo']);
			$j++;
		}

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

	public function insererArticle()
	{
		$data["confirm"]="tafiditra!";
		$data['page']='insertion';
		$data['page_insertion']='insertion_article';
		$this->load->view('template',$data);
	}
}
