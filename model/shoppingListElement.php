<?php
class shoppingListElement{
    private int $idProduct;
    private string $name;
    private int $quantity;
    private float $price;
    private string $categoria;
    

    public function __construct(int $idProduct, string $name, float $quantity, float $price, string $categoria){
        $this->id = $idProduct;
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->categoria = $categoria; 
    }

    public function getId(){
        return $this->idProduct;
    }

    public function getName(){
        return $this->name;
    }

    public function getQuantity(){
        return $this->quantity;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCategoria(){
        return $this->categoria;
    }


    public function setId(int $idProduct){
        $this->id = $idProduct;
    }

    public function setName(string $name){
        $this->name = $name;
    }

    public function setQuantity(float $quantity){
        $this->quantity = $quantity;
    }

    public function setPrice(float $price){
        $this->price = $price; 
    }

    public function setCategoria(float $categoria){
        $this->categoria = $categoria; 
    }

    
}
