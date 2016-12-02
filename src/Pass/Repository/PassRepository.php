<?php
namespace App\Pass\Repository;
use App\Pass\Entity\Pass;
use Doctrine\DBAL\Connection;

/**
 * Pass repository.
 */
class PassRepository
{
    /**
     * @var \Doctrine\DBAL\Connection
     */
    protected $db;
    public function __construct(Connection $db)
    {
        $this->db = $db;
    }
    
   /**
    * Returns a collection of Pass.
    */
   public function AllPass()
   {
       $queryBuilder = $this->db->createQueryBuilder();
       $queryBuilder
           ->select('*')
           ->from('Pass','L');
       $statement = $queryBuilder->execute();
       $PasseData = $statement->fetchAll();
       foreach ($PasseData as $PassData) {
           $PassBusList[$PassData['idStop']] = new Pass($PassData['idStop'], $PassData['idPass'],$PassData['numLine'], $PassData['hour'],$PassData['previousPass'],$PassData['nextPass']);
       }
       return $PasseData;
   }
}