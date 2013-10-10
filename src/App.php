<?php namespace Snappy\Apps;

abstract class App {

	/**
	 * The name of the application.
	 *
	 * @var string
	 */
	public $name;

	/**
	 * The application description.
	 *
	 * @var string
	 */
	public $description;

	/**
	 * The application's icon filename.
	 *
	 * @var string
	 */
	public $icon;

	/**
	 * The application author name.
	 *
	 * @var string
	 */
	public $author;

	/**
	 * The application author e-mail.
	 *
	 * @var string
	 */
	public $email;

	/**
	 * The settings required by the application.
	 *
	 * @var array
	 */
	public $settings = array();

	/**
	 * The configuration array.
	 *
	 * @var array
	 */
	protected $config;

	/**
	 * Set the config for the application instance.
	 *
	 * @param  array  $config
	 * @return void
	 */
	public function setConfig(array $config)
	{
		$this->config = $config;
	}

}