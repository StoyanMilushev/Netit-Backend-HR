 <?php 
//      var_dump($_GET);
session_start();

      if(isset($_GET['employ_or_employer']) && $_GET['employ_or_employer'] == 1){
      
          if($_GET['info'] == 'employ-info') {
              header('Location: info/employ-info.php');
              
          }
          if($_GET['info'] == 'employer-info') {
              header('Location: info/employer-info.php');
          }
      }
     
      ?>