<?php 

if(isset($_POST['firstName']) && isset($_POST['message']) && isset($_POST['email'])){
    $to = "benyadineemohamed@gmail.com";
    $subject = $_POST['firstName'];
    $message = $_POST['message'];
    $headers = "From: ".$_POST['email']."\r\n";
    $headers .= "Reply-To: ".$_POST['email']."\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if($to && $subject && $message && $headers){
        $b = "Message sent successfully";
    } else {
        $b = null;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet"href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/sharp-light.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/duotone.css"/>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/brands.css"/>
</head>
<style>
    html {
  scroll-behavior: smooth;
}

    body {
    overflow-x: hidden;
    font-family: 'Playfair Display', serif;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a href="#" class="navbar-brand fw-bold fs-3 ms-5">Mohamed ben yadine</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#drop" aria-controls="drop" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="drop">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#About" class="nav-link fw-bold">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#projects" class="nav-link fw-bold">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Contact" class="nav-link fw-bold">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class=" min-vh-60 m-0 d-flex align-items-center">
    <div class="container-fluid row w-100 g-0">
        <div class="col-12 col-md-7 col-lg-7 d-flex flex-column justify-content-center  p-4 ms-4">
            <h6>Full Stack Developer</h6>
            <h1>Hello, my name<br>is Mohamed Ben Yadine</h1>
            <p>Hi! I’m Mohamed Ben Yadine, a Full Stack Developer. I build web projects and bring ideas to life. More about me on the About page.</p>
            <div class="mt-3">
                <a href="#projects" class="btn btn-warning me-2">Projects</a>
                <a href="https://www.linkedin.com/in/mohamed-benyadinee-49587532b/" class="btn btn-outline-dark">LinkedIn</a>
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-center align-items-start p-4">
            <img src="./img/Design sans titre (1).png" width="500px" height="700px" class="img-fluid" alt="Design">
        </div> 
    </div>
</section>
   <section class="py-5" id="projects">
  <div class="container">
    <h1 class="text-center mb-4">Projects</h1>
    <div class="card mb-3 rounded-3">
      <div class="row g-0 align-items-center">
        
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Read </h5>
            <p class="card-text">Site web de bibliothèque en ligne permettant aux utilisateurs de rechercher, trier et parcourir des livres avec pagination, lire ou télécharger via des liens externes, et gérer un compte utilisateur. Interface responsive et sécurisée. Technologies : HTML, CSS, JavaScript, PHP, MySQL, REST API (Gutendex). Améliorations prévues : bibliothèque personnelle, lecteur PDF interne, système de notation et commentaires, hébergement en ligne et optimisation SEO.</p>
            <a href="https://www.linkedin.com/feed/update/urn:li:activity:7369081273127952386/" class="btn btn-outline-dark">Previw</a>
          </div>
        </div>
        <div class="col-md-6">
          <img src="./img/Capture d’écran 2025-09-12 163016.png" class="img-fluid rounded-3" alt="Image">
        </div>
      </div>
    </div>
    <div class="card mb-3 rounded-3">
      <div class="row g-0 align-items-center">
        <div class="col-md-6">
          <img src="./img/Capture d’écran 2025-09-12 164102.png" class="img-fluid rounded-3" alt="Image">
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <h5 class="card-title">Movie List </h5>
            <p class="card-text">Je suis ravi de partager mon premier projet web complet de A à Z !
Technologies : 🔸 HTML, CSS, JavaScript 🔸 PHP & SQL 🔸 REST API pour l’intégration de données externes.

Ce projet m’a permis de mettre en pratique mes compétences, relever des défis techniques et comprendre comment les différentes couches d’un site web interagissent.</p>
            <a href="https://www.linkedin.com/feed/update/urn:li:activity:7352325097757503491/" class="btn btn-outline-dark">Previw</a>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</section>
    <section class=" min-vh-60 m-0 d-flex align-items-center" id="About">
    <div class="container-fluid row w-100 g-0">
        <div class="col-12 col-md-8 col-lg-8 d-flex flex-column justify-content-center  p-4">
            
            <h1>About me</h1>
            <p>Hi! I'm Mohamed Ben Yadine, a passionate Full Stack Developer. I specialize in building responsive and dynamic web applications using HTML, CSS, JavaScript, PHP, and MySQL. I enjoy solving complex .problems, learning new technologies, and turning ideas into real projects
Over the years, I've developed projects that combine functionality, design, and user experience. I'm always .seeking challenges that push me to grow professionally and creatively
Curious to know more about my journey and skills? Check out the About page for detailed insights</p>
            <div class="mt-3">
                <a href="./pdf/Blue and Gray Simple Professional CV Resume (3).pdf" download  class="btn btn-warning me-2">resumer</a>
                
            </div>
        </div>
        <div class="col-12 col-md-4 col-lg-4 d-flex justify-content-center align-items-start p-4">
            <img src="./img/me2.png" width="500px" height="700px" class="img-fluid" alt="Design">
        </div> 
    </div>
</section>
<section class=" min-vh-60 m-0 d-flex justify-content-center align-items-center" id="Contact">
    <div class="container d-flex flex-column justify-content-center row w-25 g-0">
        <form method="POST">
      <div class="row mb-3">
        <div class="col-md-12">
          <label for="firstName" class="form-label">First Name</label>
          <input type="text" class="form-control" name="firstName" placeholder="Enter your first name">
        </div>
        

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email">
      </div>

      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="5" placeholder="Write your message"></textarea>
      </div>
<?php 
if(!empty($b)){
    echo '<button type="submit" class="btn btn-success">Sent</button>';
} else {
    echo '<button type="submit" class="btn btn-warning">Send Message</button>';
}
?>
     
    </form>
            <p></p>
    </div>
</section>
<footer class="mt-5">
                <div class="container">
                  <div class="text-center mb-4">
                    <a href="https://www.instagram.com/benyadinee/?hl=ar" ><i class="fa-brands fa-square-instagram text-dark fs-4"></i></a> 
                    <a href="https://www.linkedin.com/in/mohamed-benyadinee-49587532b/" ><i class="fa-brands fa-linkedin text-dark fs-4"></i></a> 
                    <a href="https://benyadineemohamed@gmail.com" ><i class="fa-solid fa-envelope text-dark fs-4"></i></a> 
                  </div>
                   <div class="text-center">
                   <h2>mohamed ben yadine 2025</h2>
                  </div>
                </div>
                <img class="z-1" src="./img/Vector.png" alt="">
              </footer> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
