<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SecretController extends Controller
{
    //
	public function secretPage() {
		return 'You are viewing a <strong>secret</strong> page';
	}

	public function showSecret() {
		$url = route('secret');
		$link = '<a href="'.$url.'">
					To Secret Page
				</a>';
		return $link;
		//return redirect() -> route('secret');
	}
}

?>
