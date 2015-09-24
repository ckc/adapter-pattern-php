<?php 
/**
 * Class Adapter PHP
 * @author ckc                                         
 */
 
/**
 * Target
 */
interface Target {
 
    /**
     * Method 1 also within 源Class
     */
    public function sampleMethod1();
 
    /**
     * Method 2 without 源Class
     */
    public function sampleMethod2(); 
}
 
/**
 * Adaptee 源
 */
class Adaptee {
 
    /**
     * Adaptee Class contains methods
     */
    public function sampleMethod1(){ 
        echo 'Adaptee sampleMethod1 <br />' ; 
    } 
}
 
/**
 * Adapter
 */
class Adapter implements Target {
 
    private  $_adaptee ;
 
    public  function __construct ( Adaptee $adaptee )  { 
        $this -> _adaptee =  $adaptee ; 
    }
 
    /**
     * Delegated calls Adaptee's sampleMethod1
     */ 
    public  function sampleMethod1 ( )  { 
        $this -> _adaptee -> sampleMethod1 ( ) ; 
    }
 
    /**
     * sampleMethod2 method without 源xClass, supplement here
     */
    public  function sampleMethod2 ( )  { 
        echo  'Adapter sampleMethod2 <br />' ; 
    }
 
}
 
class Client {
 
    /**
     * Main program.
     */ 
    public static function main ( )  { 
        $adaptee  =  new Adaptee ( ) ; 
        $adapter  =  new Adapter ( $adaptee ) ; 
        $adapter -> sampleMethod1 ( ) ; 
        $adapter -> sampleMethod2 ( ) ;
 
    }
 
}
 
Client :: main ( ) ; 
?>