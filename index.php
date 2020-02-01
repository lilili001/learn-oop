<?php

$orders = [[
    'id'     => 1,
    'user_id'=> 1,
    'number' => '13472740888',
    'status' => 0,
    'fee'    => 10,
    'discount'=>44,
    'order_products' => [
        ['order_id' => 1,'product_id'=>1,'param'=>'6寸','price'=>555.00],
        ['order_id' => 1,'product_id'=>1,'param'=>'5寸','price'=>333.00],
    ]
]];

var_dump(collect($orders)->map(function($order){
    return $order;
})->flatten(1));