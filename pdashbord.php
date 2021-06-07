
<?php
   include('include/dnav.php');
  
?>





  <!DOCTYPE html>
  <html>
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Dashbord</title>
  	
  	<style type="text/css" media="screen">
  		.*{
  			padding: 0px;
  			margin: 0px;
  		}
  		.text{
  			font-family: "Montserrat",sans-serif; 
  			padding-left: 40px;
  		}

      .mainbody{
       
        margin-left: 200px;
          background-image:url('');
           background-size: 100% 100% ;
           background-repeat: no-repeat;

         
       
      }
  		

      .button{
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        margin-left: 70px;
        border: 3px solid black; 

        
      }
      .button1 {
        background-color: #e72828;
        font-family: "Montserrat",sans-serif;
 
      }

      
     
  	</style>



  </head>
  <body>

<!-- ======================== Start include side bar====================== -->
  <div align="left" class="sidebar">
  	<?php 
        include('include/psidebar.php');
     ?>
  </div>
 <!-- ========================End include side bar====================== -->

 <!-- ========================Start Dashbord main body====================== -->
<div  class="mainbody">

     
     
      <br>
      <br>
      <br>

    


      <div align=center>
       
      <h1>  Patient Dashboard</h1>
      <br>
      <br>

      <a href="#"><button class="button button1" > Search Doctor </button></a> 
      <a href="#"><button class="button button1" >  My Apointment </button></a> 
      <a href="#"><button class="button button1" >  Prescription </button></a> 
    


    
      </div>

  
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
    
   
</div>
 <!-- ========================End Dashbord main body====================== -->

  	
  </body>
  </html>


 <?php  
   include('include/footer.php');
?>

