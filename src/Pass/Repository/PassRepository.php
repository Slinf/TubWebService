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
       return 1;
   }

}