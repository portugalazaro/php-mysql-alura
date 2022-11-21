<?php

class Artigo 
{
    private $conexao;

    public function __construct($mysql)
    {
        $this->conexao = $mysql;
    }

    public function get_artigos():array 
    {
        $sql = "SELECT * FROM `artigos`";
        $query = $this->conexao->query($sql);

        return $query->fetch_all(MYSQLI_ASSOC);

    }


    public function get_artigo($id_artigo):Array
    {

        $sql= $this->conexao->prepare("SELECT * FROM  artigos WHERE id= ?");
        $sql->bind_param('s', $id_artigo);
        $sql->execute();
        $artigo = $sql->get_result()->fetch_assoc();

        if(is_array($artigo)){
            return $artigo;
        }

        return [];
    }

    public function adicionar_artigo(Array $artigo):void
    {
        $sql = $this->conexao->prepare("INSERT INTO artigos (titulo, conteudo) VALUES (?,?);");
        $sql->bind_param('ss', $artigo['titulo'], $artigo['conteudo']);
        $sql->execute();
    }

    public function delete_artigo($id_artigo)
    {
        $sql = $this->conexao->prepare("DELETE FROM  `artigos` WHERE id= ?");
        $sql->bind_param('s', $id_artigo);
        $sql->execute();
    }


    public function update_artigo(Array $artigo):void 
    {
        $sql = $this->conexao->prepare("UPDATE artigos SET titulo = ?, conteudo = ? WHERE id = ? ");
        $sql->bind_param('sss', $artigo['titulo'], $artigo['conteudo'], $artigo['id']);

        $sql->execute();
    }

}