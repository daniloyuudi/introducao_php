<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Funcionario\EditorVideo;

class LeitorFuncionarios
{

    private $con;

    public function __construct()
    {
        $user = "root";
        $password = "123456";
        $database = "banco";
        $hostname = "localhost";
        $this->con = mysqli_connect( $hostname, $user, $password ) or die('Erro na conexão');
    }

    public function pegarTodosFuncionarios()
    {
        try {
            mysqli_select_db($this->con, 'banco');
            $query = "SELECT * FROM funcionario";
            $result = mysqli_query($this->con, $query);
            $array = [];

            if ($result) {
                while ($row = mysqli_fetch_array($result)) {
                    $cpf = new CPF($row["cpf"]);
                    $tipo = $row["tipo"];
                    switch ($tipo) {
                        case "1":
                            $desenvolvedor = new Desenvolvedor(
                                $row["nome"],
                                new CPF($row["cpf"]),
                                $row["salario"]
                            );
                            array_push($array, $desenvolvedor);
                        break;
                        case "2":
                            $diretor = new Diretor(
                                $row["nome"],
                                new CPF($row["cpf"]),
                                $row["salario"]
                            );
                            array_push($array, $diretor);
                        break;
                        case "3":
                            $editorVideo = new EditorVideo(
                                $row["nome"],
                                new CPF($row["cpf"]),
                                $row["salario"]
                            );
                            array_push($array, $editorVideo);
                        break;
                        case "4":
                            $gerente = new Gerente(
                                $row["nome"],
                                new CPF($row["cpf"]),
                                $row["salario"]
                            );
                            array_push($array, $gerente);
                        break;
                    }
                }
            }
            return $array;
        } catch(\Exception $e) {
            echo "<h3>" . $e->getMessage() . "</h3>";
            die();
        }
    }
}