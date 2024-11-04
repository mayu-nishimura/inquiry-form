<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Category;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        $categories = Category::all();
        return view('index', compact('contacts', 'categories'));
    }

    public function store(ContactRequest $request) 
    {
        // 検証して、検証済みデータを送信する 
        $validated = $request->validated();

        // 電話番号の結合 
        $validated['tel'] = $validated['tel_1'] . '-' . $validated['tel_2'] . '-' . $validated['tel_3']; 
        // 不要な部分の削除 
        unset($validated['tel_1'], $validated['tel_2'], $validated['tel_3']); 

//        $contacts = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel_1', 'tel_2', 'tel_3', 'address', 'building', 'select', 'detail']); 

        //　データベースに生成
        Contact::create($validated); 

        return view('confirm', ['contacts' => $validated]);
    
    }
}
