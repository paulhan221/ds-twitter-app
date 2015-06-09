<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class PostTweet extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'tweet:post';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'post tweets';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->info('waka');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */


}
