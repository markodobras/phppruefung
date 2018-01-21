<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 20.01.2018
 * Time: 11:41
 */
include_once 'ball.php';
include_once 'fussball.php';
include_once 'basketball.php';
include_once 'tennisball.php';
use \baelle\fussball\fussball;
use \baelle\basketball\basketball;
use \baelle\tennisball\tennisball;

$einball[] = new fussball(
    "Adidas Jabulani 2010 World Cup Edition",
    21,
    "Leder",
    "weiß"
);

$einball[] = new fussball(
    "Adidas Tango Miniformat",
    19,
    "Leder",
    "schwarz"
);
$einball[] = new tennisball(
    "Roger Federer Edition",
    6.8,
    "Filz",
    68
);
$einball[] = new tennisball(
    "Novak Djokovic Edition",
    6.58,
    "Filz",
    64
);

$einball[] = new basketball(
    "NCAA Street Shot",
    17,
    "Leder",
    "Nachwuchs"
);

$einball[] = new basketball(
    "Spalding",
    24,
    "Leder",
    "NBA"
);

foreach($einball as $item){
    /* @var $item IceInterface */
    echo $item."<br>";
}
echo "<br>"."In welchem Format wollen Sie die Liste haben?";
echo "<br>"."<a href='./?format=html' >HTML</a> <a href='./?format=json'>JSON</a>"."<br>";
echo isset($_GET['format']) ? $_GET['format'] : "no format given";
//echo $_GET['name'];
function renderHTML($ball): string
{
    $a="";
    foreach($ball as $einball) {
        $a.=(string)$einball;
    }
    return $a;
}
function renderJSON($ball): string
{
    $a="";
    foreach($ball as $einball) {
        $a.='{ "name":'.$einball->getName().',"durchmesser":"'.$einball->getDurchmesser().' "material":'.$einball->getMaterial().'},';
    }
    return $a;
}
if (isset($_GET['format'])) {
    if ($_GET['format'] == 'html') {
        echo renderHTML($einball);
    }
    if ($_GET['format'] == 'json') {
        echo renderJSON($einball);
    }
    if ($_GET['format'] != 'json' && $_GET['format'] != 'html') {
        echo 'no format given';
    }
}
