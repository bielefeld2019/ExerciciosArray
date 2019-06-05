<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Exercicio4 extends Command
{
   
    protected $signature = 'Exercicio4';
    
    protected $description = 'Exercicio 4, – Peça ao usuário para digitar vários nomes. Exiba na tela
    todos os nomes digitados, porém de maneira invertida (do
    último para o primeiro).';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {   
        $nomes = [];
        $n = 0;
        $nome = "";
        
        while($n != 5){
            $nome = $this->ask("Digite um nome"); 
            array_push($nomes, $nome);
            $n ++;        
        }
                  
        $ordem = \implode(", ", array_reverse($nomes));
        $this->info($ordem);
       
    }
}