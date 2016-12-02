<?php
namespace App\Stops\Repository;
use App\Stops\Entity\Stop;
use Doctrine\DBAL\Connection;

/**
 * Stop repository.
 */
class StopRepository
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
    * Returns a collection of Stops.
    *
    * @return array A collection of Stops, keyed by idArret.
    */
   public function BusStops()
   {
       $queryBuilder = $this->db->createQueryBuilder();
       $queryBuilder
           ->select('*')
           ->from('Stop','A');
       $statement = $queryBuilder->execute();
       $StopsData = $statement->fetchAll();
       foreach ($StopsData as $StopData) {
           $StopsBusList[$StopData['idStop']] = new Stop($StopData['idStop'], $StopData['nameStop'],$StopData['latitude'], $StopData['longitude']);
       }
       return $StopsData;
   }

}