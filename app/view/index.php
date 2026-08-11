<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/assets/style/input.css">
    <link rel="stylesheet" href="../public/assets/style/header/navigation.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js">
    <title>De Jesus Portfolio</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        .visit {
            color: black;
            border: 1px solid black;
            padding: 0.4em;
            transition: .2s ease;
        }

        .visit:hover {
            color: whitesmoke;
            background-color: black;
        }

        .my_image {
            scale: 1;
            transition: .2s ease;
        }

        .my_image:hover {
            scale: 1.1;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg p-0 ms-5 me-5">
            <div class="container-fluid p-3">
                <h1 class="navbar-brand fw-medium fs-6 border rounded-5" style="padding: 0.4em; box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
                    <b class="text-success me-1">●</b>Available For a New Project
                </h1>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
                    <li class="nav-item">
                        <a href="#" class="nav-link navigation fw-medium me-5">Education</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link navigation fw-medium me-5">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link navigation fw-medium me-5">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link navigation fw-medium me-5">Contact</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-dark text-light fw-medium">Hire Me<i class="bi bi-arrow-return-left ms-2"></i></button>
            </div>
        </nav>
    </header>

    <main style="min-height: 85vh;" id="AboutMe">

        <div class="container-fluid m-0 p-0 d-flex justify-content-center position-relative" style="top: 100px;">
            <div class="container p-5 d-flex flex-column">
                <div class="container p-0 mb-3" style="font-family:Arial, Helvetica, sans-serif">
                    <h5 class="text-secondary fw-light mb-3">Hi There...</h5>
                    <h1 class="text-dark fw-bold" style="font-size: 3em;">I am De Jesus Edgar a Independent Website Developer & Currently 3RD Year College Major in BSIT</h1>
                </div>
                <div class="container p-0 mb-5 d-flex align-content-center">
                    <a href="https://web.facebook.com/edgar.dejesus.1420" class="nav-link visit w-auto fw-medium rounded-5" target="_blank"><i class="bi bi-facebook me-2"></i>Facebook</a>
                    <a href="https://www.instagram.com/edgardj002/" class="nav-link visit ms-3 w-auto fw-medium rounded-5" target="_blank"><i class="bi bi-instagram me-2"></i>Instagram</a>
                    <a href="https://github.com/Edgar-De-Jesus-06" class="nav-link visit ms-3 w-auto fw-medium rounded-5" target="_blank"><i class="bi bi-github me-2"></i>GitHub</a>
                </div>
                <div class="container p-0">
                    <button type="button" class="btn btn-dark fw-medium rounded-5" style="width: 15%;">Hire Me</button>
                    <button type="button" class="btn btn-light ms-2 fw-medium rounded-5" style="width: 15%;">My Project</button>
                </div>
            </div>
            <div class="container d-flex align-content-center justify-content-center">
                <img src="/app/public/assets/images/profile2.jpg" alt="Profile" class="my_image rounded-5" height="550px" width="550px">
            </div>
        </div>

    </main>

    <section style="min-height: 70vh;" id="services" class="bg-dark">
        <?php include __DIR__ . "/services.php" ?>
    </section>

    <section style="min-height: 70vh;" id="contact">
        <?php include __DIR__ . "/contact.php" ?>
    </section>
</body>

</html>