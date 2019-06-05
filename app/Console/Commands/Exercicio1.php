<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Exercicio1 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exercicio1';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exercicio 1, Calcule a média de 10 números digitados pelo usuário.';

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
        $num = [];
        $n = 0;
        $numeros = 0;

        while($n != 10){
            $num = $this->ask("Digite um número");
            $numeros = $numeros + $num;
            $n++;
        }
        $media = $numeros / 10;
        $this->info("A média dos 10 números digitados foi de ".$media);       

    }
}
