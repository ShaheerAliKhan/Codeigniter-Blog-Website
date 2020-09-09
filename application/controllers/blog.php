<?php

    class Blog extends CI_Controller {

        function admin() {
            $this->load->view('admin');
            if($this->input->post()){
                $this->load->model('Blog_model');
                $formArray = array(
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password')
                );
                $login = $this->Blog_model->adminLogin($formArray);
                if($login){
                    redirect(base_url('index.php/blog/admin_dashboard'));
                } else {
                    redirect(base_url('index.php/blog/admin'));
                }
            }
        }
        function admin_dashboard(){
            $this->load->model('Blog_model');
            $data['imgs'] = $this->Blog_model->getHomeImages();
            $data['portfolio_cards'] = $this->Blog_model->getPortfolioCards(); 
            $data['about_cards'] = $this->Blog_model->getAboutCards(); 
            $this->load->view('admin_dashboard',$data);
        }
        function home() {
            $this->load->model('Blog_model');
            $data['homePageHeading'] = $this->Blog_model->getHomeHeading(); 
            $data['homePageDescription'] = $this->Blog_model->getHomeDescription(); 
            $data['homeImages'] = $this->Blog_model->getHomeImages(); 
            $this->load->view('home',$data);
        }
        function about() {
            $this->load->model('Blog_model');
            $data['about_heading'] = $this->Blog_model->getAboutHeading();
            $data['about_card_data'] = $this->Blog_model->getAboutCardData();
            $this->load->view('about',$data);

        }
        function portfolio() {
            $this->load->model('Blog_model');
            $data['cards'] = $this->Blog_model->getPortfolioCards();
            $data['heading'] = $this->Blog_model->getPortfolioHeading();
            $this->load->view('portfolio',$data);
        }
        function contact() {
            $this->load->view('contact');
        }
        function setHomeHeading() {
            if($this->input->post()){
                $homeHeadingParam = array(
                    'home_heading'=>$this->input->post('home_heading')
                );
                $this->load->model('Blog_model');
                $query = $this->Blog_model->setHomeHeading($homeHeadingParam);
                if($query) {
                    redirect(base_url('index.php/blog/admin_dashboard'));
                }
            }
        }
        function setHomeDescription() {
            if($this->input->post()){
                $homeDescriptionParam = array(
                    'home_description'=>$this->input->post('home_description')
                );
                $this->load->model('Blog_model');
                $query = $this->Blog_model->setHomeDescription($homeDescriptionParam);
                if($query) {
                    redirect(base_url('index.php/blog/admin_dashboard'));
                }
            }
        }
        function insertImages(){
            if($this->input->post()){
                $this->load->model('Blog_model');
                $imageURL = array(
                    'url'=> $this->input->post('image_url')
                );
                $query = $this->Blog_model->insertImages($imageURL);
                if ($query){
                    redirect(base_url('index.php/blog/admin_dashboard'));
                }
            }
        }
        function deleteImage(){
            $imageId = $this->input->get('image_id');
            $this->load->model('Blog_model');
            $query = $this->Blog_model->deleteImage($imageId);
            if($query){
                redirect(base_url('index.php/blog/admin_dashboard'));
            }
        }
        function aboutHeading(){
            if($this->input->post('about_heading')){
                $about_heading = array(
                    'about_heading' => $this->input->post('about_heading')
                );
                $this->load->model('Blog_model');
                $query = $this->Blog_model->about_heading($about_heading);
                if($query) {
                    redirect(base_url('index.php/blog/admin_dashboard'));
                }
            }
        }
        function aboutCardInsert(){
            if($this->input->post()){
                $formArray = array(
                    'card_heading' => $this->input->post('about_card_heading'),
                    'card_matter' => $this->input->post('about_card_matter'),
                    'card_img' => $this->input->post('about_card_img')
                );
                $this->load->model('Blog_model');
                $query = $this->Blog_model->aboutCardInsert($formArray);
                if($query){
                    redirect(base_url('index.php/blog/admin_dashboard')); 
                }
            }
        }
        function portfolioCardInsert(){
            $formArray = array(
                'card_name'=> $this->input->post('portfolio_card_name'),
                'card_img'=> $this->input->post('portfolio_card_img'),
            );
            $this->load->model('Blog_model');
            $query = $this->Blog_model->portfolioCardInsert($formArray);
            if($query) {
                redirect(base_url('index.php/blog/admin_dashboard'));
            }
        }
        function portfolioHeading(){
            if($this->input->post('portfolio_heading')){
                $portfolio_heading = array(
                    'heading' => $this->input->post('portfolio_heading')
                );
                $this->load->model('Blog_model');
                $query = $this->Blog_model->portfolio_heading($portfolio_heading);
                if($query) {
                    redirect(base_url('index.php/blog/admin_dashboard'));
                }
            }
        }
        function deletePortfolioImage(){
            $imageId = $this->input->get('image_id');
            $this->load->model('Blog_model');
            $query = $this->Blog_model->deletePortfolioImage($imageId);
            if($query){
                redirect(base_url('index.php/blog/admin_dashboard'));
            }
        }
        function deleteAboutCard(){
            $imageId = $this->input->get('image_id');
            $this->load->model('Blog_model');
            $query = $this->Blog_model->deleteAboutCard($imageId);
            if($query){
                redirect(base_url('index.php/blog/admin_dashboard'));
            }
        }
    }
?>