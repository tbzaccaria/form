<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This a form to contact us"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <title>Form</title>
    
</head>
<body class="h-100 w-100">
    <header class="h-10"> 
        <nav class="navbar navbar-expend-lg navbar-light bg-light">
            <ul>
                <li class="btn">Home</li>
                <li class="btn">Learn</li>
                <li class="btn">Contact</li>
                <li class="btn">About us</li>
            </ul>
        </nav>
        
    </header>
    <main class="container h-80 w-80">
        <h1>Contact us</h1>
        
            <div class="col-sm-4 offset-sm-4">
                <form action="">
                    <label for="">Name</label>
                    <input type="text" name="name">
                    <br>
                    <label for="">Lastname</label>
                    <input type="text" name="lastname">
                    <br>
                    <label for="">Gender</label>
                    <input type="text" name="gender">
                    <br>
                    <label for="">Email address</label>
                    <input type="text" name="emailaddress">
                    <br>
                    <label for="">Company</label>
                    <input type="text" name="company">
                    <br>
                    <label for="">Subject</label>
                    <input type="text" name="subject">
                    <br>
                    <label for="">Message</label>
                    <input type="text" name="message">
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Submit">
                </form>
            </div>
        
    </main>
    <footer>
        <h2>More about us</h2>
        <section>
            <ul>
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