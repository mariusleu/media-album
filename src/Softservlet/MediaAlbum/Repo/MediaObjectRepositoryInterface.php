<?php namespace Softservlet\MediaAlbum\Repo;

/**
 * @author Marius Leustean <marius@softservlet.com>
 *
 * @version 1.0
 */

interface MediaObjectRepositoryInterface
{
	/**
	 * @brief get media object by id
	 *
	 * @return array of MediaObjectInterface
	 */
	public function byId();

	/**
	 * @brief create new media object
	 *
	 * @param string uri
	 *
	 * @return MediaObjectInterface instance
	 */
	public function create($uri);
}
