<?php



class CarClass
{

    // if attributes are public, no need to get & set them
    private $reference;
    private $broken;
    private $brand;
    private $wheels = [];



    /**
     * CarClass constructor.
     * @param $reference
     * @param $broken
     * @param $brand
     * @param $wheels
     */

    public function constructCar($reference, $broken, $brand, array $wheels)
    {
        $this->reference = $reference;
        $this->broken = $broken;
        $this->brand = $brand;
        $this->wheels = $wheels;
    }


    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }


    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @return mixed
     */
    public function getBroken()
    {
        return $this->broken;
    }

    /**
     * @param mixed $broken
     */
    public function setBroken($broken)
    {
        $this->broken = $broken;
    }

    /**
     * @return mixed
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return array
     */
    public function getWheels()
    {
        return $this->wheels;
    }

    /**
     * @param array $wheels
     */
    public function setWheels($wheels)
    {
        $this->wheels = $wheels;
    }






    public function carRepair()
    {
        if ($this->getBroken()) {
            $this->setBroken(false);
        }
    }

    public function displayCarInfo(){
        $etat = $this->broken== true ? "oui" : "non";
        echo "Les infos de la voiture : <br/><br/> Référence : Voiture ".$this->reference." <br/> Cassée : ".$etat." <br/> Marque : ".$this->brand;
    }



}
