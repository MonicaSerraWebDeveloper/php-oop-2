<?php

trait Weight {
    protected $weight;

    public function getWeight() {
        return $this->weight;
    }

    public function setWeight($_weight) {
        $this->weight = $_weight;
    }
}

?>