<?php


class visitante
{
    private $conn;
    function __construct()
    {
        try
        {
            $this->conn = new PDO('');
        }
        catch(PDOException $e)
        {
            return 'ERRO: '. $e->getMessage();
        }
    }

    public function submitVisitorData($ip)
    {
        try
        {
            $SQL = "INSERT INTO VisitasFakeUpdate(ip) values ('".$ip."')";
            $con = $this->conn->prepare($SQL);
            if($con->execute())
            {
                return "Registro adicionado com sucesso!!!";
            }
            else
            {
                return ("Error ao adicionar novo registro: ").print_r($con->errorInfo());
            }
        }
        catch(PDOException $e)
        {
            return 'ERRO: '.$e->getMessage();
        }
    }
}