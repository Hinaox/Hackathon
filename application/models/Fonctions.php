<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Fonctions extends CI_Model
  {
      public function getAllBook($pgActuel,$nbParPage,$etat)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbParPage;
        $retour = array();
        $i = 0;
        $query ="select * from livre where etat=%s limit %s,%s";
        $query = sprintf($query,$etat,$limite,$nbParPage);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }
      public function getCatById($id)
      {
        $query = "select nom from categorie where idcategorie = %s limit 1";
        $query = sprintf($query,$id);
        $result = $this->db->query($query)->row_array();
        return $result;
      }
      public function getBookCat($pgActuel,$nbPage,$idCat,$etat)
      {
        $limite = 1;
        $categorie = $this->getCategorie($idCat);
        $categorie='%'.$categorie.'%';
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $i = 0;
        $query ="select * from livre where etat=%s and categories like %s limit %s,%s";
        $query = sprintf($query,$etat,$categorie,$limite,$nbPage);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }
      public function getBookById($id)
      {
        $query = "select * from livre where idlivre=%s";
        $query = sprintf($query,$id);
        $result = $this->db->query($query);
        $book = $result->row_array();

        return $book;
      }

      public function getAllArticle($pgActuel,$nbPage,$etat)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $i = 0;
        $query = "select * from article where etat=%s limit %s,%s";
        $query = sprintf($query,$etat,$limite,$nbPage);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function getArticleCat($pgActuel,$nbPage,$idCat,$etat)
      {
        $categorie = $this->getCategorie($idCat);
        $categorie='%'.$categorie.'%';
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $i = 0;
        $query = "select * from article where etat=%s and categories like %s limit %s,%s";
        $query = sprintf($query,$etat,$categorie,$limite,$nbPage);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function getArticleById($id,$etat)
      {
        $query = "select * from article where idarticle=%s and etat =%s limit 1";
        $query = sprintf($query,$id,$etat);
        $result = $this->db->query($query)->result_array();
        return $result;
      }

      public function simpleSearchBook($categ,$pgActuel,$nbPage,$etat)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $argument='%'.$categ.'%';
        $query = "select * from livre where titre like %s and etat = %s limit %s,%s";
        $query = sprintf($query,$argument,$etat,$limite,$nbPage);
        $result = $this->db->query($query);
        $i = 0;
        $retour = array();
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function advancedSearchBook($titre,$categorie,$descri,$auteur,$nbdate,$nbPage)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        
        $bdd= bdd_connection();
        $req="";
        $query = "select * from livre where etat='done' ".$req." limit ".$limite.",".$nbPage; 
        
        if(!empty($titre))
        {
            $req=$req." and titre like "."'%".$titre."%'";
        }
        if(!empty($categorie))
        {
            $req=$req." and categorie like "."'%".$categorie."%'";
        }
        if(!empty($descri))
        {
            $req=$req." and description like "."'%".$descri."%'";
        }
        if(!empty($auteur))
        {
            $req=$req." and auteur=  "."'"."$auteur"."'";
        }
        if(!empty($nbdate))
        {
            $req=$req." and abs(datediff(daty,CURRENT_DATE()))<=".$nbdate; 
        }

        $result = $this->db->query($query);
        $i = 0;
        $retour = array();
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function simpleSearchArticle($nom,$pgActuel,$nbPage,$etat)
      {
        $limite = 1;
        if($pgActuel != 1) $limite = $pgActuel * $nbPage;
        $argument='%'.$nom.'%';
        $query = "select * from article where titre like %s and etat = %s limit %s,%s";
        $query = sprintf($query,$argument,$etat,$limite,$nbPage);
        $result = $this->db->query($query);
        $i = 0;
        $retour = array();
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }
      
      public function advancedSearchArticle($titre,$categorie,$descri,$nbdate,$nbPage)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        
        $bdd= bdd_connection();
        $req="";
        $query = "select * from article where etat='done' ".$req." limit ".$limite.",".$nbPage; 
        
        if(!empty($titre))
        {
            $req=$req." and titre like "."'%".$titre."%'";
        }
        if(!empty($categorie))
        {
            $req=$req." and categorie like "."'%".$categorie."%'";
        }
        if(!empty($descri))
        {
            $req=$req." and texte like "."'%".$descri."%'";
        }
        if(!empty($nbdate))
        {
            $req=$req." and abs(datediff(daty,CURRENT_DATE()))<=".$nbdate; 
        }

        $result = $this->db->query($query);
        $i = 0;
        $retour = array();
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function bookOrderByVisite()
      {
        $retour = array();
        $i = 0;
        $query = "select idlivre,titre,substring(description,1,100) as descri,visites,photo from livre where etat = 'done' order by visites desc limit 3";
        $result = $this->db->query($query);
        
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function articleOrderByVisite()
      {
        $retour = array();
        $i = 0;
        $query = "select * from article where etat = 'done' order by visites desc limit 3";
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function insertArticle($nom,$iduser,$idadmin,$text,$photo,$video,$date,$categories)
      {
        $etat = "no";
        if($iduser == null)
        {
          $iduser = null;
        }
        else if($idadmin == null)
        {
          $idadmin = null;
        }
        else if($idadmin != null)
        {
          $etat = "done";
        }
        $visite = 0;
        $query = "insert into article values (null,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)";
        $query = sprintf($query,$nom,$iduser,$idadmin,$text,$photo,$video,$etat,$date,$visite,$categories);
        $this->db->query($query);
      }

      public function insertBook($titre,$desc,$auteur,$date,$fichier,$categories)
      {
        $etat = "no";
        $visite = 0;
        $query = "insert into livre values (null,%s,%s,%s,%s,%s,%s,%s,%s)";
        $query = sprintf($query,$titre,$desc,$auteur,$date,$etat,$fichier,$visite,$categories);
        $this->db->query($query);
      }

      public function updateBookEtat($id)
      {
        $etat = "done";
        $query = "update livre set etat = %s where idlivre = %s";
        $query = sprintf($query,$etat,$id);
        $this->db->query($query);
      }

      public function updateBookText($id,$titre,$desc,$auteur,$date,$fichier,$cat)
      {
        $etat = "no";
        $visite = 0;
        $query = "update livre set titre = %s, description = %s, auteur = %s, daty = %s, etat = %s, fichier = %s, visites = %s, categories = %s where idlivre = %s";
        $query = sprintf($query,$titre,$desc,$auteur,$date,$etat,$fichier,$visite,$cat,$id);
        $this->db->query($query);
      }

      public function updateArticleEtat($id)
      {
        $etat = "done";
        $query = "update article set etat = %s where idarticle = %s";
        $query = sprintf($query,$etat,$id);
        $this->db->query($query);
      }

      public function updateArticleText($id,$titre,$iduser,$idadmin,$text,$photo,$video,$date,$cat)
      {
        $etat = "no";
        $visite = 0;
        if($iduser == null) $iduser = null;
        else if($idadmin == null) $idadmin = null;
        else if($idadmin != null) $etat = "done";
        $query = "update article set titre = %s, iduser = %s, idadmin = %s, texte = %s, photo = %s, video = %s, etat = %s, daty = %s, visites = %s, categories = %s";
        $query = sprintf($query,$titre,$iduser,$idadmin,$text,$photo,$video,$etat,$date,$visite,$cat);
        $this->db->query($query);
      }

      public function deleteArticle($id)
      {
        $query = "delete from article where idarticle = %s";
        $query = sprintf($query,$id);
        $this->db->query($query);
      }

      public function deleteBook($id)
      {
        $query = "delete from livre where idlivre = %s";
        $query = sprintf($query,$id);
        $this->db->query($query);
      }
      public function deconnect()
      {
        $this->session->sess_destroy();
        redirect(site_url());
      }

      public function tcheckLoginAdmin($login,$mdp)
      {
        $query = "select count(idadmin) as c,idadmin from admin where login=%s and mdp=sha1(%s)";
        $query = sprintf($query,$this->db->escape($login),$this->db->escape($mdp));
        $result = $this->db->query($query);
        $row = $result->row_array();  
        if($row['c']!=0)
        {
          $this->session->set_userdata('admin',$row['idadmin']);
          return "ok";
        }
        return "ko";
      }

      public function tcheckLoginUser($login,$mdp)
      {
        $query = "select count(iduser) as c,iduser from user where login= %s and mdp=sha1(%s)";
        $query = sprintf($query,$this->db->escape($login),$this->db->escape($mdp));
        $result = $this->db->query($query);
        $row = $result->row_array();  
        if($row['c']!=0)
        {
          $this->session->set_userdata('user',$row['iduser']);
          return "ok";
        }
        return "ko";
      }
      public function getMarkers($idarticle){
        $retour = array();
        $query = " select * from geolocalisation where idarticle='%s'";
        $query = sprintf($query,$this->db->escape($idarticle));
        $res = $db->query($query);
        foreach($res->result_array() as $row){
          array_push($retour,$row);
        }
        return $retour;
      }

      public function insertMarkers($idarticle,$listCoord)
      {
        for($i=0;$i<count($listCoord);$i++){
          $query = "insert into geolocalisation values('%s','%s','%s')";
          $query = sprintf($query,$this->db->escape($listCoord[$i][0]),$this->db->escape($listCoord[$i][1]));
          $this->db->query($query);
        }
      }

      public function visiteLivreCount($idLivre){
        $query = "update livre set visites = (visites+1) where idlivre='%s'";
        $query = sprintf($query,$idLivre);
        $this->db->query($query);
      }

      public function visiteArticleCount($idArticle){
        $query = "update article set visites = (visites+1) where idArticle='%s'";
        $query = sprintf($query,$idArticle);
        $this->db->query($query);
      }
      public function getAllCoord($strLat,$strLong){
        $retour = array();
        for($i=0;$i<$strLat.length;$i++){
          $retour[$i]=array();
          $retour[$i][0]=floatval($strLat[$i]);
          $retour[$i][1]=floatval($strLong[$i]);
        }
        return $retour;
      }

  }
 ?>
