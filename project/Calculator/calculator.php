<?php 
include __DIR__ .'/../../config.php';
?>

<!--=======================META DATA======================-->
<?php
$title = " Calculator | Bipul Bimali (AirCorp)";
$meta = [
    'charset' => 'UTF-8',
    'viewport' => 'width=device-width, initial-scale=1.0',
    'description' => 'Use Bipul Bimali (AirCorp)`s online calculator for quick  and easy arithmetic  and advanced math functions. Built for speed, clarity and simplicity.',
    'keywords' => 'Calculator, online calculator, math , arithmetic, math tool web calculator  Bipul Bimali (AirCorp), Web calculator',
    'author' => 'Bipul Bimali',
    'title' => isset($title) ? "Bipul Bimali | AirCorp $title" : 'Bipul Bimali',
    'og' => [
        'title' => isset($title) ? "Bipul Bimali | AirCorp $title" : 'Bipul Bimali',
        'description' => 'A sleek web-based calculator designed by Bipul Bimali (AirCorp) . Build with HTML, CSS and JavaScript for fast math on the fly',
        'image' => 'https://bipulbimali.com.np/icon/icon.svg',
        'url' => 'https://bipulbimali.com.np/projects/web/Calculator/calculator.php',
        'type' => 'website'
    ]
];

$assets = [
    'css' => [
	'calculator.css'
    ],
     'js' => [
        [
            'path' => 'Calculator.js',
            'attributes' => 'defer' 
        ]
    ],
    'favicon' => 'icon/icon.svg'
];
?>

<!DOCTYPE html>
<html lang="en">


<?php 
include $phproot.'/head.php';
?>

    <body>
	<h1 style="font-size: 2rem; color: #0d6efd; margin: 0; text-align: center;">
  Online Calculator by 
  <a href="/index.php" style="color: inherit; text-decoration: none;">Bipul Bimali</a>
</h1>


        <div  class="calculator">
                <div  class="display">
                 <div data-first class="first_input"></div>
                 <div data-second class="second_input"></div>
                </div>
                <div class="buttons">
                    <button class="span-2" data-a>AC</button>
                    <button class="span-1" data-d>DEL</button>
                    <button class="span-1" data-operand>*</button>
                    <button class="span-1" data-ts>sq</button>
                    <button class="span-1" data-number>1</button>
                    <button class="span-1" data-number>2</button>
                    <button class="span-1" data-number>3</button>
                    <button class="span-1" data-operand>-</button>
                    <button class="span-1" data-ts>sqrt</button>
                    <button class="span-1" data-number>4</button>
                    <button class="span-1" data-number>5</button>
                    <button class="span-1" data-number>6</button>
                    <button class="span-v-2" data-operand>+</button>
                    <button class="span-1" data-ts>!</button>
                    <button class="span-1" data-number>7</button>
                    <button class="span-1" data-number>8</button>
                    <button class="span-1" data-number>9</button>
                    <button class="span-1" data-operand>/</button>
                    <button class="span-1" data-ts>ND</button>
                    <button class="span-1" data-number>.</button>
                    <button class="span-1" data-number>0</button>
                    <button class="span-2" data-e>=</button>
                </div>
        </div>
    </body>
	<!-- <script src="https://bipulbimali.com.np/projects/web/Calculator/calculator.js"></script> -->
</html>
