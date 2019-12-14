<?php
namespace Rent\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Rent\Contact\Models\Contact;

class ContactController extends Controller {
    public function index() {
        return view('contact::contact');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::create( $data );

//        Mail::to(config('contact.email_send_to'))->send(new ContactMailable($data['message'], $data['name']));
    }
}