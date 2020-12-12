<?php 
class Estado {

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
     * Get the value of UF
     * 
     * @param String
     * @return self
     */ 
    public function getUF()
    {
        return $this->$UF;
    }

    /**
     * Set the value of UF
     *
     */ 
    public function setUF($UF)
    {
        $this->UF = $UF;
    }
   
}

?>