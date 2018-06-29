<?php 

//define('HOME', 'http://localhost/projetos/westcarnes');
define('HOME', 'http://localhost/projetos/westcarnes');
define('THEME', 'westcarnes');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

//------------------------AUTOLOAD PARA NÃO INSTANCIAR O REQUIRE EM ALGUMAS PAGINAS------------------------ //
function __autoload($Class) {
    $cDir = ['Util', 'DAL', 'Model', 'Controller'];
    $iDir = null;

    foreach ($cDir as $dirName):
       if (!$iDir && file_exists(__DIR__ . '/' . $dirName . '/' . $Class . '.php') && !is_dir(__DIR__ . '/' . $dirName . '/' . $Class . '.php')):
            include_once (__DIR__ . '/' . $dirName . '/' . $Class . '.php');
            $iDir = true;
        endif;
    endforeach;

    if (!$iDir):
        trigger_error("Não foi possível incluir classe {$Class}.php", E_USER_ERROR);
        die;
    endif;
}



