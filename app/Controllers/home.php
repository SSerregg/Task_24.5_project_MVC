<?php
namespace app;


class home extends core\Controller{

    public function index(){
        
        $this->view->render('page1.php', 'template_view.php');
    }
    public function contacts(){
        
        $this->view->render('page2.php', 'template_view.php');
    }
    public function about(){
        
        $this->view->render('page3.php', 'template_view.php');
    }
}


      

?>