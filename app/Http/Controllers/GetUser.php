<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use CArbon\Carbon;
use App\Models\Post;

use Illuminate\Http\Request;

class GetUser extends Controller {


	/**
	 * Display the specified resource.
	 *

	 * @return Response
	 */
	public function show(Post $usersModel)
	{
		$user = $usersModel->getAllUsers();
		return view('users.user', ['users' => $user]);
	}
}
