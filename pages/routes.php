<?php

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = "";
}

switch ($page) {
    case "":
    case "dashboard":
        include "pages/dashboard.php";
        break;
    case "courses":
        include "pages/courses/courses.php";
        break;
    case "detailcourse":
        include "pages/courses/detailcourse.php";
        break;
    case "addcourse":
        include "pages/courses/addcourse.php";
        break;
    case "editcourse":
        include "pages/courses/editcourse.php";
        break;
    case "deletecourse":
        include "pages/courses/deletecourse.php";
        break;
    case "material":
        include "pages/material/material.php";
        break;
    case "addmaterial":
        include "pages/material/addmaterial.php";
        break;
    case "deletematerial":
        include "pages/material/deletematerial.php";
        break;
    case "editmaterial":
        include "pages/material/editmaterial.php";
        break;
    case "about":
        include "pages/about.php";
        break;
    default:
        include "pages/404.php";
}
