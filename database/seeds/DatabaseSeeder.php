<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		 $this->call('PostsSeeder');
	}


}
class PostsSeeder extends Seeder{
	public function run()
	{
		DB::table('Posts')->delete();
		Post::create([
			'title' => 'First Post',
			'slug' => 'first post',
			'exept' => '<b>First post body</b>',
			'content' => '<b>Content First post body</b>',
			'published_up' => true,
//			'published' => DB::rav('NAV()'),// for data time
			'published' => '',
		]);
		Post::create([
			'title' => 'Second Post',
			'slug' => 'second post',
			'exept' => '<b>Second post body</b>',
			'content' => '<b>Content Second post body</b>',
			'published_up' => true,
//			'published' => DB::rav('NAV()'),// for data time
			'published' => '',
		]);
		Post::create([
			'title' => 'Third Post',
			'slug' => 'third post',
			'exept' => '<b>Third post body</b>',
			'content' => '<b>Content Third post body</b>',
			'published_up' => true,
//			'published' => DB::rav('NAV()'),// for data time
			'published' => '',
		]);
	}
}
