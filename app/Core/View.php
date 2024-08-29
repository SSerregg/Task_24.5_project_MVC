<?php

namespace app\core;

class View{
    public function render($content_view, $template_view=null){
        if($template_view){
            include_once VIEW.$template_view;
        }
    }
}

?>