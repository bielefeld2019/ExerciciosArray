<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Livro3 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'livro3';

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
        "id" => 1,
        "nome" => "Autor 1"
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
                        'titulos' => 0,
                        'qnt_estoque' => 0
                    ]);
                }
         

        }

        foreach ($livros as $livro ){
            foreach($dados as $index => $dado){
                if($livro['autor']['nome'] == $dado['autor']){
                    $dados[$index]['titulos'] += 1;
                    $dados[$index]['qnt_estoque'] += $livro['qtde_estoque'];

                }
            }
        }
        
        print_r($livros);
        $this->table(["Autor", "Títulos", "Quantidade no estoque"], $dados);
       
}
}