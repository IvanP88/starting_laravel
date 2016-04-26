<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;
use Carbon\Carbon;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Post $postModel)
	{
		$posts = $postModel->getPublishedPosts();
		return view('post.index', ['posts' => $posts]);
	}
	public function unpublished(Post $postModel)
	{
		$posts = $postModel->getUnPublishedPosts();
		return view('post.index', ['posts' => $posts]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('post.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Post $postModel, Request $request)
	{
//		dd($request->all());
		$_token= $request['_token'];
		$slug = $request['slug'];
		$title = $request['title'];
		$excerpt = $request['excerpt'];
		$content = $request['content'];
		if(isset($request['published']))
		{
			$published = 1;
		}
		else $published = 0;


		$post = new Post();
		$post->slug = $slug;
		$post->title = $title;
		$post->exept = $excerpt;
		$post->content = $content;
		$post->published = $published;

		$post->save();
		return redirect()->action('PostController@index');
//		return $postModel->getNumber();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
