<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Livro4 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'livro4';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $livros = [
            [
            "nome" => 'livro 1',
            "qtde_estoque" => 2,
            "preco" => 50,
            "genero" => [
            "id" => 1,
            "nome" => "terror"
            ],
            "autor" => [
            "id" => 2,
            "nome" => "Autor 2"
            ]
            ],
            [
            "nome" => 'livro 2',
            "qtde_estoque" => 5,
            "preco" => 15,
            "genero" => [
            "id" => 1,
            "nome" => "terror"
            ],
            "autor" => [
            "id" => 2,
            "nome" => "Autor 2"
            ]
            ],
            [
            "nome" => 'livro 3',
            "preco" => 25,
            "qtde_estoque" => 4,
            "genero" => [
            "id" => 2,
            "nome" => "aventura"
            ],
            "autor" => [
            "id" => 2,
            "nome" => "Autor 2"
            ]
            ],
            [
            "nome" => 'livro 4',
            "qtde_estoque" => 1,
            "preco" => 100,
            "genero" => [
            "id" => 3,
            "nome" => "romance"
            ],
            "autor" => [
            "id" => 1,
            "nome" => "Autor 1"
            ]
            ],
            [
            "nome" => 'livro 5',
            "qtde_estoque" => 0,
            "preco" => 12.5,
            "genero" => [
            "id" => 3,
            "nome" => "romance"
            ],
            "autor" => [
            "id" => 2,
            "nome" => "Autor 2"
            ]
            ],
            [
            "nome" => 'livro 6',
            "qtde_estoque" => 10,
            "preco" => 8,
            "genero" => [
            "id" => 2,
            "nome" => "aventura"
            ],
            "autor" => [
            "id" => 1,
            "nome" => "Autor 1"
            ]
            ]
            ];

            $dados = [];
            $autores = [];
            
            foreach ($livros as $index => $livro){
    
                    if(!in_array($livro['autor']['nome'], $autores)){
                        array_push($autores, $livros[$index]['autor']['nome']);
                        array_push($dados, [
                            'autor' => $livros[$index]['autor']['nome'],
                            'qnt_genero' => 0,
                        ]);
                    }
            }
    
            foreach ($livros as $livro ){
                foreach($dados as $index => $dado){
                    if($livro['autor']['nome'] == $dado['autor'] && !$livro['genero']['id'] == $dado['genero']){
                        $dados[$index]['qnt_genero'] += 1;  
                        
                    }
                }
            }
            
            print_r($livros);
            $this->table(["Autor", "Generos"], $dados);

    }
}
