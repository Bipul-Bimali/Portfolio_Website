<?php 
include __DIR__. '/config.php';
?>



<?php
$content1 = "projects/default.html";
if($_SERVER['REQUEST_METHOD']=="GET"){
    if($_GET["id"]){
        $project = $_GET['id'];
        

        switch ($project) {
            case "rubber-ducky": 
                $content1 = "projects/ducky.html";
                break;
            case "linux-recovery": 
                $content1 = "projects/linux-recovery.html";
                break;
            case "homelab": 
                $content1 = "projects/homelab.html";
                break;
            case "hestia-work": 
                $content1 = "projects/Hestia.html";
                break;
            case "php-portfolio": 
                $content1 = "projects/php-portfolio.html";
                break;
            case "linux-checks": 
                $content1 = "projects/linux-checks.html";
                break;
            default:
                 $content1 = "projects/default.html";
        }
    }
}
else{
    $content1="projects/default.html";
}
// $content1="projects/ducky.html";
?>
<?php
$title = "Projects | Linux Administrator, DevOps & Cybersecurity";
$meta = [
    'charset' => 'UTF-8',
    'viewport' => 'width=device-width, initial-scale=1.0',
    'description' => 'Explore Bipul Bimali’s projects in Linux Administration, DevOps, Cloud (AWS/Azure), Cybersecurity, and Full-Stack Development. Case studies on penetration testing, system recovery, cloud deployment, and secure web hosting.',
    'keywords' => 'Linux Administrator, AWS, Azure, Network Monitoring, System Analyst, Cybersecurity, Infrastructure, CloudComputing.',
    'author' => 'Bipul Bimali',
    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
    'og' => [
        'title' => isset($title) ? "Bipul Bimali $title" : 'Bipul Bimali',
        'description' => 'Hands-on projects: penetration testing, cloud deployment, network monitoring, PHP portfolio, and secure system recovery.',
        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
        'url' => 'https://bipulbimali.com.np/index.php',
        'type' => 'website'
    ]
];
$assets = [
    'css' => [
        [
            'path' => 'bootstrap-5.3.3/dist/css/bootstrap.min.css',
            'attributes' => '' 
        ],
        [
            'path' => 'css/style.css',
            'attributes' => '' 
        ]
    ],
    
    'js' => [
        [
            'path' => 'bootstrap-5.3.3/dist/js/bootstrap.bundle.js',
             'attributes' => '' 
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
include ROOT_PATH.$content1;
?>
</body>
</html>    