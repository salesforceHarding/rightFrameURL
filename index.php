<?php

switch ($_GET["org"]) {
    case 1:
        include_once("high-prod.html");
        break;
    case 2:
        include_once("customer.html");
        break;
    case 3:
        include_once("employee.html");
        break;
}

?>
