<?php

declare(strict_types=1);

namespace Doctrine\ORM;

/**
 * @template T
 */
class Query extends AbstractQuery
{
	/**
	 * @return T
	 */
	public function getSingleResult($hydrationMode = null) {}

	/**
	 * @return T[]
	 */
	public function getArrayResult() {}

	/**
	 * @return T|T[]
	 */
	public function getResult($hydrationMode = self::HYDRATE_OBJECT) {}
}