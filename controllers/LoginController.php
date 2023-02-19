<?php
    namespace Controllers;
    use MVC\Router;
    class LoginController{
        public static function login(Router $router){
            echo "Desde Login";

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            }
            //Render a la vista
            $router->render('auth/login',[
                'titulo' => 'Crea tu cuenta en Task-Pro '
            ]);
        }
        public static function logout(){
            echo "Desde Login";
        }
        public static function crear(Router $router){
            

            if($_SERVER['REQUEST_METHOD'] === 'POST'){

            }
            //Render a la vista
            $router->render('auth/crear',[


            ]);


        }
        public static function olvide(){
            echo "Desde Olvide";
        }


    }

?>