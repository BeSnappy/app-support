<?php namespace Snappy\Apps;

interface TicketRepliedHandler {

	/**
	 * Handle a ticket with a status that is now "replied".
	 *
	 * @param  array  $ticket
	 * @return void
	 */
	public function handleTicketReplied(array $ticket);

}