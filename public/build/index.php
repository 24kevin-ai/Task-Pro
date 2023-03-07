<?
use Controllers\LoginController;
use MVC\Router;
$router = new Router();

//Login
$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);

//crar cuneta

$router->get('/crear', [LoginController::class,'crear']);
$router->post('/crear',[LoginController::class,'crear']);

//Formulario para olvide mi contraseña

$router->get('/olvide', [LoginController::class, 'olvide']);
$router->post('/olvide', [LoginController::class, 'olvide']);

//Colocar el nuevo password
$router->get('/reestablecer', [LoginController::class, 'reestablecer']);
$router->get('/reestablecer', [LoginController::class, 'reestablecer']);

//Confirmación de Cuenta
$router->get('/mensaje', [LoginController::class, 'mensjae']);
$router->get('/mensaje', [LoginController::class, 'mensjae']);

//Comprueba y valida las rutas, que existan y les asigna las funciones del controlador

$router->comprobarRutas();
?>