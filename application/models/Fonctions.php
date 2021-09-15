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

      public function searchBook($id,$page,$nbParPage)
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
  }
 ?>
