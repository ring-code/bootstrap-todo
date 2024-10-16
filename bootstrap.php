<!DOCTYPE html>
<html lang="de">
<?php
    require_once(__DIR__ . '/classes/Template.php');
    require_once('linkDir.php');
?>   
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bootstrap-Beispiele</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" />
        <link href="./css/todo-style.css" rel="stylesheet" />
        
    </head>
        
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php
                
                $template = new Template(__DIR__ . '/templates', []);
                echo $template->render('nav-side.php', ['pageTitle' => 'Bootstrap-Beispiele']);
            ?>
            
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php
                    
                    $template = new Template(__DIR__ . '/templates', []);
                    echo $template->render('nav-top.php');
                ?>
                
                
                <!-- Page content-->
                <br>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-8">
                    <h2>Bootstrap-Beispiele</h2>
                        
                    <?php 
                        
                        echo linkDir("./bootstrap-examples/"); 

                    ?>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="todo.js"></script>
    </body>

</html>