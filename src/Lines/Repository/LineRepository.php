<?php
namespace App\Lines\Repository;
use App\Lines\Entity\Line;
use Doctrine\DBAL\Connection;
/**
 * Line repository.
 */
class LineRepository
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
    * Returns a collection of line.
    *
    * @return array A collection of Lines, keyed by idStop.
    */
   public function getAll()
   {
       $queryBuilder = $this->db->createQueryBuilder();
       $queryBuilder
           ->select('*')
           ->from('Line','L');
       $statement = $queryBuilder->execute();
       $LinesData = $statement->fetchAll();
       foreach ($LinesData as $LineData) {
           $LinesBusList[$LineData['idStop']] = new Line($LineData['idStop'], $LineData['idLine'],$LineData['numLine'], $LineData['nameLine']);
       }
       return $LinesData;
   }

   /**
    * Returns an BusLine object.
    * @param $id
    *   The id of the Line to return.
    *
    * @return array A collection of Line, keyed by idStop.
    */
   public function getById($idStop)
   {
       $queryBuilder = $this->db->createQueryBuilder();
       $queryBuilder
           ->select('u.*')
           ->from('Line', 'u')
           ->where('idStop = ?')
           ->setParameter(0, $idArret);
       $statement = $queryBuilder->execute();
       $LineData = $statement->fetchAll();
       return new Line($LineData[0]['idStop'],$LineData[0]['idLine'],$LineData[0]['numLine'], $LineData[0]['nameLine']);
   }
}