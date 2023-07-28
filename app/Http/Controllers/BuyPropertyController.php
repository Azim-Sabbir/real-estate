<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BuyPropertyController extends Controller
{
    public function goToCartPage(Request $request, Property $property)
    {
        if (!$this->canBuyProperty($request)){
            Session::flash('warning', "you're not allowed to buy this property");
            return redirect('/');
        }

        $title = $property->title;
        $menu = 'category';

        return view(
            'frontend.buy-property',
            compact('property', "title", "menu")
        );
    }

    public function buyProperty(Request $request, Property $property)
    {
        if (!$this->canBuyProperty($request)){
            Session::flash('waring', "you're not allowed to buy this property");
            return redirect('/');
        }

        $property->sold_to = $request->session()->get('user')['id'];
        $property->save();

        Session::flash('success', 'Congratulations! You have successfully bought this property.');

        return redirect('/');
    }

    public function canBuyProperty(Request $request)
    {
        return $request->session()->get('user')['type'] === "U";
    }
}
