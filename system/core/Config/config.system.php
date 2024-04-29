<?php
// const BASE_URL = "https://pruebassistemas1.000webhostapp.com/";
const BASE_URL = "http://unesr.lat/";
const HEAD = "src/include/head.php";
const FOOTER = "src/include/footer.php";
//const BACK_URL = $_SERVER['REQUEST_URI'];
const LIBS = "system/core/Libraries/";
const VIEWS = "system/app/Views/";
const titulo = "Tienda Virtual en construccion";
date_default_timezone_set('America/Caracas');

//rutas de assets
const CSS = BASE_URL."src/css/";
const JS = BASE_URL."src/js/";
const IMG = BASE_URL."src/images/";
//constantes del template admin
const JS_VENDORS = BASE_URL."src/vendors/js/";
const CSS_VENDORS = BASE_URL."src/vendors/css/";
const IMG_VENDORS = BASE_URL."src/vendors/images/";
const VENDORS = BASE_URL."src/vendors/";
const PLUGINS = BASE_URL."src/plugins/";

const CONTROLLER = BASE_URL."system/core/Libraries/Controllers.php";
const LOAD = BASE_URL."system/core/Libraries/Load.php";

//constantes de base de datos
const DB_HOST = "localhost";
const DB_USER = "root";
const DB_PASS = "";
const DB_NAME = "db_unesr";
const DB_CHARSET = "charset=utf8";

//delimitador decimal y millar Ej. 24,1999.00
const SPD = ',';
const SPM = '.';
//simbolo de moneda
const SMONEY = '$';
//constantes de encriptacion
define('METHOD','AES-256-CBC');
define('SECRET_KEY','$3nt0rn0');
define('SECRET_IV','101712');

const TLF = '+58 1234567';
const EMAIL = 'email@gmail.com';
const DIRECCION = 'Zona industrial Agustín Rivero, Edif. CIEPE, Piso 1, San Felipe 3201, Yaracuy';