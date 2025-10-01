<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class P50_AddToCart {
    public function main(): void {
        // Write your code here
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        
        if (isset($_GET['item']) && !empty($_GET['item'])) {
            $_SESSION['cart'][] = $_GET['item'];
        }
        
        echo implode(',', $_SESSION['cart']);
    }
}