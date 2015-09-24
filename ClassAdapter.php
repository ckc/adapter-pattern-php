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
    public function sampleMethod1() {
        echo 'Adaptee sampleMethod1 <br />';
    }
}
 
/**
 * Class Adapter
 */
class Adapter extends Adaptee implements Target {
 
    /**
     * sampleMethod2 method without 源xClass, supplement here
     */
    public function sampleMethod2() {
        echo 'Adapter sampleMethod2 <br />';
    }
 
}
 
class Client {
 
    /**
     * Main program.
     */
    public static function main() {
        $adapter = new Adapter();
        $adapter->sampleMethod1();
        $adapter->sampleMethod2();
 
    }
 
}
 
Client::main();
?>