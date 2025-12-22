<?php 
include __DIR__. '/config.php';
?>
<?php

$meta = [
    'charset' => 'UTF-8',
    'viewport' => 'width=device-width, initial-scale=1.0',
    'description' => 'Bipul Bimali: Linux Administrator & Cloud Infrastructure Specialist. Building, Securing, and Optimizing enterprise-level systems.',
    'keywords' => 'Bipul Bimali, Linux Administrator, AWS, Azure, Network Monitoring, System Analyst, Cybersecurity, Infrastructure, CloudComputing.',
    'author' => 'Bipul Bimali',
    'title' => isset($title) ? "Bipul Bimali $title" : 'Bipul Bimali',
    'og' => [
        'title' => isset($title) ? "Bipul Bimali $title" : 'Bipul Bimali',
        'description' => 'Hands-on expert in Linux/Unix, enterprise networking and cloud platforms like AWS/Azure, focused on secure and scalable IT solutions.',
        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
        'url' => 'https://bipulbimali.com.np/index.php',
        'type' => 'Portfolio website'
    ]
];
$assets = [
    // --- CSS Assets ---
    'css' => [
        // 1. Primary Stylesheet
        [
            'path' => 'bootstrap-5.3.3/dist/css/bootstrap.min.css',
            'attributes' => '' 
        ]
    ],    
    'js' => [
        [
            'path' => 'bootstrap-5.3.3/dist/js/bootstrap.bundle.js'
        ],
        [
            'path' => 'javascript/main.js',
            'attributes' => 'defer id="main-script"' 
        ]
    ],
    
    'favicon' => 'icon/icon.svg'
];
?>
<!DOCTYPE html>

<html lang="en">
<?php 
include $phproot."head.php";
?>
<body data-bs-theme="dark">
<?php 
include $phproot."header.php";
?>
    <Section class="container-fluid">
        <div class="row align-items-center justify-content-around">
            <div class="col-12 col-sm-7 col-md-8 justify-content-around">
                <p class="lead fw-bold">Hi, this is </p>
                <h1 class="px-3 text-primary  fw-bold display-4">Bipul Bimali</h1>
                <h2 class=" px-5 text-info">Linux Adminsistrator & Cloud Infrastructure Specialist.</h2>
                <p class="klead mt-4"><strong> Bipul Bimali </strong> is a hands-on Linux Administrator and Systems Analyst specializing in the building, security, and optimization of enterprise infrastructure.</p>
                <p>With proven expertise across Linux/Unix environments, AWS/Azure cloud platforms and advanced network monitoring, he focuses on solving real-world operationsl challenges-fron designing secure VLANs
                    to advanced troubleshooting and recovering critical services. Bipul is defined by a security-first mindset
                    and a persistent, "learn by doing" approach, translating technical rogor into reloable and strategic results.</p>
            </div>
            <div class="col-12 mt-4 col-sm-5 col-md-4">
                <div class="card" style="min-width: 18rem;">
                    <img src="images/web_developer.jpg" class="card-img-top" alt="I am a Web developer">
                    <div class="card-body">
                        <h5 class="card-title">View  My work in Action </h5>
                        <p class="card-text">Explore technical projects, home lab configurations, and practical solutions across Linux, Networking, and Cloud.</p>
                        <a href="https://kenzie.snhu.edu/blog/everything-you-need-to-know-about-a-career-in-web-development/" class="btn btn-primary">Browse Technical Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <section class="container-fluid bg-dark">
        <div class="row justify-content-around">
            <div class="col-12 col-sm-10 col-md-6">
                <h3 class="h1 py-3 my-3 text-light text-center">Why Me ??</h3>
                <p class="text-white text-center ">I don't just learn theory, I build, break and fix,
                    My experience is defined y practical application and
                    a security-first mindset.</p>
            </div>
            <div class="col-12  my-3 py-4">
                <div class="container-fluid">
                    <div class="row justify-content-around ">
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center m-2 b-2"><h2>Advanced System Troubleshooting</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center m-2 b-2"><h2>Enterprise-level Networking (VLAN/ACL)</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>Linux / Cloud (AWS / Azure)</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>Security-First Operations & Principles</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>System Monitoring & Atutomation</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>Real-World Problem Solving</h2></div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="container-fluid">
        <div class="row justify-content-around bg-dark">
            <div class="col-11 py-3 col-sm-3 col-md-2 m-auto">
                <img style="max-width:100%;object-fit:cover" src="images/vision.jpg" alt="">
            </div>
            <div class="col-11 text-center col-sm-8 col-md-9">
                <h3 class=" h1  my-4  text-center text-light">My Vision</h3>
                <p class="text-light" >My vision is to be one of the top lead in cybersecurity</p><!--
                <p class="text-light">I am starting  my journey with a firm grasp on programming and web development </p> -->
                <p class="text-light">
                My ultimate vision is to be a leading expert in <strong>Cubersecurity Engineering </strong> and <Strong>Infrastructure Security </Strong> 
                </p>
                <p class="text-light">
                    I am building towards  this goal by  leveraging my strong foundation in <strong> Linux System Administration </strong>  and
                    <strong> Operations</strong>.
                    I am to master defensive  and ofensive techniques required to protect  and secure comples digital landscapes, transitioning
                    from strategic cybersecurity  leadership.
                </p>
            </div>
        </div>
    </section>
    <footer class="container-fluid bg-body-secondary">
        <div class="py-5 text-center">&copy; Bipul Bimali. All rights reserved</div>

    </footer>
</body>
</html>
