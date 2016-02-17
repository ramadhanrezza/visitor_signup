<?php
namespace App\Http\Controllers;

use App\Visitors;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller {
    protected $visitors;

    public function __construct(Visitors $visitors) {
        $this->visitors = $visitors;
    }

    public function index() {
        return view('home.index');
    }

    public function doSignup(Request $request) {
        $data = Input::all();

        $rules = array(
            'name'  => 'required|alpha|max:255',
            'email'  => 'required|email|max:255|unique:visitors',
            'phone'  => 'required',
            'occupation'  => 'required'
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            return Redirect::to('/')->withInput()->withErrors($validator->messages());
        } else {
            $visitors = new Visitors;
            $visitors->name = $data['name'];
            $visitors->email = $data['email'];
            $visitors->phone = $data['phone'];
            $visitors->occupation = $data['occupation'];
            $visitors->save();

            return Redirect::to('/');
        }
    }
}