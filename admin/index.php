<?php 
if ($redirector == 'admin' || $redirector == 'thaytrinhno1') {
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch($page) {
            case 'categories': 
                require_once './admin/pages/categories.php';
                break;
            case 'home': 
                require_once './admin/pages/home.php';
            default: 
                require_once './admin/pages/home.php';    
        }
    } else require_once './admin/pages/home.php'; 
}