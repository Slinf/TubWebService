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
    * Returns a collection of ligne.
    *
    * @return array A collection of Lines, keyed by idArret.
    */
   public function getAll()
   {
       $queryBuilder = $this->db->createQueryBuilder();
       $queryBuilder
           ->select('*')
           ->from('Ligne','L');
       $statement = $queryBuilder->execute();
       $LinesData = $statement->fetchAll();
       foreach ($LinesData as $LineData) {
           $LinesBusList[$LineData['idArret']] = new Line($LineData['idArret'], $LineData['idLigne'],$LineData['numLigne'], $LineData['nomLigne']);
       }
       return $LinesData;
   }

   /**
    * Returns an BusLine object.
    * @param $id
    *   The id of the Line to return.
    *
    * @return array A collection of Line, keyed by idArret.
    */
   public function getById($idArret)
   {
       $queryBuilder = $this->db->createQueryBuilder();
       $queryBuilder
           ->select('u.*')
           ->from('Ligne', 'u')
           ->where('idArret = ?')
           ->setParameter(0, $idArret);
       $statement = $queryBuilder->execute();
       $LineData = $statement->fetchAll();
       return new Line($LineData[0]['idArret'],$LineData[0]['idLigne'],$LineData[0]['numLigne'], $LineData[0]['nomLigne']);
   }
}