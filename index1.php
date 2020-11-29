<?php 
require_once(__DIR__ .'/PHPMailer/PHPMailer.php');
require_once(__DIR__ .'/PHPMailer/SMTP.php');
require_once(__DIR__ .'/PHPMailer/Exception.php');

 // Mot de passe Gmail
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/Styles1.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap css file  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>PortFolio_NisrineBennor</title>
</head>

<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="#" class="nav__logo">Nisrine Bennor</a>
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                    <li class="nav__item"><a href="#portfolio" class="nav__link">Portfolio</a></li>
                    <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

    <main class="l-main">
        <!--===== HOME =====-->
        <section class="home" id="home">
            <div class="home__container bd-grid">
                <h1 class="home__title"><span>HE</span><br>LLO.</h1>

                <div class="home__scroll">
                    <a href="#about" class="home__scroll-link"><i class='bx bx-up-arrow-alt' ></i>Scroll down</a>
                </div>

                <img src="img/photo.png" alt="" class="home__img">
            </div>
        </section>

        <!--===== ABOUT =====-->
        <section class="about section" id="about">
            <h2 class="section-title">About</h2>

            <div class="about__container bd-grid">
                <div class="about__img">
                    <img src="img/photo.png" alt="">
                </div>

                <div>
                    <h2 class="about__subtitle">I'am Nisrine Bennor</h2>
                    <span class="about__profession">Biomedical computer engineer</span>
                    <p class="about__text">il manque encore le text de présentation</p>

                    <div class="about__social">
                        <a href="#" class="about__social-icon"><i class='bx bxl-linkedin' ></i></a>
                        <a href="#" class="about__social-icon"><i class='bx bxl-github' ></i></a>

                    </div>

                    <div class="about__CV">
                        <br />
                        <a href="CVNisrine.pdf"><button type="button" class="btn btn-outline-primary">GET CV PDF</button></a>

                        <br /><br />

                    </div>
                </div>
            </div>
        </section>

        <!--===== SKILLS =====-->
        <section class="skills section" id="skills">
            <h2 class="section-title">Skills</h2>

            <div class="skills__container bd-grid">
                <div class="skills__box">
                    <h3 class="skills__subtitle"> Development </h3>
                    <span class="skills__name"> HTML </span>
                    <span class="skills__name"> CSS </span>
                    <span class="skills__name"> Javascript </span>
                    <span class="skills__name"> PHP </span>

                    <h3 class="skills__subtitle"> Data analysis and visualization </h3>
                    <span class="skills__name"> Python </span>
                    <span class="skills__name"> R </span>

                    <h3 class="skills__subtitle"> Graphics Modeling </h3>
                    <span class="skills__name"> UML </span>

                    <h3 class="skills__subtitle"> Database</h3>
                    <span class="skills__name"> SQL </span>
                </div>


                <div class="skills__img">
                    <img src="assets/img/skill.jpg" alt="">
                </div>
            </div>
        </section>

        <!--===== PORTFOLIO =====-->
        <section class="portfolio section" id="portfolio">
            <h2 class="section-title">Portfolio</h2>

            <div class="portfolio__container bd-grid">
                <div class="portfolio__img">
                    <img src="img/work1.png" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="img/work2.png" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="img/work3.png" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="img/work4.png" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="img/work5.png" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
                <div class="portfolio__img">
                    <img src="img/work6.png" alt="">

                    <div class="portfolio__link">
                        <a href="#" class="portfolio__link-name">View details</a>
                    </div>
                </div>
            </div>
        </section>



        <!--===== CONTACT =====-->

       
    
        <section class="contact section" id="contact">
            <h2 class="section-title">Contact</h2>

            <div class="contact__container bd-grid">
                <div class="contact__info">
                    <h3 class="contact__subtitle">EMAIL</h3>
                    <span class="contact__text">nisrine.bennoor@gmail.com</span>

                    <h3 class="contact__subtitle">PHONE</h3>
                    <span class="contact__text">+33 7 67 45 52 41</span>


                </div>


               
                <form action="index1.php#contact"  class="contact__form" method="post">
                    <div class="contact_inputs">
                         <input type="text"  name="first_name" placeholder="Name"  class="contact__input">
                         <input type="text" name="email" placeholder="Email"  class="contact__input">
                        
                    </div>
                        <input type="text" name="subject" placeholder="Subject"  class="contact__input">
                        <textarea rows="5" name="message" cols="30" placeholder="Message"  class="contact__input"></textarea>
                        
                        <input type="submit" name="submit" value="Send" name="formContact" class="contact__button">
                    
            </form>

            
            <?php   

            $a = $_POST['submit'];
            if(!empty($_POST) && $_SERVER['REQUEST_METHOD'] == 'POST')
            {        
                
                    $to = "YOUR_EMAIL"; 
                    $emailTo = $_POST['email']; 
                    $first_name = $_POST['first_name'];
                    $subject = $_POST['subject'];
                    $message = $_POST['message'];
                    $body = $subject."\n".$message;
                    $result = smtpmailer($to, $to ,$first_name,$emailTo,$body);
                    unset($result);
                    unset($a);
                    $result = null;
                    $a =  null;
                  if (true !== $result)
                  {
                      echo $result;
                  } 
                

              
          } else {
              
          }
        
            
?>
        <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>        
            </div>
        </section>
    </main>



    <!--===== FOOTER =====-->
    <footer class="footer section">
        <div class="footer__container bd-grid">
            <div class="footer__data">
                <h2 class="footer__title">NISRINE BENNOR</h2>
                <p class="footer__text">I'm Nisrine Bennor and this is my personal website</p>
            </div>

            <div class="footer__data">
                <h2 class="footer__title">EXPLORE</h2>
                <ul>
                    <li><a href="#home" class="footer__link">Home</a></li>
                    <li><a href="#about" class="footer__link">About</a></li>
                    <li><a href="#skills" class="footer__link">Skills</a></li>
                    <li><a href="#portfolio" class="footer__link">Portfolio</a></li>
                    <li><a href="#Contact" class="footer__link">Contact</a></li>
                </ul>
            </div>

            <div class="footer__data">
                <h2 class="footer__title">FOLLOW</h2>
                <a href="#" class="footer__social"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__social"><i class='bx bxl-instagram' ></i></a>

            </div>


        </div>
    </footer>

 



    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="js/main.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
</body>

</html>

<?php
function smtpMailer($to, $from, $from_name, $subject, $body) {
	$mail = new PHPMailer\PHPMailer\PHPMailer();
    // Cree un nouvel objet PHPMailer
	$mail->IsSMTP(); // active SMTP
	$mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
	$mail->SMTPAuth = true;  // Authentification SMTP active
	$mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = 'YOUR_EMAIL';
	$mail->Password = 'Your_PAssword_Email';
	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		return 'Mail error: '.$mail->ErrorInfo;
	} else {
		return true;
	}
}
?>