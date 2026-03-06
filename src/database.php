<?php
class DB
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('sqlite:database.sqlite');
    }

    public function livros($pesquisar = null)
    {
        $prepare = $this->db->prepare("select * from livros where titulo like :pesquisar");
        $prepare->bindValue(':pesquisar', "%$pesquisar%");
        $prepare->execute();
        $items = $prepare->fetchAll();
        return array_map(fn($item) => Livro::make($item), $items);
    }

    public function livro($id)
    {
        $sql = "select * from livros";
        if (!is_null($id)) {
            $sql .= " where id = $id";
        }

        $query = $this->db->query($sql);
        $items = $query->fetchAll();

        return array_map(fn($item) => Livro::make($item), $items)[0];
    }
}