<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Exercicio2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exercicio2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exercício 2, Digite 5 números e verifique qual é o maior.';

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
        $maiorNumero = 0;

        while($n != 5){
            $num = $this->ask("Digite um número");
            $n++;
                
            if($num > $maiorNumero){
                $maiorNumero = $num;
            }
        }
            $this->info("O maior número foi o ".$maiorNumero);

    }
}
