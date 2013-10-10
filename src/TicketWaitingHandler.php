<?php namespace Snappy\Apps;

interface TicketWaitingHandler {

	/**
	 * Handle a ticket with a status that is now "waiting".
	 *
	 * @param  array  $ticket
	 * @return void
	 */
	public function handleTicketWaiting(array $ticket);

}