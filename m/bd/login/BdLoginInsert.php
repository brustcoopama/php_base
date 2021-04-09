<?php

class BdLoginInsert extends Bd
{

    public static function start()
    {
        // Popular páginas para teste;
        Self::insertTest();

        return true;
    }

    /**
     * Insere páginas para teste.
     *
     * @return bool
     */
    public static function insertTest()
    {
        // Campos e valores.
        $register1 = [
            'matricula'  => '2108',
            'full_name'  => 'Mateus Rocha Brust',
            'first_name' => 'Mateus',
            'last_name'  => 'Brust',
            'email'      => 'mateus.brust@coopama.com.br',
            'user_name'  => 'mbrust',
            'senha'      => md5('123456'),
            'cpf'        => '10401141640',
            'telefone'   => '31993265491',
            'active'     => true,
            'id_status'  => '1',
            'obs'        => 'Login criado para teste.',
        ];
        $register2 = [
            'matricula'  => '2108',
            'full_name'  => 'João da silva',
            'first_name' => 'João',
            'last_name'  => 'da Silva',
            'email'      => 'joao.silva@coopama.com.br',
            'user_name'  => 'jsilva',
            'senha'      => md5('123456'),
            'cpf'        => '12312312312',
            'telefone'   => '35912341234',
            'active'     => true,
            'id_status'  => '1',
            'obs'        => 'Login criado para teste.',
            
        ];
        // Execução do insert.
        return Self::Insert('login', $register1);
        return Self::Insert('login', $register2);
    }
}
