<?php


namespace App\classes;


class Series
{

    public $startingNumber;
    public $endingNumber;
    public $result='';
    private $resultIndex=0;

    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
    }


    public function mySeries()
    {
        for ($this->startingNumber; $this->startingNumber<=$this->endingNumber; $this->startingNumber++)
        {
            $this->result.= ' '.$this->startingNumber;
        }
        return $this->result;
    }

}