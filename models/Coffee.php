<?php
class Coffee {


    private $id;
    private $name;
    private $origin;
    private $description;
    private $price;

    private $tableName = 'coffee';

    public function __construct(){
        
    }



    /**
     * Method getName recupere l'id
     *
     * @return string 
     */
    public function getId(){
        return $this->id;
    } 

    
    /**
     * Method setId
     *
     * @param string $id id
     *
     * @return void
     */
    public function setId($id){
        $this->id = $id;
    } 


    /**
     * Method getName recupere le nom
     *
     * @return string 
     */
    public function getName(){
        return $this->name;
    } 

    
    /**
     * Method setName
     *
     * @param string $name nom
     *
     * @return void
     */
    public function setName($name){
        $this->name = $name;
    } 

    /**
     * Method getOrigin recupere l'origine
     *
     * @return string 
     */
    public function getOrigin(){
        return $this->origin;
    } 

    
    /**
     * Method setOrigin
     *
     * @param string $origin 
     *
     * @return void
     */
    public function setOrigin($origin){
        $this->origin = $origin;
    } 

    /**
     * Method getDescription recupere l'origine
     *
     * @return string 
     */
    public function getDescription(){
        return $this->description;
    } 

    
    /**
     * Method setDescription
     *
     * @param string $description 
     *
     * @return void
     */
    public function setDescription($description){
        $this->description = $description;
    } 

    /**
     * Method getPrice recupere le prix
     *
     * @return float 
     */
    public function getPrice(){
        return $this->price;
    } 

    
    /**
     * Method setPrice
     *
     * @param float $price 
     *
     * @return void
     */
    public function setPrice($price){
        $this->price = $price;
    } 

    public function getById($dbc, $id){

        $sQuery = 'SELECT * FROM '.$this->tableName.' WHERE id = :id';
        $aBindValue = array('id' => $id);

        $aOption = array(
            'class'     => __CLASS__,
            'result'    => 'fetch'
        );

        return $dbc->read($sQuery, $aOption, $aBindValue );
    }

    public function getList($dbc){

        $sQuery = 'SELECT * FROM '.$this->tableName;

        $aOption = array(
            'class'     => __CLASS__,
            'result'    => 'fetchAll'
        );


        return $dbc->read($sQuery, $aOption);
    }
    

    public function update($dbc, $aData){

        $sQuery = 'UPDATE '.$this->tableName.' SET name = :name, origin = :origin, description = :description, price =:price WHERE id = :id' ;
        
        return $dbc->write($sQuery, $aData);
    }

    public function insert($dbc, $aData){

       
        $sQuery = 'INSERT INTO '.$this->tableName.' SET name = :name, origin = :origin, description = :description, price =:price' ;
  
        return $dbc->write($sQuery, $aData);
    }

    public function delete($dbc, $aData){

       
        $sQuery = 'DELETE FROM '.$this->tableName.' WHERE id = :id' ;
  
        return $dbc->write($sQuery, $aData);
    }
    

}