<?php

$crud_users = App\crud_users::where('id','1');

 foreach($crud_users as $user){
 echo $user->name;
 }
 
