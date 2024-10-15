<!DOCTYPE html>
<html lang="de">
   
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="./css/styles.css" rel="stylesheet" />
        <link href="./css/todo-style.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
        
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php
                require_once(__DIR__ . '/classes/Template.php');
                $template = new Template(__DIR__ . '/templates', []);
                echo $template->render('nav-side.php', ['pageTitle' => 'Todo']);
            ?>
            
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php
                    require_once(__DIR__ . '/classes/Template.php');
                    $template = new Template(__DIR__ . '/templates', []);
                    echo $template->render('nav-top.php');
                ?>
                
                
                <!-- Page content-->
                <br>
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-8">
                        <h1>Meine Todo-Liste</h1>
                        <form id="todo-form">
                            <div class="form-group">
                                
                                <div class="input-group">
                                    <input type="text" id="todo-input" class="form-control" placeholder="Neue Aufgabe eingeben" aria-label="Neue Aufgabe" required>
                                    <button type="submit" class="btn btn-primary">Hinzufügen</button>
                                </div>
                            </div>
                        </form>
                    
                <br>
                <ul id="todo-list">
                    <!-- Unordered list to dynamically add todo list items. -->
                </ul>
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