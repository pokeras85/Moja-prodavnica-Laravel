<?php


namespace App;


class Cart
{
public $items = null;
public $totalQty = 0;
public $totalPrice = 0;

public function __construct($oldcart){
    if($oldcart){
        $this->items =$oldcart->items;
        $this->totalQty=$oldcart->totalQty;
        $this->totalPrice=$oldcart->totalPrice;
    }
}

public function add($item,$product_id){
    $storedItem=['Qty'=>0, 'product_id'=>0, 'product_name'=>$item->name, 'product_price'=>$item->price,
       'product_image'=>$item->image, 'item'=>$item ];

    if ($this->items){
          if (array_key_exists($product_id, $this->items)){
                $storedItem=$this->items[$product_id];
          }
    }

    $storedItem['Qty']++;
    $storedItem['product_id']=$product_id;
    $storedItem['product_price']=$item->price;
    $storedItem['product_image']=$item->image;
    $this->totalQty++;
    $this->totalPrice+=$item->price;
    $this->items[$product_id]=$storedItem;

}

public function update($quantity,$product_id){
    $storedItem=$this->items[$product_id];
    $oldQty=$storedItem['Qty'];
    $storedItem['Qty']= $quantity;
    $changeQty=$quantity-$oldQty;
    $this->totalQty+=$changeQty;
    $this->totalPrice+=$changeQty*$storedItem['product_price'];
    $this->items[$product_id]=$storedItem;
    }


    public function remove($product_id){
        $storedItem=$this->items[$product_id];
        $itemQty=$storedItem['Qty'];
        $this->totalQty-=$itemQty;
        $this->totalPrice-=$itemQty*$storedItem['product_price'];
        unset($this->items[$product_id]);
    }


}





