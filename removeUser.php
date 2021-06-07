
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
        color: black;
        padding: 10px;


          
       
      }
  		

      

      
     
  	</style>



  </head>
  <body>

<!-- ======================== Start include side bar====================== -->
  <div align="left" class="sidebar">
  	<?php 
        include('include/sidebar.php');
     ?>
  </div>
 <!-- ========================End include side bar====================== -->

 <!-- ========================Start Dashbord main body====================== -->
<div align="center" class="mainbody">

  <!DOCTYPE html>  
 <html>  
      <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 

           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

           <link rel="stylesheet" type="text/css" href="../css/Style.css">
      </head>  
      <body>  

        <br>

        <h1>Remove User's</h1>
        <br>
        <br>
        <div class="container" style="width:500px;">              
                <div class="table-responsive"> 
                     <table  border="1" class="table table-bordered">  
                          <tr>  
                               <th>Name</th> 
                               <th>EMAIL</th>  
                              
                               <th>address</th>   
                               <th>action</th>   
                          </tr>  
                               
                            <?php 
                              include('Controller/view.php');
                           ?>  

                          <td></td>
                          <td></td>
                          <td></td>
                          <td>Remove</td>
                     </table>  
                   </div>
                 </div>
               
      </body>  
 </html> 
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

 <!-- ========================End Dashbord main body====================== -->

  	
  </body>
  </html>


 <?php  
   include('include/footer.php');
?>

