<?php

// You can switch you rightside image/test depending on the org by passing an org number.
switch ($_GET["org"]) {
    case 1:
        include_once("org1.html");
        break;
    case 2:
        include_once("org2.html");
        break;
    case 3:
        include_once("org3.html");
        break;
}

?>
