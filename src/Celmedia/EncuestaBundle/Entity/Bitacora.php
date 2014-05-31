<?php

namespace Celmedia\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bitacora
 */
class Bitacora
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $usuario;

    /**
     * @var integer
     */
    private $pregunta;

    /**
     * @var integer
     */
    private $respuesta;

    /**
     * @var integer
     */
    private $correcta;

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
     * Set usuario
     *
     * @param integer $usuario
     * @return Bitacora
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return integer 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set pregunta
     *
     * @param integer $pregunta
     * @return Bitacora
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return integer 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set respuesta
     *
     * @param integer $respuesta
     * @return Bitacora
     */
    public function setRespuesta($respuesta)
    {
        $this->respuesta = $respuesta;

        return $this;
    }

    /**
     * Get respuesta
     *
     * @return integer 
     */
    public function getRespuesta()
    {
        return $this->respuesta;
    }

    /**
     * Set correcta
     *
     * @param integer $correcta
     * @return Bitacora
     */
    public function setCorrecta($correcta)
    {
        $this->correcta = $correcta;

        return $this;
    }

    /**
     * Get correcta
     *
     * @return integer 
     */
    public function getCorrecta()
    {
        return $this->correcta;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Bitacora
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
     * @return Bitacora
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
     * @ORM\PrePersist
     */
    public function lifecycleFileUpload()
    {
        // Add your code here
    }
}
