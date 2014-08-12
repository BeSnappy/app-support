<?php namespace Snappy\Apps;

interface TagsChangedHandler {

	/**
	 * Handle the creation of a new contact.
	 *
	 * @param  array  $ticket
	 * @param  array  $added
	 * @param  array  $removed
	 * @return void
	 */
	public function handleTagsChanged(array $ticket, $message = null, array $added, array $removed);

}