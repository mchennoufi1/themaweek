<?php

    class Person
    {
        public $naam;
        private $leeftijd;
        protected $geslacht;
        public $isStudent;
        public $gemiddeldCijfer;
        function __construct(string $naam,
        int $leeftijd, string $geslacht)
        {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->geslacht = $geslacht;
        echo "\n Nieuw Persoon-object aangemaakt";
        echo "\n De property naam is " . $this->naam;
        }
        function __destruct()
        {
            //voerhierdebenodigdeactiesuit;
            echo "\nPersoon object $this->naam wordt verwijderd";
        }

        function setGeslacht(string $geslacht)
        {
            $this->geslacht = $geslacht;
        }
        
        function getGeslacht()
        {
            return $this->geslacht;
        }
        function getGegevens(){
            $gegevens = 
            "\n De gegevens van " . $this->naam . "zijn: " . 
            "\nteeftijd: " . $this->leeftijd . 
            "\nGeslacht: " . $this->geslacht;
            return $gegevens;
        }
}
}

