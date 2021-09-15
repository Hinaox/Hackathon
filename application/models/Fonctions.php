<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Fonctions extends CI_Model
  {
      public function getAllBook()
      {
        $retour = array();
        $i = 0;
        $query = $this->db->query("select * from livre where etat='done'");
        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }
      public function getCatById($id)
      {
        $query = "select nom from categorie where idcategorie = '%s' limit 1";
        $query = sprintf($query,$id);
        $result = $this->db->query($query)->row_array();
        return $result;
      }
      public function searchBook($id,$page,$nbParPage,$idCat)
      {
        $categorie = $this->getCatById($idCat);
        $query = "select count(idlivre),idlivre,titre,description,auteur,daty,fichier,visites from livre where idlivre='%s'and categories like '%'%s'%' limit '%s','%s'";
        $query = sprintf($query,$id,$categorie,$page,$nbParPage);
        $result = $this->db->query($query);
        $book = array();
        foreach ($result->result_array() as $key) {
          $book[] = $key;
        }
        return $book[0];
      }

      public function getAllArticle()
      {
        $retour = array();
        $i = 0;
        $query = $this->db->query("select * from article where etat='done'");
        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function getArticleById($id)
      {
        $query = "select * from article where idarticle='%s' limit 1";
        $query = sprintf($query,$id);
        $result = $this->db->query($query)->result_array();
        return $result;
      }

      public function searchBookSimple($categ)
      {
        $retour = array();
        $query = "select * from livre where nom like %s";
        $query = sprintf($query,$categ);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function searchArticleSimple($categ)
      {
        $retour = array();
        $query = "select * from article where nom like %s";
        $query = sprintf($query,$categ);

        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
      }

      public function bookOrderByVisite()
      {
        $query = "select * from livre where etat = 'done'";
      }
  }
 ?>
