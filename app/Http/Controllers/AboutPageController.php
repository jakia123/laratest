<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    public function about() {
		
		$data['employees'] = ['Jakia', 'Ramananda', 'Tashlima', 'Samiul', 'Rashedul'];
		
		return view('about', $data);
	}
}
