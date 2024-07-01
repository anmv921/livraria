<?php

class Livro
{
    private $id_livro;
    private $fk_id_editora;
    private $fk_id_genero;
    private $titulo_livro;
    private $sinopse_livro;
    private $isbn_livro;
    private $preco_livro;
    private $stock_livro;
    private $num_pag_livro;
    private $act_livro;
    private $del_livro;
    private $ts_livro;
    private $capa_livro;

    public function __construct(
        $id_livro = null,
        $fk_id_editora,
        $fk_id_genero,
        $titulo_livro,
        $sinopse_livro,
        $isbn_livro,
        $preco_livro,
        $stock_livro,
        $num_pag_livro,
        $act_livro,
        $del_livro,
        $ts_livro,
        $capa_livro
    ) {
        $this->id_livro = $id_livro;
        $this->fk_id_editora = $fk_id_editora;
        $this->fk_id_genero = $fk_id_genero;
        $this->titulo_livro = $titulo_livro;
        $this->sinopse_livro = $sinopse_livro;
        $this->isbn_livro = $isbn_livro;
        $this->preco_livro = $preco_livro;
        $this->stock_livro = $stock_livro;
        $this->num_pag_livro = $num_pag_livro;
        $this->act_livro = $act_livro;
        $this->del_livro = $del_livro;
        $this->ts_livro = $ts_livro;
        $this->capa_livro = $capa_livro;
    }

    // ***************** //
    // Getters e setters //
    // ***************** //
    public function getId()
    {
        return $this->id_livro;
    }

    public function setId($id_livro)
    {
        $this->id_livro = $id_livro;
    }

    public function getIdEditora()
    {
        return $this->fk_id_editora;
    }

    public function setIdEditora($fk_id_editora)
    {
        $this->fk_id_editora = $fk_id_editora;
    }

    public function getIdGenero()
    {
        return $this->fk_id_genero;
    }

    public function setIdGenero($fk_id_genero)
    {
        $this->fk_id_genero = $fk_id_genero;
    }

    public function getTituloLivro()
    {
        return $this->titulo_livro;
    }

    public function setTituloLivro($titulo_livro)
    {
        $this->titulo_livro = $titulo_livro;
    }

    public function getSinopse()
    {
        return $this->sinopse_livro;
    }

    public function setSinopse($sinopse_livro)
    {
        $this->sinopse_livro = $sinopse_livro;
    }

    public function getISBN()
    {
        return $this->isbn_livro;
    }

    public function setISBN($isbn_livro)
    {
        $this->isbn_livro = $isbn_livro;
    }

    public function getPreco()
    {
        return $this->preco_livro;
    }

    public function setPreco($preco_livro)
    {
        $this->preco_livro = $preco_livro;
    }

    public function getStock()
    {
        return $this->stock_livro;
    }

    public function setStock($stock_livro)
    {
        $this->stock_livro = $stock_livro;
    }

    public function getNumPaginas()
    {
        return $this->num_pag_livro;
    }

    public function setNumPaginas($num_pag_livro)
    {
        $this->num_pag_livro = $num_pag_livro;
    }

    public function getAct()
    {
        return $this->act_livro;
    }

    public function setAct($act_livro)
    {
        $this->act_livro = $act_livro;
    }

    public function getDel()
    {
        return $this->del_livro;
    }

    public function setDel($del_livro)
    {
        $this->del_livro = $del_livro;
    }

    public function getTs()
    {
        return $this->ts_livro;
    }

    public function setTs($ts_livro)
    {
        $this->ts_livro = $ts_livro;
    }

    public function getCapa()
    {
        return $this->capa_livro;
    }

    public function setCapa($capa_livro)
    {
        $this->capa_livro = $capa_livro;
    }

    // ******************************** //
    // Guardar o livro na base de dados //
    // ******************************** //
    public function save($ligacao)
    {
        $sql = "INSERT INTO livros(
            fk_id_editora,
            fk_id_genero,
            titulo_livro,
            isbn_livro,
            sinopse_livro,
            preco_livro,
            stock_livro,
            num_pag_livro,
            capa_livro
        ) VALUES(
            $this->fk_id_editora,
            $this->fk_id_genero,
            '$this->titulo_livro',
            '$this->isbn_livro',
            '$this->sinopse_livro',
            $this->preco_livro,
            $this->stock_livro,
            $this->num_pag_livro,
            '$this->capa_livro'
        )";

        echo $sql;

        $ligacao->query($sql);
    } // End save

    public static function getLivros($ligacao) {
        $lista = [];

        $sql = "select * from livros";

        $resultado = $ligacao->query($sql);
        
        while ($linha = mysqli_fetch_assoc($resultado) )
        {
            $livro = new self(
                $linha['id_livro'],
                $linha['fk_id_editora'],
                $linha['fk_id_genero'],
                $linha['titulo_livro'],
                $linha['sinopse_livro'],
                $linha['isbn_livro'],
                $linha['preco_livro'],
                $linha['stock_livro'],
                $linha['num_pag_livro'],
                $linha['act_livro'],
                $linha['del_livro'],
                $linha['ts_livro'],
                $linha['capa_livro']
            );
            $lista[] = $livro;
        }
        return $lista;
    } // End getLivros

    public static function getLivroById($ligacao, $id) {
        $sql = "select * from livros where id_livro=$id";
        $resultado = $ligacao->query($sql);
        $linha = mysqli_fetch_assoc($resultado);
        $livro = new self(
            $linha['id_livro'],
            $linha['fk_id_editora'],
            $linha['fk_id_genero'],
            $linha['titulo_livro'],
            $linha['sinopse_livro'],
            $linha['isbn_livro'],
            $linha['preco_livro'],
            $linha['stock_livro'],
            $linha['num_pag_livro'],
            $linha['act_livro'],
            $linha['del_livro'],
            $linha['ts_livro'],
            $linha['capa_livro']
        );
        return $livro;
    }

} // End class Livro

