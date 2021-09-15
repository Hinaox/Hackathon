<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Fonctions extends CI_Model
  {
      public function getAllBook($pgActuel,$nbParPage)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbParPage;
        $retour = array();
        $i = 0;
        $query ="select * from livre where etat='done' limit '%s','%s'";
        $query = sprintf($query,$limite,$nbParPage);
        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }
      
      public function getBookById($id,$pgActuel,$nbPage)
      {
        $query = "select nom from categorie where idcategorie = '%s' limit 1";
        $query = sprintf($query,$id);
        $result = $this->db->query($query)->row_array();
        return $result;
      }
      public function getBookCat($pgActuel,$nbPage,$idCat)
      {
        $limite = 1;
        $categorie = $this->getCategorie($idCat);
        $categorie='%'.$categorie.'%';
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $i = 0;
        $query ="select * from livre where etat='done' and categories like '%s' limit '%s','%s'";
        $query = sprintf($query,$categorie,$limite,$nbPage);
        foreach($query->result_array() as $row)
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
        return $retour;
      }

      public function getBookById($id,$pgActuel,$nbPage)
      {
        $query = "select count(idlivre),idlivre,titre,description,auteur,daty,fichier,visites from livre where idlivre='%s' limit '%s','%s'";
        $query = sprintf($query,$id,$page,$nbParPage);
        $result = $this->db->query($query);
        $book = array();
        foreach ($result->result_array() as $key) {
          $book[] = $key;
        }
        return $book[0];
      }

      public function getAllArticle($pgActuel,$nbPage)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
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

      public function getArticleCat($pgActuel,$nbPage,$idCat)
      {
        $categorie = $this->getCategorie($idCat);
        $categorie='%'.$categorie.'%';
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $i = 0;
        $query = "select * from article where etat='done' and categories like '%s' limit '%s','%s'";
        $query = sprintf($query,$categorie,$limite,$nbPage);
        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function getArticleById($id)
      {
        $query = "select * from article where idarticle='%s' and etat ='done' limit 1";
        $query = sprintf($query,$id);
        $result = $this->db->query($query)->result_array();
        return $result;
      }

      public function simpleSearchBook($categ,$pgActuel,$nbPage)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $argument='%'.$categ.'%';
        $query = "select * from livre where nom like '%s' and etat = 'done' limit '%s','%s'";
        $query = sprintf($query,$argument,$limite,$nbPage);
        $si = 0;
        $retour = array();
        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function simpleSearchArticle($nom,$pgActuel,$nbPage)
      {
        $limite = 1;
        if($pgActuel != 1) $limite = $pgActuel * $nbPage;
        $retour = array();
        $argument='%'.$nom.'%';
        $query = "select * from article where nom like '%s' and etat = 'done' limit '%s','%s'";
        $query = sprintf($query,$argument,$limite,$nbPage);
        $i = 0;
        $retour = array();
        foreach($query->result_array() as $row)
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
        $query = "select * from livre where etat = 'done' order by visites desc limit 3";
        foreach($query->result_array() as $row)
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
        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }
  }
 ?>
