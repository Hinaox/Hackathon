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
      
      public function getBookById($id)
      {
        $query = "select * from livre where idlivre='%s'";
        $query = sprintf($query,$id);
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
        $query = "select * from article where idarticle='%s'";
        $query = sprintf($query,$id);
        $result = $this->db->query($query);
        $book = array();
        foreach ($result->result_array() as $key) {
          $book[] = $key;
        }
        return $book[0];
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
