<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Fonctions extends CI_Model
  {
      public function getAllBook()
      {
        $retour = array();
        $i = 0;
        $query = $this->db->query("select * from livre");
        foreach($query->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        return $retour;
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
      public function bookByCat($id,$page,$nbParPage,$idcat)
      {
        $query = "select count(idlivre),idlivre,titre,description,auteur,daty,fichier,visites from livre where idlivre='%s' and idcategorie limit '%s','%s'";
        $query = sprintf($query,$id,$page,$nbParPage);
        $result = $this->db->query($query);
        $book = array();
        foreach ($result->result_array() as $key) {
          $book[] = $key;
        }
        return $book[0];
      }

  }
 ?>
