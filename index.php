<?php 
include __DIR__. '/config.php';
?>
<?php
$meta = [
    'charset' => 'UTF-8',
    'viewport' => 'width=device-width, initial-scale=1.0',
    'description' => 'AirCorp: IT Infrastructure & Cloud Security Consultancy. Building, Securing, and Optimizing enterprise-level systems for small and growing businesses.',
    'keywords' => 'AirCorp, IT Infrastructure Consulting, Linux Administration, AWS, Azure, Network Monitoring, Cybersecurity, Infrastructure, Cloud Computing.',
    'author' => 'AirCorp',
    'title' => isset($title) ? "AirCorp | $title" : 'AirCorp | IT Infrastructure & Security Consultancy',
    'og' => [
        'title' => isset($title) ? "AirCorp | $title" : 'AirCorp | IT Infrastructure & Security Consultancy',
        'description' => 'AirCorp is a hands-on IT infrastructure consultancy specializing in Linux/Unix, enterprise networking, and cloud platforms like AWS/Azure, focused on secure and scalable solutions.',
        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
        'url' => 'https://bipulbimali.com.np/index.php',
        'type' => 'website'
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
                <p class="lead fw-bold">Welcome to</p>
                <h1 class="px-3 text-primary  fw-bold display-4">AirCorp</h1>
                <h2 class=" px-5 text-info">IT Infrastructure & Security Consulting for Small Businesses</h2>
                <p class="klead mt-4"><strong>AirCorp</strong> helps small and growing businesses keep their technology secure, reliable, and running without interruption.</p>

<p>
Many small businesses rely on technology but lack dedicated infrastructure expertise. We focus on identifying weaknesses, improving reliability, and protecting critical systems before problems become costly failures.
</p>

<p>
With hands-on experience across Linux servers, cloud infrastructure, system monitoring, and network operations, our team works directly with real systems — building, testing, and hardening them to ensure they remain secure and dependable in real-world environments.
</p>
            </div>
            <div class="col-12 mt-4 col-sm-5 col-md-4">
                <div class="card" style="min-width: 18rem;">
                    <img src="images/web_developer.jpg" class="card-img-top" alt="I am a Web developer">
                    <div class="card-body">
                        <h5 class="card-title">View Our Infrastructure Projects</h5>
                        <p class="card-text">Explore real-world infrastructure builds, system monitoring setups, cloud deployments, and practical troubleshooting work from our hands-on client and lab environments.</p>
                        <a href="https://www.bipulbimali.com.np/projects.php" class="btn btn-primary">Browse Infrastructure Projects</a>
                    </div>
                </div>
            </div>
        </div>
    </Section>
    <section class="container-fluid bg-dark">
        <div class="row justify-content-around">
            <div class="col-12 col-sm-10 col-md-6">
                <h3 class="h1 py-3 my-3 text-light text-center">Why Me ??</h3>
                <p class="text-white text-center ">
I focus on practical infrastructure reliability. Systems are built, tested under failure conditions, and hardened against real-world risks.
</p>

<p class="text-white text-center">
My approach is simple: identify weaknesses early, solve them properly, and ensure systems remain stable, secure, and observable.
</p>
            </div>
            <div class="col-12  my-3 py-4">
                <div class="container-fluid">
                    <div class="row justify-content-around ">
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center m-2 b-2"><h2>Infrastructure Troubleshooting</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center m-2 b-2"><h2>Network Design & Segmentation</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>Server & Cloud Infrastructure</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>Security Hardening</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>Monitoring & System Visibility</h2></div>
                        <div class="col-12 col-sm-5 col-md-5 col-xl-3 title text-center  m-2 b-2"><h2>Operational Problem Solving</h2></div>
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
                <h3 class=" h1  my-4  text-center text-light">Our Vision</h3>
                <p class="text-light" >
                    Our long-term goal is to be a leading name in infrastructure security and cybersecurity engineering for small businesses.
                </p>

<p class="text-light">
This starts with mastering the systems that modern businesses depend on every day — servers, networks, monitoring systems, and cloud infrastructure.
</p>

<p class="text-light">
By understanding how systems are built, operated, and sometimes fail, we continue developing the expertise required to identify weaknesses and secure complex digital environments.
</p>

<p class="text-light">
The objective is clear: design, defend, and strengthen infrastructure against real-world threats.
</p>
            </div>
        </div>
    </section>
    <footer class="container-fluid bg-body-secondary">
        <div class="py-5 text-center">&copy; AirCorp. All rights reserved</div>

    </footer>
</body>
</html>
