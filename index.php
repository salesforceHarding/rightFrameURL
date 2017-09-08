<?php

$whichOrg = $_GET["org"];

switch ($whichOrg) {
    case "high-prod":
        static $org = "high-prod.html";
        break;
    case "customer":
        static $org = "customer.html";
        break;
    case "employee":
        static $org = "employee.html";
        break;
}

include_once($org);
?>
