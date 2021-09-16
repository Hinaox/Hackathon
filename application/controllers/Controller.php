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
		$data['adminsup'] = $this->Fonctions->tcheckLoginAdminSup($login,$mdp);
		if($data['user'] == "ok" || $data['admin'] == "ok" || $data['adminsup'] == "ok")
		{
			$data['page']='accueil';
			$this->load->view('template',$data);	
		}
		
		$data['erreur'] = "Diso ny mailaka na ny teny miafina !!!";
		$data['page']='login';
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
	public function ecrire(){
		$data['page']='ecrire';
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
}
