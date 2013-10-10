<?php namespace Snappy\Apps;

interface OutgoingMessageHandler {

	/**
	 * Handle an outgoing message.
	 *
	 * @param  array  $message
	 * @return void
	 */
	public function handleOutgoingMessage(array $message);

}