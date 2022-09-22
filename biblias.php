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
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><h2 style="text-align: center;">Pontuação por Bíblias</h2></div>
                <div class="card m-b-20">
                    <canvas id="myChart" width="800" height="400" style="background-color: gainsboro;"></canvas>
                </div>
            </div>
        </div>
        <?php
            $bb1 = 60; //Preto - São Bento
            $bb2 = 10; //Roxo - Santo Afonso
            $bb3 = 30; //Azul - São Gabriel
            $bb4 = 10; //Vermelho - Santo Agostinho 
            $bb5 = 10; //Verde - São Rafael
            $bb6 = 10; //Amarelo - São Sebastião
            $bb7 = 10; //Laranja - São Miguel
            $bb8 = 10; //Branco - São Domingo Sávio
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
            type: 'pie',
            data: {
                labels: ['São Bento', 'Santo Afonso', 'São Gabriel', 'Santo Agostinho',
                        'São Rafael', 'São Sebastião', 'São Miguel', 'São Domingos Sávio'],
                datasets: [{
                    label: 'Pontuação',
                    data: [ "<?php echo $bb1;?>", "<?php echo $bb2;?>",
                            "<?php echo $bb3;?>", "<?php echo $bb4;?>",
                            "<?php echo $bb5;?>", "<?php echo $bb6;?>",
                            "<?php echo $bb7;?>", "<?php echo $bb8;?>"],
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