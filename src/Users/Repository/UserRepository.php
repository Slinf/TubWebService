<?php
namespace App\Users\Repository;
use App\Users\Entity\User;
use Doctrine\DBAL\Connection;
/**
 * User repository.
 */
class UserRepository
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
           $LinesBusList[$LineData['idArret']] = new User($LineData['idArret'], $LineData['nomArret'], $LineData['numLigne'], $LineData['nomLigne'], $LineData['latitude'], $LineData['longitude']);
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
       return new User($LineData[0]['idArret'],$LineData[0]['nomArret'],$LineData[0]['numLigne'], $LineData[0]['nomLigne'], $LineData[0]['latitude'], $LineData[0]['longitude']);
   }
}