<?php

namespace Celmedia\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 */
class Estado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $modo;

    /**
     * @var string
     */
    private $listo;

    /**
     * @var string
     */
    private $accion;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set modo
     *
     * @param string $modo
     * @return Estado
     */
    public function setModo($modo)
    {
        $this->modo = $modo;

        return $this;
    }

    /**
     * Get modo
     *
     * @return string 
     */
    public function getModo()
    {
        return $this->modo;
    }

    /**
     * Set listo
     *
     * @param string $listo
     * @return Estado
     */
    public function setListo($listo)
    {
        $this->listo = $listo;

        return $this;
    }

    /**
     * Get listo
     *
     * @return string 
     */
    public function getListo()
    {
        return $this->listo;
    }

    /**
     * Set accion
     *
     * @param string $accion
     * @return Estado
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get accion
     *
     * @return string 
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Estado
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Estado
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }
    /**
     * @var integer
     */
    private $puntaje;


    /**
     * Set puntaje
     *
     * @param integer $puntaje
     * @return Estado
     */
    public function setPuntaje($puntaje)
    {
        $this->puntaje = $puntaje;

        return $this;
    }

    /**
     * Get puntaje
     *
     * @return integer 
     */
    public function getPuntaje()
    {
        return $this->puntaje;
    }
}
