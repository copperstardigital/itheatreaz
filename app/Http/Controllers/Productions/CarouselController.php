<?php namespace App\Http\Controllers\Productions;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CarouselController extends Controller {

	public function index() {
        return view('productions.carousel');
    }

}
