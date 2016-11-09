<?php
namespace App\Users\Entity;
class User
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $age;
    protected $ville;
    protected $cp;
    protected $rue;

    public function __construct($id, $nom, $prenom, $age, $ville, $cp, $rue)
    {
        $this->id = $id;
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
        $this->ville=$ville;
        $this->cp=$cp;
        $this->rue=$rue;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setAge($age)
    {
        $this->age=$age;
    }
    public function setVille($ville)
    {
        $this->ville=$ville;
    }
    public function setCdp($cdp)
    {
        $this->cdp=$cdp;
    }
    public function setRue($rue)
    {
        $this->rue=$rue;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getVille()
    {
        return $this->ville;
    }
    public function getCp()
    {
        return $this->cp;
    }
    public function getRue()
    {
        return $this->rue;
    }
    public function toArray()
    {
        $array = array();
        $array['id'] = $this->id;
        $array['nom'] = $this->nom;
        $array['prenom'] = $this->prenom;
        $array['age'] = $this->age;
        $array['ville'] = $this->ville;
        $array['cp'] = $this->cp;
        $array['rue'] = $this->rue;
        return $array;
    }
}