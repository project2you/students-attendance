<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authen {

     function check_login($id) {
		if (  $id == null ){ 
			//header('Location: /student');
			//exit(0);
			 header( "refresh: 1; url=".base_url());
			 exit(0);
		}
    }


     function check_student_login($id) {
		if (  $id == null ){ 
			//header('Location: /student');
			//exit(0);
			 header( "Location: ".base_url()."front_login/" );
			 exit(0);
		}
    }

}


