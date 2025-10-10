<?php 
include __DIR__. '/config.php';
?>








<?php
$meta = [
    'charset' => 'UTF-8',
    'viewport' => 'width=device-width, initial-scale=1.0',
    'description' => 'Bipul Bimali - Passionate Cybersecurity Enthusiast working towards making a safer digital world',
    'keywords' => 'Bipul Bimali, Cybersecurity, Web Development, Software Developer',
    'author' => 'Bipul Bimali',
    'title' => isset($title) ? "Bipul Bimali $title" : 'Bipul Bimali',
    'og' => [
        'title' => isset($title) ? "Bipul Bimali $title" : 'Bipul Bimali',
        'description' => 'Bipul Bimali is a well-versed web and software developer with experience in network administration',
        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
        'url' => 'https://bipulbimali.com.np/index.php',
        'type' => 'Portfolio website'
    ]
];

$assets = [
    'css' => [
        'css/body.css',
        'bootstrap-5.3.3/dist/css/bootstrap.min.css',
        'css/style.css'
    ],
    'js' => [
        'bootstrap-5.3.3/dist/js/bootstrap.bundle.js',
        'javascript/main.js'
    ],
    'favicon' => 'icon/icon.svg'
];



?>




<!DOCTYPE html>

<html lang="en">
<?php 
include $phproot."head.php";
?>
<body>
<?php 
include $phproot."header.php";
?>
    <Section class="container-fluid">
        <div class="row align-items-center justify-content-around">
            <div class="col-12  text-center">
                <p>Hi, this is </p>
                <h1 class="px-3 text-primary">Bipul Bimali</h1>
                <h2 class=" px-5 text-info">I build websites and Softwares.</h2>
            </div>
            <div class="col-12 col-sm-7 col-md-6 justify-content-around">
                <p>I'm a Software developer specializing in building  softwares and Websites  with exceptional understanding of the working logics. I'm focused on building highly scaleable, secure and modular softwares.</p>
                <p>"I'm a web developer, not a content writer—heehehe! I mean, seriously, you want me to craft eloquent prose? I spend my days buried in lines of JavaScript and CSS, not composing flowery paragraphs. My expertise is in debugging code and optimizing performance, not weaving words into beautiful sentences. Need a website to run smoothly and look great on all devices? I'm your person. Need someone to write a compelling story? You might want to look elsewhere!"</p>
            </div>
            <div class="col-12 col-sm-5 col-md-6">
                <div class="card" style="min-width: 18rem;">
                    <img src="images/web_developer.jpg" class="card-img-top" alt="I am a Web developer">
                    <div class="card-body">
                        <h5 class="card-title">Doing something </h5>
                        <p class="card-text">This ain't me buddy. I got it from internet</p>
                        <a href="https://kenzie.snhu.edu/blog/everything-you-need-to-know-about-a-career-in-web-development/" class="btn btn-primary">Click to go to the picture</a>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <section class="container-fluid bg-secondary">
        <div class="row justify-content-around">
            <div class="col-12 col-sm-10 col-md-6">
                <h3 class="h1 py-3 my-3 text-light text-center">Why Me ??</h3>
                <p class="text-white text-center ">Because I can </p>
                <p class="text-white text-center ">They ane no important points. All of them are my high school friends</p>
            </div>
            <div class="col-12  my-3 py-4">
                <div class="container-fluid">
                    <div class="row justify-content-around">
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title bg-primary-subtle  m-2"><h2>Bipul Bimali</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title bg-primary-subtle  m-2"><h2>Nischal Pant</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title bg-primary-subtle  m-2"><h2>Sandesh Gharti Magar</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title bg-primary-subtle  m-2"><h2>Pankaj Pandit</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title bg-primary-subtle  m-2"><h2>Shree Raut</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title bg-primary-subtle  m-2"><h2>Sakshyam Bhushal</h2></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="container-fluid">
        <div class="row justify-content-around bg-dark">
            <div class="col-11 py-3 col-sm-6 col-md-4">
                <img style="max-width:100%;object-fit:cover" src="images/vision.jpg" alt="">
            </div>
            <div class="col-11 text-center col-sm-6 col-md-4">
                <h3 class=" h1  my-4  text-center text-light">My Vision</h3>
                <p class="text-light" >My vision is to be one of the top lead in cybersecurity</p><!--
                <p class="text-light">I am starting  my journey with a firm grasp on programming and web development </p> -->
                <p class="text-light">
                My vision is to be a leading expert in cybersecurity. I am starting my journey with a firm grasp on programming and web development, aiming to master the latest technologies and techniques in cybersecurity to protect and secure digital landscapes.
                </p>
            </div>
        </div>
    </section>
    <footer class="container-fluid bg-body-secondary">
        <div class="py-5 text-center">&copy; Bipul Bimali. All rights reserved</div>

    </footer>
</body>
</html>
