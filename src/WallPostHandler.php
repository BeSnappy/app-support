<?php namespace Snappy\Apps;

interface WallPostHandler {

	/**
	 * Handle the creation of a new wall post.
	 *
	 * @param  array  $post
	 * @return void
	 */
	public function handleWallPost(array $post);

}