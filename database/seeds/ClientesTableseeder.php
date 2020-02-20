<?php

use Carbon\Traits\Timestamp;
use Illuminate\Database\Seeder;

class ClientesTableseeder extends Seeder
{

    public function run()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $date = date('Y-m-d H:i:s');

        $clientes = ['Lucas Alves', 'Miguel herreira', 'Davi souza', 'Arthur Benfica', 'Sophia cardoso', 'Alice da silva',
                    'Laura Miller', 'Rafael Borges', 'Enzo Henrique', 'Henrique fogaça', 'Murilo Campos', 'Caio Augusto', 'Vinicius Lima',
                    'Ana Luiza', 'João Kleber', 'Ana Beatriz', 'Larissa Manoela', 'Gabrielly Fernandes', 'João Vitor',
                'Eduardo Miguel', 'Heloísa Aparecida', 'Helena Maia', 'Julia Leal', 'Pedro Rocha', 'Carlos Maia', 'Bruno Morais','Lucas Martins', 
                'Miguel Avelar', 'Davi Golias', 'Arthur Maia', 'Sophia Analice', 'Alice Pereira', ];

        $vendedor = ['Pedro Alves', 'Marcos Souza', 'Suely Machado', 'fatima Dias', 'Gabriel Barbosa', ' Barabara Fagundes', 'Bernardo Martins',
                        'Julia Ferreira', ' Marcos Pereira', 'Paulo Silva', 'Rodrigo Castro', 'Marcelo Oliveira', 'Rodrigo Santana', 'Jão Moura',
                    'Leandro Meireles', 'Pedro Ferreira','Pedro Alves', 'Marcos Souza', 'Suely Machado', 'fatima Dias', 'Gabriel Barbosa', ' Barabara Fagundes', 'Bernardo Martins',
                    'Julia Ferreira', ' Marcos Pereira', 'Paulo Silva', 'Rodrigo Castro', 'Marcelo Oliveira', 'Rodrigo Santana', 'Jão Moura',
                'Leandro Meireles', 'Pedro Ferreira'];

        $descricao = ['Som automotivo', 'kit ferramentas', 'kit pneus', 'peças', 'carburador', 'kit embreagem',
                        'troca de oléo', 'balanceamento de rodas', 'step', 'bomba de gasolina',
                    'vidro elétrico', 'para-lama', 'caixa de som', 'lavagem a seco', 'Sensor de temperatura',
                    'Pinça de freio','Som automotivo', 'kit ferramentas', 'kit pneus', 'peças', 'carburador', 'kit embreagem',
                    'troca de oléo', 'balanceamento de rodas', 'step', 'bomba de gasolina',
                'vidro elétrico', 'para-lama', 'caixa de som', 'lavagem a seco', 'Sensor de temperatura',
                'Pinça de freio' ];

        for($i=0; $i<count($clientes); $i++){

            $dados = [
                'nome_cliente' => $clientes[$i],
                'nome_vendedor' => $vendedor[$i],
                'descricao' => $descricao[$i],
                'valor' => rand(50,800),
                'created_at' => $date,
                'updated_at' => $date
                
                
            ];

            DB::table('clientes')->insert($dados);
        }
        
    }
}
