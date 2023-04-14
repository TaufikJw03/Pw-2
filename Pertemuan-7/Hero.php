<?php
class Hero
{
    /**
     *Access modifier pada OOP ada 3:
     * 1. public : atribut atau method dapat di akses oleh siapapun
     * 2. private : atribut atau method hanha dapat diakses oleh class saat ini saja
     * 3. protected : mirip seperti private bedanya, dia dapat diakses pula oleh anak calssnya    
     */

    // attribute / property
    public $nama;
    public $health;
    public $damage;
    public $level = 1;
    public $xp = 0;

    // method yang dijalankan pertama kali object dibuat
    public function __construct($nama, $health, $damage)
    {
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }

    // method
    public function getInfo()
    {
        echo "<hr>Nama: " . $this->nama;
        echo "<br>HP: " . $this->health;
        echo "<br>Damage: " . $this->damage;
        echo "<br>XP: " . $this->xp;
        echo "<br>Level: " . $this->level;
    }

    // method untul naik1 level
    public function levelUp()
    {
        $this->level = $this->level + 1;
        $this->health = $this->health + 150;
        $this->damage = $this->damage + 45;


        // kurangi xp
        $this->xp = $this->xp - 100;
    }

    public function farming()
    {
        $this->xp = $this->xp + 55;
        echo "<br>-----$this->nama Telah Farming-----";
        if ($this->xp >= 100) {
            $this->levelUp();
        }
    }

    public function attack($target)
    {
        $target->health = $target->health - $this->damage;
    }
}

// membuat objek / instansiasi
$hero1 = new Hero("Alucard", 3200, 250);
$hero2 = new Hero("Franco", 5000, 50);

// panggil method pada object
echo $hero1->getInfo();
echo $hero2->getInfo();

$hero1->farming();
$hero2->farming();
$hero1->farming();
$hero2->farming();
$hero1->farming();
$hero2->farming();

$hero1->attack($hero2);

echo "<br>";
$hero1->getInfo();
$hero2->getInfo();

?>