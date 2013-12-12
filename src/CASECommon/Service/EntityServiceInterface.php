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
	 * @param array $conditions
	 */
	public function findBy(array $conditions);
	
	/**
	 * @param mixed $entity
	 */
	public function persist($entity);
	
	/**
	 * @param mixed $entity
	 */
	public function delete($entity);
}
