<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This a form to contact us"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    
    <title>Form</title>
    
</head>
<body class="h-100 w-100">
    <header class="h-10"> 
        <nav class="navbar navbar-expend-lg navbar-light bg-light">
        <section>
            <ul>
                <li class="btn">Home</li>
                <li class="btn">Learn</li>
                <li class="btn">Contact</li>
                <li class="btn">About us</li>
            </ul>
        </section>
        </nav>
        
        
    </header>
    <main class="container h-80 w-80">
        <h1 class="text-center">Contact us</h1>
        
            <div class="col-sm-4 offset-sm-4">
                <form action="" class="form-inline">

                    <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">


                    
                    <label for="" class="form-label mt-3">Lastname</label>
                    <input type="text" class="form-control" name="lastname">
                   
                    <label for="" class="form-label mt-3">Gender</label>
                    <input type="text" class="form-control" name="gender">
                  
                    <label for="" class="form-label mt-3">Email address</label>
                    <input type="email" class="form-control" name="emailaddress">
                    
                    <label for="" class="form-label mt-3">Company</label>
                    <input type="text" class="form-control" name="company">
                 
                    <label for="" class="form-label mt-3">Subject</label>
                    <input type="text" class="form-control"name="subject">
                    
                    <label for="" class="form-label mt-3">Message</label>
                    <input type="text" class="form-control" name="message">
                 
                    <input type="submit" class="btn btn-dark mt-3" name="submit" value="Submit">
                </form>
                <?php
                    if (isset($_GET['name'])){
                        $name = $_GET['name'];

                        if ( strlen ($name) == 0){
                            echo '<br> <p style="color:red;">Ahem. You forgot to enter your name. </p> <br>';
                            exit;
                        }
                        else{
                            echo "<br>Hello " . $name. "<br>";
                        }
                    }
                ?>
            </div>
        
    </main>
    <footer>
        <h2>More about us</h2>
        <section>
            <ul class=col>
                <li class="btn">Email Adress</li>
                <li class="btn">Github</li>
                <li class="btn">Linkedin</li>
            </ul>
        </section>
        <section>
            <h2>Map</h2>
        </section>
    </footer>
</body>
</html>