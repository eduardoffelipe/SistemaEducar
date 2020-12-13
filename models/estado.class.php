<?php 
class Estado {

    private $idEstado;
    private $UF; 
  

    // ---- CONSTRUCTOR ---- // 

    /**
     * Class constructor.
     */
    public function __construct($UF)
    {
        $this->UF = $UF;
    }

    
    // ---- GETTERS AND SETTERS ---- // 

    /**
     * Get the value of idEstado
     * 
     * @return self
     */ 
    public function getId()
    {
        return $this->$idEstado;
    }


    /**
     * Get the value of UF
     * 
     * @return self
     */ 
    public function getUF()
    {
        return $this->$UF;
    }

    /**
     * Set the value of UF
     * 
     * @param String
     *
     */ 
    public function setUF($UF)
    {
        $this->UF = $UF;
    }
   
}

?>