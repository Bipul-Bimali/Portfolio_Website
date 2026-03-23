<?php 
include __DIR__. '/config.php';
?>



<?php
$content1 = "projects/default.html";
if($_SERVER['REQUEST_METHOD']=="GET"){
    if($_GET["id"]){
        $project = preg_replace('/[^a-zA-Z0-9\-]/', '', $_GET['id']);

        switch ($project) {
            case "rubber-ducky": 
                $content1 = "projects/ducky.html";
                $title = "USB Rubber Ducky + Raspberry Pi 4 Runner | Pentesting & IoT Security";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'A hands-on cybersecurity project by Bipul Bimali demonstrating physical access exploitation using a USB Rubber Ducky and Raspberry Pi 4. Includes reverse shell execution, encrypted tunnels, IoT-based C2, PowerShell obfuscation, and Linux hardening techniques.',
                    'keywords' => 'USB Rubber Ducky, Raspberry Pi 4, Pentesting, IoT Security, Physical Access Exploitation, Reverse Shell, PowerShell Obfuscation, SSH Tunneling, Linux Security, Cybersecurity Projects, Red Team Tools',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali | AirCorp" : 'Bipul Bimali | AirCorp',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali | AirCorp',
                        'description' => 'A practical pentesting and IoT security project combining USB Rubber Ducky payload execution with a Raspberry Pi 4 acting as a covert drop-box for persistent remote access.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ];

                break;
            case "linux-recovery": 
                $content1 = "projects/linux-recovery.html";
                $title = "Linux System Recovery | Secure SSH Restoration & Permission Repair";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'A practical Linux recovery project by Bipul Bimali focusing on restoring secure SSH access, repairing broken key configurations, fixing user permissions, and enforcing least‑privilege principles using TTY-based recovery and system integrity validation.',
                    'keywords' => 'Linux System Recovery, SSH Repair, Linux Permissions, Least Privilege, OpenSSH, TTY Recovery, Ubuntu, Debian, Systemd, ACLs, Sudoers, auth.log, journalctl, Linux Security, Sysadmin Projects',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'Hands-on Linux system recovery project restoring SSH access, repairing permissions, and enforcing least‑privilege access through secure, controlled recovery workflows.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ];
                break;
            case "homelab": 
                $content1 = "projects/homelab.html";
                $title = "Automated Monitoring & Secure Remote Access | Infrastructure Project";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'IT consulting project by Bipul Bimali focused on building reliable system monitoring, secure remote access, and scalable environments. Demonstrates real-world problem solving, system stability, and proactive infrastructure management for business needs.',
                    'keywords' => 'IT Consultant, System Monitoring, Remote Access, Infrastructure Setup, Zabbix, VPN, Proxmox, Linux Servers, Network Monitoring, Business IT Solutions, Infrastructure Management, IT Support Solutions',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'A real-world IT consulting project showing how businesses can monitor systems, access them securely, and maintain reliable infrastructure with proactive management.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ];
                break;
            case "hestia-work":
                $title = "Hestia Control Panel Work | Web Hosting, SSL, DNS & Server Troubleshooting";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'Hands-on web hosting infrastructure work by Bipul Bimali using the Hestia Control Panel. Includes domain and DNS configuration, SSL deployment, file permission management, and server-side troubleshooting across Nginx/Apache and PHP-FPM in a production-style environment',
                    'keywords' => 'Hestia Control Panel, Web Hosting, DNS Configuration, SSL Certificates, Let’s Encrypt, Nginx, Apache, PHP-FPM, Linux Administration, Server Troubleshooting, File Permissions, Web Server Configuration, Hosting Infrastructure, Sysadmin Projects',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'Practical hosting environment management using Hestia CP, covering DNS, SSL, permissions, and server-side troubleshooting for secure and reliable web deployments.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ]; 
                $content1 = "projects/hestia.html";
                break;
            case "php-portfolio":
                $title = "Modular PHP Portfolio | Scalable Architecture, Config Separation & Reusable Components";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'A modular PHP portfolio project by Bipul Bimali showcasing scalable architecture, config separation, reusable components, and clean code structure. Built for extensibility, maintainability, and future expansion with dynamic routing and structured UI blocks.',
                    'keywords' => 'Modular PHP Portfolio, PHP Architecture, Config Separation, Reusable Components, Scalable PHP Design, Backend Development, PHP Refactoring, Clean Code, Bootstrap UI, Version Control, Dynamic Routing, Web Development Projects',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'A fully modular PHP portfolio system featuring reusable components, config separation, scalable architecture, and clean backend design for easy expansion and maintainability.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ]; 
                $content1 = "projects/php-portfolio.html";
                break;



                case "synchronousemail":
                $content1 = "projects\synchronousemail.html";
                $title = "Reliable Email Delivery System | Self-Hosted Mail & SMTP Setup";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'Built a self-hosted email system to ensure reliable message delivery, reduce spam issues, and maintain control over email infrastructure using SMTP and domain configuration.',
                    'keywords' => 'email server setup, SMTP configuration, self hosted email, email delivery, spam prevention, IT infrastructure, system reliability',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'Built a self-hosted email system to ensure reliable message delivery, reduce spam issues, and maintain control over email infrastructure using SMTP and domain configuration.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ]; 

                break;
            case "linux-checks": 
                $content1 = "projects/linux-checks.html";
                $title = "Linux System Health Checks | Performance Monitoring & System Integrity";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'Linux system health check project by Bipul Bimali focusing on CPU/RAM monitoring, disk diagnostics, service validation, network health checks, and system integrity verification across multiple Linux distributions.',
                    'keywords' => 'Linux Health Checks, System Monitoring, CPU Usage, RAM Utilization, Disk Diagnostics, smartctl, systemctl, journalctl, Network Tools, Linux Administration, Performance Monitoring, Sysadmin Projects, Troubleshooting',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'Hands-on Linux system health check project analyzing performance, resource usage, disk health, service uptime, and system integrity using real-world sysadmin tools.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ];
                break;
            case "network-lab": 
                $content1 = "projects/network-lab.html";
                $title = "Linux System Health Checks | Performance Monitoring & System Integrity";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'Linux system health check project by Bipul Bimali focusing on CPU/RAM monitoring, disk diagnostics, service validation, network health checks, and system integrity verification across multiple Linux distributions.',
                    'keywords' => 'Linux Health Checks, System Monitoring, CPU Usage, RAM Utilization, Disk Diagnostics, smartctl, systemctl, journalctl, Network Tools, Linux Administration, Performance Monitoring, Sysadmin Projects, Troubleshooting',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'Hands-on Linux system health check project analyzing performance, resource usage, disk health, service uptime, and system integrity using real-world sysadmin tools.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ];
                break;
                case "Fuck_ed":
                    echo "You are Fuckeed Bithch";
            default:
                $content1 = "projects/default.html";
                $title = "Projects | Linux Administrator, DevOps & Cybersecurity";
                $meta = [
                    'charset' => 'UTF-8',
                    'viewport' => 'width=device-width, initial-scale=1.0',
                    'description' => 'Explore Bipul Bimali’s projects in Linux Administration, DevOps, Cloud (AWS/Azure), Cybersecurity, and Full-Stack Development. Case studies on penetration testing, system recovery, cloud deployment, and secure web hosting.',
                    'keywords' => 'Linux Administrator, AWS, Azure, Network Monitoring, System Analyst, Cybersecurity, Infrastructure, CloudComputing.',
                    'author' => 'Bipul Bimali',
                    'title' => isset($title) ? "$title Bipul Bimali" : 'Bipul Bimali',
                    'og' => [
                        'title' => isset($title) ? "$title" : 'Bipul Bimali',
                        'description' => 'Hands-on projects: penetration testing, cloud deployment, network monitoring, PHP portfolio, and secure system recovery.',
                        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
                        'url' => 'https://bipulbimali.com.np/index.php',
                        'type' => 'website'
                    ]
                ];
        }
    }
}
else{
    $content1="projects/default.html";
}
?>
<?php

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