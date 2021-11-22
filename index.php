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
    <!-- Navbar -->
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
        <!-- BODY -->
        <h1 class="text-center">Contact us</h1>
        
            <div class="col-sm-4 offset-sm-4">
                <!-- FORM -->
                <form action="" class="form-inline row g-3 needs-validation" novalidate>
                    <!-- Firstname -->
                    <label for="validationCustom01" class="form-label">Firstname</label>
                    <input type="text" class="form-control"  id="validationCustom01" name="name" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>

                    <!-- Lastname -->
                    <label for="validationCustom02" class="form-label">Lastname</label>
                    <input type="text" class="form-control"  id="validationCustom02" name="lastname" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>

                    <!-- Gender -->
                    <label for="validationCustom04" class="form-label">Gender</label>
                    <select class="form-select shadow-none" id="validationCustom04" name="gender" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                    </select>
                    <div class="invalid-feedback">
                    Please select a valid state.
                    </div>

                    <br>
                    <!-- Email Address -->
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="name@example.com">
                    
                    
                    <!-- Company -->
                    <label for="validationCustom05" class="form-label">Company</label>
                    <input type="text" class="form-control"  id="validationCustom05" name="company" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                 
                    <!-- Subject -->
                    <label for="validationCustom06" class="form-label">Subject</label>
                    <select class="form-select shadow-none" id="validationCustom06" name="subject" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    </select>
                    <div class="invalid-feedback">

                    Please select a valid state.
                    </div>

                    <!-- Message -->
                    <label for="" class="form-label mt-3">Message</label>
                    <input type="text" class="form-control" name="message">

                    <!-- Submit -->
                    <input type="submit" class="btn btn-dark mt-3" name="submit" value="Submit">
                </form>
                <?php
                
                
                // Counter
                $number=0;

                // -- RegEX CONDITION: --

                // Firstname condition
                if (isset($_GET['name'])){
                    $name = $_GET['name'];
                    echo ($_GET['name']);

                    if ( strlen ($name) == 0){
                        echo '<br> <p style="color:red;">You forgot to enter your name. </p>';
                    }
                    elseif((preg_match("/[^a-zA-Z]/i", $_GET['name'])) == 1){
                        echo '<p style="color:red;">Please do not enter special character in the firstname section</p>';
                    }
                    else{
                        $number = $number + 1;
                    }
                }
                // Lastname condition
                if (isset($_GET['lastname'])){
                    $lastname = $_GET['lastname'];
                    echo $lastname;
    
                    if ( strlen ($lastname) == 0){
                        echo '<p style="color:red;">You forgot to enter your lastname. </p>';
                    }
                    elseif((preg_match("/[^a-zA-Z]/i", $_GET['lastname'])) == 1){
                        echo '<p style="color:red;">Please do not enter special character in the lastname section</p>';
                    }
                    else{
                        $number = $number + 1;
                    }
                }

                // Gender condition
                if (isset($_GET['gender'])){
                    $gender = ($_GET['gender']);
                    echo ($gender);
                    if (preg_match("/male|female|other/i", $_GET['gender']) == 1){
                        $number = $number + 1;
                    }
                    else{
                        echo '<p style="color:red;">You forgot to enter your gender. </p>';
                        $number = 0;
                    }
                    
                }

                // Email Address condition
                if (isset($_GET['email'])){
                    $email = ($_GET['email']);
                    
                        if ( strlen ($email) == 0){
                            echo '<p style="color:red;">You forgot to enter your mail. </p>';
                            $number = 0;
                        }
                        elseif((preg_match("/@/i", $_GET['email']) == 0)){
                            echo '<p style="color:red;">Please enter correct email section</p>';
                            $number = 0;
                        }
                        elseif((preg_match("/./i", $_GET['email']) == 0)){
                            echo '<p style="color:red;">Please enter correct email section</p>';
                            $number = 0;
                        }
                        else{
                            $number = $number + 1;
                        }
                }

                // Company condition
                if (isset($_GET['company'])){
                    $company = ($_GET['company']);
                        if ( strlen ($company) == 0){
                            echo '<p style="color:red;">You forgot to enter your company. </p>';
                            
                            $number = 0;
                        }
                        else{
                            $number = $number + 1;
                        }
                }

                // Subject condition
                if (isset($_GET['subject'])){
                    $subject = ($_GET['subject']);
                    if (strlen ($subject) == 0){
                        echo '<p style="color:red;">You forgot to enter your subject. </p>';
                        $number = 0;
                    }
                    else{
                        $number = $number + 1;
                    }
                }

                // Message condition
                if (isset($_GET['message'])){
                    $message = ($_GET['message']);
                    if ( strlen ($message) == 0){
                        echo '<p style="color:red;">You forgot to enter your message. </p>';
                        $number = 0;
                    }
                    else{
                        $number = $number + 1;
                    }
                }
                
                // Verify if the mail can be send
                if ($number==7){
                    echo 'A mail can be send';
                }
                else{
                    echo 'You missed at least an information';
                }
                
                ?>
                

                
                
                
            </div>
        
    </main>
    <!-- Footer -->
    <footer>
        <h2>More about us</h2>
        <!-- Check Box -->
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