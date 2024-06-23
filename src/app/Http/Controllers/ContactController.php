<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(Request $request)
  {
    $contact = $request->only(['name', 'gender','email', 'tel', 'address', 'building','content']);
      return view('confirm', compact('contact'));
  }

  public function store(Request $request)
  {
    $contact = $request->only(['name', 'gender','email', 'tel', 'address', 'building','content']);
    Contact::create($contact);
    return view('thanks');
  }
}
