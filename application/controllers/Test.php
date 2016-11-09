<?php
/**
 * Created by PhpStorm.
 * User: dzmitry.ananchuk
 * Date: 09.11.2016
 * Time: 11:04
 */
    class Test extends CI_Controller {

        public function index(){
            $this->load->view('test');
        }

        public function hello(){
            echo "Hui sosi, hellо, блять ему подавай.";
        }
    }
?>