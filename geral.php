<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.101.0">
        <title>Gincana PSJE - 2022</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/">
        <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <meta name="theme-color" content="#712cf9">
        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
        </style>
        <!-- Custom styles for this template -->
        <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    </head>

    <body class="d-flex flex-column h-100">    
    <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/#" style="font-weight: bold;">PSJE - Gincana Bíblica</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--<div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
            </ul>        
        </div>-->
        </div>
    </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
    <div class="container">    
    </div>
    <div class="card">
        <a type="button" href="index.php" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
            </svg>
            Início
        </a>   
    </div>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 style="text-align: center;">Pontuação Geral</h2></div>
                <div class="card m-b-20">
                    <canvas id="myChart" width="800" height="400" style="background-color: gainsboro;"></canvas>
                </div>
            </div>
        </div>
        <?php
            $pg1 = 60+70 + 2; //Preto - São Bento
            $pg2 = 10+30 + 150; //Roxo - Santo Afonso
            $pg3 = 30+70 + 0; //Azul - São Gabriel
            $pg4 = 0+40  + 48; //Vermelho - Santo Agostinho 
            $pg5 = 10+10 + 110; //Verde - São Rafael
            $pg6 = 0+0   + 18; //Amarelo - São Sebastião
            $pg7 = 10+0  + 0; //Laranja - São Miguel
            $pg8 = 0+0   + 0; //Branco - São Domingo Sávio
        ?>
    </div>
    </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
    <div class="container" style="text-align: center;">
        <span class="text-muted">Paróquia São José Esposo - Diocese Guiratinga/Rondonópolis-MT - Gincana Bíblica - 2022.</span>
    </div>
    </footer>
        <script src="chartjs/chart.min.js"></script>
        <script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script>
        const ctx = document.getElementById('myChart');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['São Bento', 'Santo Afonso', 'São Gabriel', 'Santo Agostinho',
                        'São Rafael', 'São Sebastião', 'São Miguel', 'São Domingos Sávio'],
                datasets: [{
                    label: 'Pontuação',
                    data: [ "<?php echo $pg1;?>", "<?php echo $pg2;?>",
                            "<?php echo $pg3;?>", "<?php echo $pg4;?>",
                            "<?php echo $pg5;?>", "<?php echo $pg6;?>",
                            "<?php echo $pg7;?>", "<?php echo $pg8;?>"],
                    backgroundColor: [
                        'RGBA( 0, 0, 0, 1 )',
                        'RGBA( 138, 43, 226, 1 )',
                        'RGBA( 0, 0, 255, 1 )',
                        'RGBA( 178, 34, 34, 1 )',
                        'RGBA( 0, 128, 0, 1 )',
                        'RGBA( 255, 215, 0, 1 )',
                        'RGBA( 255, 140, 0, 1 )',
                        'RGBA( 255, 255, 255, 1 )'
                    ],
                    borderColor: [
                        'RGBA( 0, 0, 0, 1 )',
                        'RGBA( 138, 43, 226, 1 )',
                        'RGBA( 0, 0, 255, 1 )',
                        'RGBA( 178, 34, 34, 1 )',
                        'RGBA( 0, 128, 0, 1 )',
                        'RGBA( 255, 215, 0, 1 )',
                        'RGBA( 255, 140, 0, 1 )',
                        'RGBA( 169, 169, 169, 1 )'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    autocolors: false,
                    annotation: {
                        annotations: {
                            box1: {
    
                                type: 'box',
                                xMin: 0.5,
                                xMax: 1.5,
                                yMin: 0,
                                yMax: 2
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
            plugins: ['chart-plugin-annotation']
    
        });
    </script>
    </body>
</html>