<?php

declare(strict_types=1);

namespace Doctrine\ORM;

/**
 * Class QueryBuilder
 * @package Doctrine\ORM
 *
 * @template T
 */
class QueryBuilder
{
	/**
	 * @param class-string<T>   $from
	 * @param      				$alias
	 * @param null 				$indexBy
	 */
	public function from($from, $alias, $indexBy = null){}

	/**
	 * @return Query<T>
	 */
	public function getQuery() {}
}