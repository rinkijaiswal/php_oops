<?php
 class User{
     public $name,$email;

     public function set_name($name){
         $this->name =$name;
     }
     public function get_name(){
         return $this->name;
     }
     public function set_email($email){
         $this->email =$email;

     }
     public function get_email(){
         return $this->email;
     }
 } 
 $Rinki = new User();

 $Rinki->set_name('Rinki');
 $Rinki ->set_email('rinkijais11@gmail.com');
 echo $Rinki->get_name();
 echo $Rinki->get_email();




 ?>
 <?php
  class Students {

      public $name,$rollno;

      function __construct($name,$rollno){
        $this->name = $name;
        $this->rollno = $rollno;

      }
       function get (){
           return ['name'=>$this->name ,'rollno'=>$this->rollno];
       }
      
          
}
$Shivam = new Students("Shivam","190059010006");
print_r($Shivam->get());



    












?>