<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = [
            [
                "image" => "1.png",
                "itemName" => "Margherita Pizza",
                "price" => "11.2",
                "description" => "A classic Margherita pizza topped with ripe tomatoes and fresh mozzarella."
            ],
            [
                "image" => "2.jpg",
                "itemName" => "Cheese Platter",
                "price" => "15.99",
                "description" => "A delightful cheese platter featuring a variety of fine cheeses."
            ],
            [
                "image" => "3.png",
                "itemName" => "Spaghetti Bolognese",
                "price" => "11.99",
                "description" => "A mouthwatering plate of spaghetti served with rich Bolognese sauce."
            ],
            [
                "image" => "4.png",
                "itemName" => "Veggie Wrap",
                "price" => "6.99",
                "description" => "A wholesome veggie wrap filled with fresh vegetables and your choice of dressing."
            ],
            [
                "image" => "5.png",
                "itemName" => "Sushi Platter",
                "price" => "17.99",
                "description" => "An assortment of delicious sushi rolls, perfect for sushi enthusiasts."
            ],
            [
                "image" => "6.png",
                "itemName" => "Greek Salad",
                "price" => "7.99",
                "description" => "A classic Greek salad with fresh cucumbers, tomatoes, olives, and feta cheese."
            ],
            [
                "image" => "7.png",
                "itemName" => "Chicken Alfredo",
                "price" => "13.99",
                "description" => "Tender chicken in a creamy Alfredo sauce, seasoned with garlic and Parmesan cheese."
            ],
            [
                "image" => "8.png",
                "itemName" => "Chocolate Brownie",
                "price" => "4.99",
                "description" => "Indulge in a decadent chocolate brownie, a sweet treat for your taste buds."
            ]
        ];

        return view('menu', compact('menuItems'));
    }
}
