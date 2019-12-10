<?php 

   function getconnexion()
  {

  	 $servername = "localhost";
	 $username = "root";
	 $password = "";
	 $data = "mabase";
   
     $conn = mysqli_connect($servername,$username,$password,$data);
      return $conn;
  }

  function executesql($sql)
  {
  	$connectdata = getconnexion();
  	$exe  = mysqli_query($connectdata, $sql);
  	 return $exe; 
  }

/*
  $req = "select * from utilisateur";
  $ex = executesql($req);

   foreach ($ex as $ligne) {
   	  echo $ligne['id'];
   	  echo $ligne['email'];
   }*/

 ?>
