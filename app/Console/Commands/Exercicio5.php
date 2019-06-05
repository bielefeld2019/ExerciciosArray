<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Exercicio5 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exercicio5';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Exercício 5, Peça para o usuário digitar uma data. Exiba
    separadamente o dia, o mês e o ano.';

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
        $data = [];
        $n = 0;
        
        if($n < 1){
            $data = $this->ask("Digite uma data");
            $n ++;
        }
        
        $i = explode('/', $data);
        
        $this->info("O dia foi ".$i[0]);
        $this->info("O mês foi ".$i[1]);
        $this->info("O ano foi ".$i[2]);

    }
}