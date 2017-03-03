<?php

namespace Hackathon\LevelB;

class Redux
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Cette méthode ne prends rien en paramétre et retourne la reduction du nombre.
     *
     * @return string
     */
    public function getReductedNumber()
    {
        $this->number = array_sum(str_split($this->number));

        return $this->number > 9 ? $this->getReductedNumber() : $this->number;
    }
};
