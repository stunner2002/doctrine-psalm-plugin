<?php
namespace Doctrine\ORM;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\Common\Collections\Selectable;

/**
 * @template T
 * @template-implements Selectable<int,T>
 * @template-implements ObjectRepository<T>
 */
class EntityRepository implements ObjectRepository, Selectable
{

    /** @var class-string<T> */
    protected $_entityName;

    /** @var EntityManagerInterface */
    protected $_em;

    /** @var Mapping\ClassMetadata */
    protected $_class;


    /** @param Mapping\ClassMetadata<T> $class */
    public function __construct(EntityManagerInterface $em, Mapping\ClassMetadata $class) {}

    /**
     * @param ?int $lockMode
     * @param ?int $lockVersion
     * @return ?T
     */
    public function find($id, $lockMode = null, $lockVersion = null) {}

    /** @return T[] */
    public function findAll() {}
    /**
     * @return T[]
     * @param ?int $limit
     * @param ?int $offset
     */
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null) {}

    /** @return ?T */
    public function findOneBy(array $criteria, ?array $orderBy = null) {}

	/**
	 * @param      $alias
	 * @param null $indexBy
	 *
	 * @return QueryBuilder<T>
	 */
	public function createQueryBuilder($alias, $indexBy = null) {}
}
