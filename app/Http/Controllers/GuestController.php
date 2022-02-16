<?php

namespace App\Http\Controllers;
use App\Postcard;
use Illuminate\Http\Request;


class GuestController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    public function postcardCreate(){
        return view('pages.create');
    }
    public function postcardStore(Request $request) {

        $data = $request -> validate([
            
            'sender' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'text' => 'required|string',
            'image' => 'image'
        ]);
        $imageFile = $data['image'];
        $imageName = rand(100000, 999999) . '_' . time() . '.' . $imageFile -> getClientOriginalExtension() ;

        $imageFile -> storeAs('/postcards/', $imageName, 'public');
        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

        return redirect() -> route('home');
        

    }
}
