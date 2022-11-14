<?php
namespace Gaudileo\Poo2;

class Main
{
    Private Padre $objeto;

    public function main()
    {
        $this->objeto = new Padre();
        echo $this->objeto->hello();
        $this->objeto = new Hijo();
        echo $this->objeto->hello();
    }


}
