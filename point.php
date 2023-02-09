<?php

class Point{

    /** Kintamieji
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /** paima x reiksme
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /** nustato x reiksme
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /** paima y reiksme
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /** nustato y reiksme
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    /** atspauzdina graziai kordinates x ,y
     * @return string
     */
    public function __toString(): string
    {
        return '[ '."$this->x ".','."$this->y".' ]';
    }

    /** Paskaiciuoja atstuma nuo x=0,y=0 pradzios tasko
     * @return float
     */
    public function distanceFromOrigin(){
       return sqrt(pow($this->x,2)+pow($this->y,2));
    }

    /** pastumia  taska irasius kiek x reikia pastumti ir kiek y reikia pastumti
     * @param $px
     * @param $py
     * @return string
     */
    public function push($px,$py){

        return  '['.($this->x+=$px).','.($this->y+=$py).']';
    }
    //d=√((x2 – x1)² + (y2 – y1)²).

    /** suskaiciuoja atstuma tarp dvieju tasku
     * @param $cordinates
     * @return float
     */
    public function distance($cordinates){

        $result = sqrt(pow(($this->x - $cordinates->x),2) + pow(($this->y - $cordinates->y),2));



        return $result;
    }
    /** pakeicia kordinates */
    public function change($x,$y):void{
        $this->x=$x;
        $this->y=$y;
    }

}
?>

