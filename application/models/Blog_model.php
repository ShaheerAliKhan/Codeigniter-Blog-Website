<?php

    class Blog_model extends CI_Model {
        
        function adminLogin($formArray) {
            $this->db->select('username,password');
            $this->db->from('admin');
            $where = array(
                'username'=>$formArray['username'],
                'password'=>$formArray['password']
            );
            $this->db->where($where);
            $query = $this->db->get();
            if($query->num_rows()>0) {
                return true;
            }   
        }
        function getHomeHeading() {
            $this->db->select('home_heading');
            $this->db->from('home_page');
            $query = $this->db->get(); 
            if($query) {
                $homePageHeading = array();
                return $homePageHeading = $query->row();
            }  
        }
        function setHomeHeading($homeHeadingParam){ 
            $query = $this->db->update('home_page',$homeHeadingParam);
            if($query) {
                return true;
            }
        }
        function getHomeDescription(){
            $this->db->select('home_description');
            $this->db->from('home_page');
            $query = $this->db->get(); 
            if($query) {
                $homePageDescription = array();
                return $homePageDescription = $query->row();
            }  
        }
        function setHomeDescription($homeDescriptionParam){ 
            $query = $this->db->update('home_page',$homeDescriptionParam);
            if($query) {
                return true;
            }
        }
        function getHomeImages(){
            $this->db->select('id,url');
            $this->db->from('home_images');
            $query = $this->db->get(); 
            if($query) {
                $homeImages = array();
                return $homeImages = $query->result();
            }  
        }
        function insertImages($imageURL){
            $query = $this->db->insert('home_images',$imageURL);
            if ($query) {
                return true;
            }
        }
        function deleteImage($imageId){
            $where = "id=".$imageId;
            $query = $this->db->delete('home_images',$where);
            if($query){
                return true;
            }
        }
        function about_heading($about_heading) {
            $query = $this->db->update('about_page',$about_heading);
            if($query) {
                return true;
            }
        }
        function getAboutHeading() {
            $this->db->select('about_heading');
            $this->db->from('about_page');
            $query = $this->db->get(); 
            if($query) {
                $aboutPageHeading = array();
                return $aboutPageHeading = $query->row();
            }  
        }
        function getAboutCardData() {
            $this->db->select('*');
            $this->db->from('about_cards');
            $query = $this->db->get(); 
            if($query) {
                $aboutPageHeading = array();
                return $aboutPageHeading = $query->result();
            }  
        }
        function aboutCardInsert($formArray){
            $query = $this->db->insert('about_cards', $formArray);
            if($query){
                return true;
            }
        }
        function portfolioCardInsert($formArray){
            $query = $this->db->insert('portfolio_cards', $formArray);
            if($query){
                return true;
            }
        }
        function getPortfolioCards() {
            $this->db->select('*');
            $this->db->from('portfolio_cards');
            $query = $this->db->get(); 
            if($query) {
                $aboutPageHeading = array();
                return $aboutPageHeading = $query->result();
            }  
        }
        function portfolio_heading($portfolio_heading){ 
            $query = $this->db->update('portfolio',$portfolio_heading);
            if($query) {
                return true;
            }
        }
        function getPortfolioHeading() {
            $this->db->select('heading');
            $this->db->from('portfolio');
            $query = $this->db->get(); 
            if($query) {
                $portfolioPageHeading = array();
                return $portfolioPageHeading = $query->row();
            }  
        }
        function deletePortfolioImage($imageId){
            $where = "id=".$imageId;
            $query = $this->db->delete('portfolio_cards',$where);
            if($query){
                return true;
            }
        }
        function getAboutCards(){
            $this->db->select('*');
            $this->db->from('about_cards');
            $query = $this->db->get(); 
            if($query) {
                $aboutPageHeading = array();
                return $aboutPageHeading = $query->result();
            }  
        }
        function deleteAboutCard($imageId){
            $where = "id=".$imageId;
            $query = $this->db->delete('about_cards',$where);
            if($query){
                return true;
            }
        }
    }

?>
