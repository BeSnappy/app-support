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
	 * Render a given file's content.
	 *
	 * @param  string  $__file
	 * @param  array   $__data
	 * @return string
	 */
	public function render($__file, array $__data = array())
	{
		ob_start(); extract($__data);

		include $__file; return ob_get_clean();
	}

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