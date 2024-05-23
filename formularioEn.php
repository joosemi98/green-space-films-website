<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Space Films</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .contenidoBanner img {
            max-width: 100%;
            height: auto;
        }

        .contenidoBody {
            padding: 40px 0;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #0a560c;
            border: none;
        }

        .btn-primary:hover {
            background-color: #052f07;
        }
    </style>
</head>
<body>
    <header>
    </header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="imagenes/logo.PNG" alt="Logo" width="30" height="30" class="mr-2">
                Green Space Films
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienesSomosEn.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formulario.html">Contact</a>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Language
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languageDropdown">
                            <a class="dropdown-item" href="index.html"><img src="espana.png" alt="Spanish" height="20" width="20"> Spanish</a>
                            <a class="dropdown-item" href="indexEn.html"><img src="imagenes/reino-unido.png" alt="English" height="20" width="20"> English</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="contenidoBody">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="tituloBody">
                        <h2 class="text-center mb-4">Contact Form</h2>
                    </div>
                    <form id="contactForm" action="send_email.php" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address:</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="message">Leave us a message:</label>
                            <textarea id="message" name="message" class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="agree" name="agree">
                            <label class="form-check-label" for="agree">I agree to the terms and conditions</label>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="contenidoFooter">
        <a href="mailto:greenspacefilm@proton.me">greenspacefilm@proton.me</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
