<?php
// user.php
class User {
    private $username;
    private $cart = [];

    public function __construct($username) {
        $this->username = $username;
    }

    public function displayInfo() {
        echo "User: {$this->username}\n";
    }

    public function addToCart($product) {
        echo "{$this->username} added {$product->displayInfo()} to the cart.\n";
        $this->cart[] = $product;
    }

    public function viewCart() {
        echo "Shopping Cart for {$this->username}:\n";
        foreach ($this->cart as $product) {
            $product->displayInfo();
        }
    }
}
?>
