<?php


namespace src\entity;

class Categoria implements \JsonSerializable
{
    /**
     * @var int $id_reparto
     */
    protected int $id_reparto;

    /**
     * @var string $nome_reparto
     */
    protected $nome_reparto;

    
    /**
     * @return int
     */
    public function getIdReparto()
    {
        return $this->id_reparto;
    }

    /**
     * @return string
     */
    public function getNomeReparto()
    {
        return $this->nome_reparto;
    }

    /**
     * @param string $titolo
     */
    public function setNomeReparto($nome_reparto)
    {
        $this->nome_reparto = $nome_reparto;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
