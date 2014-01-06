<?php

namespace CASECommon\Service;
/**
 * 
 * @author CASE
 *
 */
interface EntityServiceInterface {
	
	/**
	 * @param $entityManager
	 */
	public function setEntityManager($entityManager);
	
	/**
	 * @param mixed $id
	 */
	public function findById($id);
	
	/**
	 * Return a collection of entities filtered by certain conditions
	 * in certain order
	 * @param array $conditions ['id'=>150, name'=>'John']
	 * @param array $order  as ['name'=>'ASC', 'created'=>'DESC'] 
     * @param int|null   $limit
     * @param int|null   $offset
	 */
	public function findBy(array $conditions, array $order = [],  $limit = null, $offset = null);
	
	/**
	 * @param mixed $entity
	 */
	public function persist($entity);
	
	/**
	 * @param mixed $entity
	 */
	public function delete($entity);
}
