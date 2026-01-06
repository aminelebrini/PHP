<?php
    class Product
    {
        private $name;
        private $price;

        public function __construct($name,$price)
        {
            $this->name = $name;
            $this->price = $price;
        }

        public function get_name()
        {
            return $this->name;
        }
        public function get_price()
        {
            return $this->price;
        }
    }

    class Cart
    {
        private array $panier = [];
        public function ajouter_product($p, int $qty)
        {
            $pro = [
                'name' => $p,
                'quantity' => $qty
            ];
            array_push($this->panier, $pro);
            print_r($this->panier);
        }

        public function searsh_product($p)
        {
            foreach($this->panier as $panier)
            {
                if(in_array($panier,$p))
                {
                    return true;
                }
                return false;
            }
        }
        public function remove_p($p)
        {
            for($x = 0; $x < count($this->panier); $x++)
            {
                if($this->panier[$x] === $p)
                {
                    $this->panier[$x] = $this->panier[$x+1];
                }
            }
            return $this->panier;
        }
    }

    $product = new Product("banan", 250);
    $cart = new Cart($product);
    $cart->ajouter_product($product, 200);
?>