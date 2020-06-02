 <?php
      
        if(isset($_POST['user_name'])) {
            
            echo 'Hi ' .$_POST['user_name'];
            
            header('Location: HomePage.php') ;
        }
        
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title> Netit-Backend-HR </title>
    </head>
    <body>
       
        
      
        ?>
       
        
        <h1> NETIT-BACKEND-HR <h1/>
            <h2> Get your dream job with us <h2/>
                <h3> Please sign up and login <h3/>
                    
                    <h4> Login for Employs <h4/>
                        
            <form method="POST" />
            
            <input type="hidden" name="welcome" value="1" />
            <input type="text" name="user_name" placeholder="Enter Your Name" />
            <input type="text" name="password" placeholder="Password"/>
            <input type="submit" value="Log in"/> <br>
            <input type="button" value="SignIn" />
            
              </form>
                 
                 
    </body>
</html>
