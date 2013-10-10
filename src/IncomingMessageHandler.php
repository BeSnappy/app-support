<?php namespace Snappy\Apps;

interface IncomingMessageHandler {

	/**
	 * Handle an incoming message.
	 *
	 * @param  array  $message
	 * @return void
	 */
	public function handleIncomingMessage(array $message);

}