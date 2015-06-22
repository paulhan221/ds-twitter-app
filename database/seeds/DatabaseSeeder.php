<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Hashtag;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		Hashtag::create(array('title'=> '1in3ofus'));
		Hashtag::create(array('title'=> 'notbreakingnews'));
		Hashtag::create(array('title'=> 'suspended4what'));
		Hashtag::create(array('title'=> 'miccheckracism'));
		Hashtag::create(array('title'=> 'teensforjeans'));
		Hashtag::create(array('title'=> 'thumbwars'));
		Hashtag::create(array('title'=> 'Apathysucks'));
		Hashtag::create(array('title'=> 'DoSomethingorg'));
	}

}
