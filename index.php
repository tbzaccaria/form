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
                <form action="" class="form-inline row g-3 needs-validation" novalidate">

                    <!-- <label for="" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name"> -->
                    <label for="validationCustom01" class="form-label">Firstname</label>
                    <input type="text" class="form-control"  id="validationCustom01" name="name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>


                    <label for="validationCustom02" class="form-label">Lastname</label>
                    <input type="text" class="form-control"  id="validationCustom02" name="lastname" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>

                    
                    <label for="validationCustom04" class="form-label">Gender</label>
                    <select class="form-select shadow-none" id="validationCustom04" name="gender" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>
                    

                    <!-- <label for="" class="form-label mt-3">Lastname</label>
                    <input type="text" class="form-control" name="lastname"> -->
                    <!--
                    <label for="" class="form-label mt-3">Gender</label>
                    <input type="text" class="form-control" name="gender">
                    -->
                    
                    <!-- <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="male">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                    </div>
                    <div class="form-check form-check-inline mt-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="female">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                    </div> -->
                    


                    
                    <br>
                    <!-- <label for="" class="form-label mt-3">Email address</label>
                    <input type="email" class="form-control" name="email"> -->
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="name@example.com">
                    
                    
                    <!-- <label for="" class="form-label mt-3">Company</label>
                    <input type="text" class="form-control" name="company"> -->
                    <label for="validationCustom05" class="form-label">Company</label>
                    <input type="text" class="form-control"  id="validationCustom01" name="company" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                 
                    <!-- <label for="" class="form-label mt-3">Subject</label>
                    <input type="text" class="form-control"name="subject">
                     -->

                     <label for="validationCustom06" class="form-label">Subject</label>
                    <select class="form-select shadow-none" id="validationCustom04" name="subject" required>
                    <option selected disabled value="">Choose...</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    </select>
                    <div class="invalid-feedback">

                    Please select a valid state.
                    </div>
                    <label for="" class="form-label mt-3">Message</label>
                    <input type="text" class="form-control" name="message">

                    
                    
                    
                    
                        
                    <input type="submit" class="btn btn-dark mt-3" name="submit" value="Submit">
                </form>
                <?php
                if (isset($_GET['name'])){
                    $name = $_GET['name'];
                    echo ($_GET['name']);

                    if ( strlen ($name) == 0){
                        echo '<br> <p style="color:red;">You forgot to enter your name. </p>';
                    }
                }
                if (isset($_GET['lastname'])){
                    $lastname = $_GET['lastname'];
                    echo $lastname;
    
                    if ( strlen ($lastname) == 0){
                        echo '<p style="color:red;">You forgot to enter your lastname. </p>';
                    }
                    
                }
                if (isset($_GET['flexRadioDefault'])){
                    $gender = ($_GET['flexRadioDefault']);
                    echo ($gender);
                    if ( ($gender != "male")){
                        echo '<br> <p style="color:red;">You forgot to enter your gender. </p>';
                        echo 'hello';
                    }
                    else {
                        echo ($_GET['flexRadioDefault']);
                    }
                }
                if (isset($_GET['email'])){
                    $email = ($_GET['email']);
                    
                        if ( strlen ($email) == 0){
                            echo '<p style="color:red;">You forgot to enter your mail. </p>';
                        }
                }
                if (isset($_GET['company'])){
                    $company = ($_GET['company']);
                        if ( strlen ($company) == 0){
                            echo '<p style="color:red;">You forgot to enter your company. </p>';
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
            <p>Choose your favorites</p>
            <div classe="container">
                <div class="checkbox">
                    <input type="checkbox" name="" id="">
                    <div class="box">
                        <i class="fab fa-instagram"></i>
                        <p data-text="Instagram">Instagram</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>