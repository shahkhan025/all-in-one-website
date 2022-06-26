<?php


namespace App\classes;


class Calculator
{

    private $firstNumber;
    private $secondNumber;
    private $action;
    private $result;

    public function __construct($post = null)
    {
        $this->firstNumber = $post['first_number'];
        $this->secondNumber = $post['second_number'];
        $this->action = $post['action'];
    }

    public function myCalc()
    {
        if(isset($this->action))
        {
            switch ($this->action)
            {
                case '+':
                    $this->result = $this->firstNumber + $this->secondNumber;
                    break;

                case '-':
                    $this->result = $this->firstNumber - $this->secondNumber;
                    break;

                case '*':
                    $this->result = $this->firstNumber * $this->secondNumber;
                    break;

                case '/':
                    $this->result = $this->firstNumber / $this->secondNumber;
                    break;

                case '%':
                    $this->result = $this->firstNumber % $this->secondNumber;
                    break;
            }
            return $this->result;
        }
    }

}