<?php

// abstract  protected function logion ($username, $password);

   abstract class Main_Server{
          

       abstract function login ($user, $pass) ;
       abstract function error () ;
       abstract function mensaje ();
       
   }
   ?>