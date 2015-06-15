<?php namespace App\Http\Controllers;

use App\Http\Requests;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Services\InstagramAPI;


class InstagramController extends Controller {
	protected $instagram;

	public function __construct(InstagramAPI $instagram)
	{
		$this->instagram = $instagram;
	}

	public function index()
	{
		$instagram = $this->instagram->getInstagram("apathysucks");

			dd($instagram->json());
	}

}
