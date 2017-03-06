<?php 

if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Test_Controller extends FT_Controller {
    public function indexAction() {
        echo '<pre>';
        print_r($this);
        echo '<h1>Index Action</h1>';
    }
}