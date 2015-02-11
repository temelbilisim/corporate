<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class UserCreateCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'user:create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create new user.';

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
		$username = $this->argument("username");
		$password = $this->argument("password");
		$email    = $this->argument("email");

		$user = new User;
		$user->username = $username;
		$user->password = Hash::make($password);
		$user->email    = $email;
		$user->save();

		$this->info($username." has been created!");
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('username', InputArgument::REQUIRED, 'Username'),
			array('password', InputArgument::REQUIRED, "Password"),
			array("email",    InputArgument::REQUIRED, "E-mail Address")
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}

}
