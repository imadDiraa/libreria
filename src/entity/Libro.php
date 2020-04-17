<?php


namespace src\entity;


use Cassandra\Date;

class Libro implements \JsonSerializable
{
    /**
     * @var int $id_libro
     */
    protected int $id_libro;

    /**
     * @var string $titolo
     */
    protected $titolo;

    /**
     * @var string $autore
     */
    protected $autore;

    /**
     * @var string $nazione
     */
    protected $nazione;

    /**
     * @var string $lingua
     */
    protected $lingua;

    /**
     * @var int $pagine
     */
    protected int $pagine;

    /**
     * @var int $anno
     */
    protected int $anno;

    /**
     * @var string $copertina
     */
    protected $copertina;

    /**
     * @var float $prezzo
     */
    protected float $prezzo;

    /**
     * @var int $sconto
     */
    protected int $sconto;

    /**
     * @var int $id_reparto
     */
    protected int $id_reparto;

    /**
     * @var date $data_archiviazione
     */
     protected $data_archiviazione;

    /**
     * @return int
     */
    public function getIdLibro()
    {
        return $this->id_libro;
    }

    /**
     * @return string
     */
    public function getTitolo()
    {
        return $this->titolo;
    }

    /**
     * @param string $titolo
     */
    public function setTitolo($titolo)
    {
        $this->titolo = $titolo;
    }

    /**
     * @return string
     */
    public function getAutore()
    {
        return $this->autore;
    }

    /**
     * @param string $autore
     */
    public function setAutore($autore)
    {
        $this->autore = $autore;
    }

    /**
     * @return string
     */
    public function getNazione()
    {
        return $this->nazione;
    }

    /**
     * @param string $nazione
     */
    public function setNazione($nazione)
    {
        $this->nazione = $nazione;
    }

    /**
     * @return string
     */
    public function getLingua()
    {
        return $this->lingua;
    }

    /**
     * @param string $lingua
     */
    public function setLingua($lingua)
    {
        $this->lingua = $lingua;
    }

    /**
     * @return int
     */
    public function getPagine()
    {
        return $this->pagine;
    }

    /**
     * @param int $pagine
     */
    public function setPagine($pagine)
    {
        $this->pagine = $pagine;
    }

    /**
     * @return int
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * @param int $anno
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;
    }

    /**
     * @return string
     */
    public function getCopertina()
    {
        return $this->copertina;
    }

    /**
     * @param string $copertina
     */
    public function setCopertina($copertina)
    {
        $this->copertina = $copertina;
    }

    /**
     * @return float
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * @param float $prezzo
     */
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    /**
     * @return int
     */
    public function getSconto()
    {
        return $this->sconto;
    }

    /**
     * @param int $sconto
     */
    public function setSconto($sconto)
    {
        $this->sconto = $sconto;
    }

    /**
     * @return int
     */
    public function getIdReparto()
    {
        return $this->id_reparto;
    }

    /**
     * @param int $id_reparto
     */
    public function setIdReparto($id_reparto)
    {
        $this->id_reparto = $id_reparto;
    }

    /**
     * @return Date
     */
    public function getDataArchiviazione()
    {
        return $this->data_archiviazione;
    }

    /**
     * @param Date $data_archiviazione
     */
    public function setDataArchiviazione($data_archiviazione)
    {
        $this->data_archiviazione = $data_archiviazione;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}
