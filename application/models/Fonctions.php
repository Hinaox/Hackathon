<?php
  if(! defined('BASEPATH')) exit('No direct script access allowed');
  class Fonctions extends CI_Model
  {
    // public function getContentById($id,$pageActuel,$nbPage,$type)
    // {
    //   $limit = 1;
    //   if($pgActuel != 1) $limite = $pageActuel * $nbPage;
    //   $query = "select * from %s where idcontenu=%s limit %s,%s";
    //   $query = sprintf($query,$type,$id,$limite,$nbPage);
    //   $result = $this->db->query($query);
    //   $content = array();
    //   foreach ($result->result_array() as $key) {
    //     $content[] = $key;
    //   }
    //   $query->freeResult();
    //   return $retour;
    // }
    public function getCategorieFpdf()
    {
      $query = "select * from categorie order by nom asc";
      $result = $this->db->query($query);
      $i=0;
      $retour = array();
      foreach($result->result_array() as $row)
      {
        $retour[$i]=$row;
        $i++;
      }
      $result->free_Result();
      return $retour;
    }
    public function getContentById($id,$type)
    {
      // $limit = 1;
      // if($pgActuel != 1) $limite = $pageActuel * $nbPage;
      $query = "select * from %s where idcontenu='%s'";
      $query = sprintf($query,$type,$id);
      $result = $this->db->query($query);
      $content = array();
      foreach ($result->result_array() as $key) {
        $content[] = $key;
      }
      return $content;
      $query->freeResult();
    }

    public function getCatById($id)
    {
      $query = "select nom from categorie where idcategorie = %s";
      $query = sprintf($query,$id);
      $result = $this->db->query($query)->row_array();
      $query->freeResult();
      return $result;
    }

    public function getCategorie()
    {
      $query = "select * from categorie";
      $result = $this->db->query($query);
      $i=0;
      $retour = array();
      foreach($result->result_array() as $row)
      {
        $retour[$i]=$row;
        $i++;
      }
      $result->free_Result();
      return $retour;
    }

    // public function getContentByCat($type,$idCat,$pageActuel,$nbPage)
    // {
    //   $limite = 1;
    //   $categorie='%'.$idCat.'%';
    //   if($pageActuel != 1)  $limite = $pageActuel * $nbPage;
    //   $retour = array();
    //   $i = 0;
    //   $query ="select * from %s where categories like %s limit %s,%s";
    //   $query = sprintf($query,$type,$categorie,$limite,$nbPage);
    //   $result = $this->db->query($query);
    //   foreach($result->result_array() as $row)
    //   {
    //     $retour[$i]=$row;
    //     $i++;
    //   }
    //   $query->freeResult();
    //   return $retour;
    // }

    public function getContentByCat($type,$idCat)
    {
      // $limite = 1;
        $categorie="%$idCat%";
      // if($pageActuel != 1)  $limite = $pageActuel * $nbPage;
      $retour = array();
      $i = 0;
      $query ="select idcontenu,titre,categories,substring(texte,1,200) as texte,photo,
      visites,prix from %s where categories like '%s'";
      $query = sprintf($query,$type,$categorie);
      $result = $this->db->query($query);
      foreach($result->result_array() as $row)
      {
        $retour[$i]=$row;
        $i++;
      }
      $result->free_result();
      return $retour;
    }

    public function simpleSearchContent($titre,$type,$pgActuel,$nbPage)
    {
      $limite = 1;
      $title = '%'.$titre.'%';
      if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
      $query = "select * from %s where titre like %s limit %s,%s";
      $query = sprintf($query,$type,$title,$limite,$nbPage);
      $result = $this->db->query($query);
      $i = 0;
      $retour = array();
      foreach($result->result_array() as $row)
      {
        $retour[$i]=$row;
        $i++;
      }
      $result->freeResult();
      return $retour;
    }


      public function getAllContent($pgActuel,$nbPage,$type)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $i = 0;
        $query = "select idcontenu,titre,categories,substring(texte,1,200) as texte,photo,
        visites,prix from %s limit %s,%s";
        $query = sprintf($query,$type,$limite,$nbPage);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        $result->free_result();
        return $retour;
      }

      public function getAllContentFpdf($type)
      {
        $retour = array();
        $i = 0;
        $query = "select * from %s order by categories asc";
        $query = sprintf($query,$type);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        $result->free_Result();
        return $retour;
      }
      public function getVideo()
      {
        $retour = array();
        $i=0;
        $query = "select titre,video from contenu where video != 'null'";
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
            $retour[$i]=$row;
            $i++;
        }
        $result->free_result();
        return $retour;
      }

      public function getVideoByCat($categ)
      {
        $cat = '%'.$categ.'%';
        $retour = array();
        $i=0;
        $query = "select titre,video from contenu where video != 'null' and categories like '%s'";
        $query = sprintf($query,$cat);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
            $retour[$i]=$row;
            $i++;
        }
        $result->free_result();
        return $retour;
      }

      public function getAllContentByCat($cat,$type)
      {
        $categorie='%'.$cat.'%';
        $retour = array();
        $i = 0;
        $query = "select idcontenu,titre,categories,substring(texte,1,200) as texte,photo,
        visites,prix from %s where categories like '%s'";
        $query = sprintf($query,$type,$categorie);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        $result->free_Result();
        return $retour;
      }

      public function getContentCat($pgActuel,$nbPage,$idCat,$type)
      {
        $categorie='%'.$categorie.'%';
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();
        $i = 0;
        $query = "select idcontenu,titre,categories,substring(texte,1,200) as texte,photo,
        visites,prix from %s where categories like %s limit %s,%s";
        $query = sprintf($query,$type,$categorie,$limite,$nbPage);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        $result->freeResult();
        return $retour;
      }

      public function advancedSearchContent($titre,$categorie,$descri,$auteur,$nbdate,$nbPage,$type)
      {
        $limite = 1;
        if($pgActuel != 1)  $limite = $pgActuel * $nbPage;
        $retour = array();

        $req="";
        $query = "select * from ".$type." where idcontenu is not null ".$req." limit ".$limite.",".$nbPage;

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
        $result->freeResult();
        return $retour;
      }

      public function contentOrderByVisite($type)
      {
        $retour = array();
        $i = 0;
        $query = "select idcontenu,titre,categories,substring(texte,1,200) as texte,photo,
        visites,prix from %s order by visites desc limit 3";
        $query=sprintf($query,$type);
        $result = $this->db->query($query);
        foreach($result->result_array() as $row)
        {
          $retour[$i]=$row;
          $i++;
        }
        $result->free_result();
        return $retour;
      }

      public function insertContent($titre,$desc,$auteur,$categories,$type,$photo,$video,$audio,$pdf,$prix,$iduser,$idadmin)
      {
        $etat = "done";
        $visite = 0;
        $query = "insert into contenu values (null,current_date(),%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s,%s)";
        $query = sprintf($query,$titre,$categories,$type,$desc,$photo,$video,$audio,$pdf,$etat,$visite,$prix,$iduser,$idadmin,$auteur);
        $this->db->query($query);
      }

      public function updateContentEtat($id,$type,$etat)
      {
        $query = "update %s set etat = %s where idcontenu = %s";
        $query = sprintf($query,$type,$etat,$id);
        $this->db->query($query);
      }


      public function updateContentText($id,$titre,$text,$photo,$video,$cat)
      {
        $etat = "done";
        if($iduser == null) $iduser = null;
        else if($idadmin == null) $idadmin = null;
        else if($idadmin != null) $etat = "done";
        $query = "update contenu set titre = %s, iduser = %s, idadmin = %s, texte = %s, photo = %s, video = %s, etat = %s, categories = %s";
        $query = sprintf($query,$titre,$text,$photo,$video,$etat,$cat);
        $this->db->query($query);
      }

      public function deleteContentById($id)
      {
        $query = "delete from content where idcontenu = %s";
        $query = sprintf($query,$id);
        $this->db->query($query);
      }

      public function deconnect()
      {
        $this->session->sess_destroy();
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
        $result->free_result();
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
        $result->free_result();
        return "ko";
      }
      public function getMarkers($idarticle){
        $retour = array();
        $query = " select * from geolocalisation where idarticle=%s";
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
          $query = "insert into geolocalisation values(%s,%s,%s)";
          $query = sprintf($query,$this->db->escape($listCoord[$i][0]),$this->db->escape($listCoord[$i][1]));
          $this->db->query($query);
        }
      }

      public function visiteLivreCount($idLivre){
        $query = "update livre set visites = (visites+1) where idlivre=%s";
        $query = sprintf($query,$idLivre);
        $this->db->query($query);
      }

      public function visiteArticleCount($idArticle){
        $query = "update article set visites = (visites+1) where idArticle=%s";
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
