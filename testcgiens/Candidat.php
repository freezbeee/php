<?php

//class : designe la represntion d'un objet
class Candidat
{
  //le constructeur
  public function __construct(
    private string $nom,
    private int $age,
    private string $aime1,
    private string $aime2,
    private string $deteste,
    private string $reve,
  ) {
  }

  public function __toString(): string
  {
    // TODO: Implement __toString() method.
    return $this->nom . ' a ' . $this->age  . ' ans' .
      '<br> il adore  ' . $this->aime1 . ' et  ' .
      $this->aime2 . '<br>  mais deteste ' . $this->deteste . ', '
      . '<br> il reve de ' . $this->reve . ' <br><br><br>';
  }

  //accesseur et les mutateurs
  /**
   * @return string
   */
  public function getNom(): string
  {
    return $this->nom;
  }

  /**
   * @param string $nom
   * @return candidat
   */
  public function setNom(string $nom): candidat
  {
    $this->nom = $nom;
    return $this;
  }

  /**
   * @return int
   */
  public function getAge(): int
  {
    return $this->age;
  }

  /**
   * @param int $age
   * @return candidat
   */
  public function setAge(int $age): candidat
  {
    $this->age = $age;
    return $this;
  }

  /**
   * @return string
   */
  public function getAime1(): string
  {
    return $this->aime1;
  }

  /**
   * @param string $aime1
   * @return candidat
   */
  public function setAime1(string $aime1): candidat
  {
    $this->aime1 = $aime1;
    return $this;
  }

  /**
   * @return string
   */
  public function getAime2(): string
  {
    return $this->aime2;
  }

  /**
   * @param string $aime2
   * @return candidat
   */
  public function setAime2(string $aime2): candidat
  {
    $this->aime2 = $aime2;
    return $this;
  }

  /**
   * 
   */
  // public function getAge(): int
  // {
  //   return $this->age;
  // }

  // /**
  //  * @param int $age
  //  * @return candidat
  //  */
  // public function setAge(int $age): candidat
  // {
  //   $this->age = $age;
  //   return $this;
  // }

  /**
   * @return string
   */
  public function getDeteste(): string
  {
    return $this->deteste;
  }

  /**
   * @param string $deteste
   * @return candidat
   */
  public function setDeteste(string $deteste): candidat
  {
    $this->deteste = $deteste;
    return $this;
  }

  /**
   * Get the value of reve
   */
  public function getReve()
  {
    return $this->reve;
  }

  /**
   * Set the value of reve
   *
   * @return  self
   */
  public function setReve($reve)
  {
    $this->reve = $reve;

    return $this;
  }

  public function newReve()
  {
    # code...
    echo "Le nouveau reve de {$this->nom} est de {$this->reve}";
  }
  public function newAimer1()
  {
    # code...
    echo " {$this->nom} aime au final {$this->aime1}";
  }
}
  //les methodes perso
//   public function aboyer()
//   {
//     echo $this->nom . ' abboie sur le facteur <br>';
//   }

//   public function manger()
//   {
//     echo $this->nom . ' mange sa paté  <br>';
//   }

//   public function dormir()
//   {
//     echo $this->nom . ' dort dans sa niche  <br>';
//   }

//   public function mordre()
//   {
//     echo $this->nom . ' mord le facteur  <br>';
//   }
// }
