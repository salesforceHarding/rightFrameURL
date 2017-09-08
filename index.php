<?php

$whichOrg = $_GET["org"];

switch ($whichOrg) {
    case 1:
        static $org = "high-prod.html";
        break;
    case 2:
        static $org = "customer.html";
        break;
    case 3:
        static $org = "employee.html";
        break;
}

include_once($org);
?>
