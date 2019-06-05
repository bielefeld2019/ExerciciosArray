<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Exercicio3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exercicio3';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exercício 3, Peça ao usuário para digitar várias idades. Exiba quantas
    pessoas são maior de idade (18 anos) e quantas são
    menores. ';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $idades = [];
        $n = 0;
        $maioridade = 0;
        $menoridade = 0;

       
        while($n != 5){
            $idades = $this->ask("Digite um número");
            $n++;
                
            if($idades >= 18){
                $maioridade ++;
            }else{
                $menoridade++;
            }
        }
            $this->info("Exatamente ".$maioridade." pessoas possuem idade maior ou igual a 18 anos");
            $this->info("Exatamente ".$menoridade." pessoas possuem idade menor que 18 anos");

    }
}
