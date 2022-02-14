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
    <header> 
        <nav class="navbar navbar-expend-lg navbar-white bg-primary mb-5">
        <section>
            <ul>
                <li class="btn text-white">Home</li>
                <li class="btn text-white">Learn</li>
                <li class="btn text-white">Contact</li>
                <li class="btn text-white">About us</li>
            </ul>
        </section>
        </nav>
        
        
    </header>
    <main class="container h-80 w-80">
        <?php
        $msg = "";
        $msgClass = "";

        if (filter_has_var(INPUT_POST, "submit")){

            

            // Get form data
            $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
            $lastname = htmlspecialchars($_POST['lastname']);
            $email = htmlspecialchars($_POST['email']);
            if (filter_has_var(INPUT_POST, "gender")){
                $gender = htmlspecialchars($_POST['gender']);
            } else {
                $gender = "";
            }
            if (filter_has_var(INPUT_POST, "subject")){
                $subject = htmlspecialchars($_POST['subject']);
            } else {
                $subject = "";
            }
            $company = htmlspecialchars($_POST['company']);
            
            $message = htmlspecialchars($_POST['message']);
            
            
            $valid = true;

            // Check if input empty
            if (!empty($firstname) && !empty($lastname) && !empty($email) && !empty($gender) && !empty($subject) && !empty($company)){
                
                
                // VALIDATION - ERROR
                if ((preg_match("/[^a-zA-Z]/i", $firstname)) === 1 || strlen($firstname) === 0 || strlen($firstname) > 32){
                    
                    $msg = $msg . 'Please do not enter special char in the firstname section <br>';
                    $msgClass = 'alert-danger';
                    $valid = false;
                }

                if (((preg_match("/[^a-zA-Z]/i", $lastname)) === 1) || strlen($lastname === 0) || strlen($lastname) > 32){
                    $msg = $msg . 'Please do not enter special char in the lastname section <br>';
                    $msgClass = 'alert-danger';
                    $valid = false;
                }

                if (preg_match("/male|female|other/i", $gender) === 0){
                    $msg = $msg . 'Please choose one of the selection in the gender section <br>';
                    $msgClass = 'alert-danger';
                    $valid = false;

                }

                if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                    $msg = $msg . 'Please use a valid email <br>';
                    $msgClass = 'alert-danger';
                    $valid = false;
                }

                if ((preg_match("/[^a-zA-Z]/i", $company)) === 1 || strlen($company) === 0 || strlen($company) > 32){
                    $msg = $msg . 'Please do not enter special char in the company section <br>';
                    $msgClass = 'alert-danger';
                    $valid = false;
                }

                if (preg_match("/A|B|C/i", $subject) === 0){
                    $msg = $msg . 'Please choose one of the selection in the subject section <br>';
                    $msgClass = 'alert-danger';
                    $valid = false;
                }

                if ($valid === true){
                    $msg = "Success you completed the form";
                    $msgClass = 'alert-success';
                }

                
                
            } else{
                // fail
                $msg = 'Please fill in all fields';
                $msgClass = 'alert-danger';
            }
        }


        ?>
        <!-- BODY -->
        <?php if($msg != ""): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif; ?>
        <h1 class="text-center">Contact us</h1>
        
            <div class="col-sm-4 offset-sm-4">
                <!-- FORM -->
                <form action="" method="post" class="form-inline row g-3 needs-validation" novalidate>
                    <!-- Firstname -->
                    <label for="validationCustom01" class="form-label">Firstname</label>
                    <input type="text" class="form-control"  id="validationCustom01" name="firstname" required>
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
                    <label for="" class="form-label">Message</label>
                    <textarea type="text" class="form-control mb-3" name="message" row="3"></textarea>

                    <!-- Submit -->
                    <input type="submit" class="btn btn-primary mb-5" name="submit" value="Submit">
                </form>
                
            </div>
        
    </main>
    
</body>
</html>