<?php

namespace Celmedia\EncuestaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 */
class Pregunta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pregunta;

    /**
     * @var integer
     */
    private $orden;

    /**
     * @var integer
     */
    private $estado;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var \DateTime
     */
    private $updated;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $respuestas;

    /**
     * @var \Celmedia\EncuestaBundle\Entity\Trivia
     */
    private $trivia;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->respuestas = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set pregunta
     *
     * @param string $pregunta
     * @return Pregunta
     */
    public function setPregunta($pregunta)
    {
        $this->pregunta = $pregunta;

        return $this;
    }

    /**
     * Get pregunta
     *
     * @return string 
     */
    public function getPregunta()
    {
        return $this->pregunta;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Pregunta
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;

        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Pregunta
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Pregunta
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
     * @return Pregunta
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
     * Add respuestas
     *
     * @param \Celmedia\EncuestaBundle\Entity\Respuesta $respuestas
     * @return Pregunta
     */
    public function addRespuesta(\Celmedia\EncuestaBundle\Entity\Respuesta $respuestas)
    {
        $this->respuestas[] = $respuestas;

        return $this;
    }

    /**
     * Remove respuestas
     *
     * @param \Celmedia\EncuestaBundle\Entity\Respuesta $respuestas
     */
    public function removeRespuesta(\Celmedia\EncuestaBundle\Entity\Respuesta $respuestas)
    {
        $this->respuestas->removeElement($respuestas);
    }

    /**
     * Get respuestas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRespuestas()
    {
        return $this->respuestas;
    }

    /**
     * Set trivia
     *
     * @param \Celmedia\EncuestaBundle\Entity\Trivia $trivia
     * @return Pregunta
     */
    public function setTrivia(\Celmedia\EncuestaBundle\Entity\Trivia $trivia = null)
    {
        $this->trivia = $trivia;

        return $this;
    }

    /**
     * Get trivia
     *
     * @return \Celmedia\EncuestaBundle\Entity\Trivia 
     */
    public function getTrivia()
    {
        return $this->trivia;
    }
    /**
     * @ORM\PrePersist
     */
    public function lifecycleFileUpload()
    {
        // Add your code here
    }



    public function  __toString(){
        return "" . $this->pregunta ; 

    }


}
