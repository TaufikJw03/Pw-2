<?php
class Motor
{
    // attribute / property
    public $merk;
    public $bensin;
    public $topSpeed;
    public $cc;

    // method yang dijalankan pertama kali object dibuat

    public function __construct($merk, $bensin, $topSpeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
        $this->cc = $cc;
    }

    // method untul jalan yang menerima parameter jarak
    public function Jalan($jarak)
    {
        $bensinDibutuhkan = $jarak / 30;
        if ($bensinDibutuhkan <= $this->bensin) {
          $this->bensin -= $bensinDibutuhkan;
          echo "Motor $this->merk jalan sejauh $jarak km dengan menggunakan $bensinDibutuhkan liter bensin.<br>";
        } else {
          echo "Bensin tidak cukup untuk menempuh jarak $jarak km.<br>";
        }
      }
    }
    
    $motorSaya = new Motor("Honda", 5, 120, 150);
    $motorSaya->jalan(60);
    $motorSaya->jalan(100);
    
    
    
      $motor1 = new Motor('CRF', 5, 200, 1000);
      echo "Merk Motor: " . $motor1->merk . "<br/>";
      echo "Jarak Tempuh: 300km <br/>";
      echo $motor1->jalan(150);
?>