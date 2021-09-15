<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Fonctions extends CI_Model
  {

    // SELECT 
    
      public function getAllBook($pgActuel,$nbPage)
      {
        $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }

        $retour = array();
        $i = 0;
        $query ="select * from livre where etat='done' limit '%s','%s'";
        $query = sprintf($query,$limite,$nbPage);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }
      public function getBookById($id,$pgActuel,$nbPage)
      {
         $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }
        $query = "select * from livre where idlivre='%s' and etat='done' limit '%s','%s'";
        $query = sprintf($query,$id,$limite,$nbPage);
        $result = $this->db->query($query);
        $book = array();
        foreach ($result->result_array() as $key) {
          $book[] = $key;
        }
        return $book[0];
      }

      public function getAllArticle($pgActuel,$nbPage)
      {
        $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }
        $retour = array();
        $i = 0;
        $query = "select * from article where etat='done' limit '%s','%s'";
        $query = sprintf($query,$limite,$nbPage);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function getArticleById($id,$pgActuel,$nbPage)
      {
        $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }
        $query = "select * from article where idarticle='%s' and etat ='done' limit '%s','%s'";
        $query = sprintf($query,$id,$limite,$nbPage);
        $result = $this->db->query($query);
        $book = array();
        foreach ($result->result_array() as $key) {
          $book[] = $key;
        }
        return $book[0];
      }

      public function simpleSearchBook($categ,$pgActuel,$nbPage)
      {
        $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }
        $retour = array();
        $argument="%$categ%";
        $query = "select * from livre where nom like '%s' and etat = 'done' limit '%s','%s'";
        $query = sprintf($query,$argument,$limite,$nbPage);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function simpleSearchArticle($categ,$pgActuel,$nbPage)
      {
        $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }
        $retour = array();
        $argument="%$categ%";
        $query = "select * from article where nom like '%s' and etat = 'done' limit '%s','%s'";
        $query = sprintf($query,$argument,$limite,$nbPage);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function bookOrderByVisite($pgActuel,$nbPage)
      {
        $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }
        $query = "select * from livre where etat = 'done' order by visites limit '%s','%s'";
        $query = sprintf($limite,$nbPage);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function articleOrderByVisite($pgActuel,$nbPage)
      {
        $limite = 0;
        if($pgActuel != 1)
        {
          $limite = $pgActuel * $nbPage;
        }
        else
        {
          $limite = 1;
        }
        $query = "select * from article where etat = 'done' order by visites limit '%s','%s'";
        $query = sprintf($limite,$nbPage);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      // INSERT 

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
        $query = "insert into article values (null,'%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')";
        $query = sprintf($query,$nom,$iduser,$idadmin,$text,$photo,$video,$etat,$date,$visite,$categories);
        $this->db->query($query);
      }

      public function insertBook($titre,$desc,$auteur,$date,$fichier,$categories)
      {
        $etat = "no";
        $visite = 0;
        $query = "insert into livre values (null,'%s','%s','%s','%s','%s','%s','%s','%s')";
        $query = sprintf($query,$titre,$desc,$auteur,$date,$etat,$fichier,$visite,$categories);
        $this->db->query($query);
      }
      
      public function updateBookEtat($id)
      {
        $etat = "done";
        $query = "update livre set etat = '%s' where idlivre = '%s'";
        $query = sprintf($query,$etat,$id);
        $this->db->query($query);
      }

      public function updateBookText($id,$titre,$desc,$auteur,$date,$fichier,$cat)
      {
        $etat = "no";
        $visite = 0;
        $query = "update livre set titre = '%s', description = '%s', auteur = '%s', daty = '%s', etat = '%s', fichier = '%s', visites = '%s', categories = '%s' where idlivre = '%s'";
        $query = sprintf($query,$titre,$desc,$auteur,$date,$etat,$fichier,$visite,$cat,$id);
        $this->db->query($query);
      }
      
      public function updateArticleEtat($id)
      {
        $etat = "done";
        $query = "update article set etat = '%s' where idarticle = '%s'";
        $query = sprintf($query,$etat,$id);
        $this->db->query($query);
      }

      public function updateArticleText($id,$titre,$iduser,$idadmin,$text,$photo,$video,$date,$cat)
      {
        $etat = "no";
        $visite = 0;
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
        $query = "update article set titre = '%s', iduser = '%s', idadmin = '%s', texte = '%s', photo = '%s', video = '%s', etat = '%s', daty = '%s', visites = '%s', categories = '%s'";
        $query = sprintf($query,$titre,$iduser,$idadmin,$text,$photo,$video,$etat,$date,$visite,$cat);
        $this->db->query($query);
      }
  }
 ?>
