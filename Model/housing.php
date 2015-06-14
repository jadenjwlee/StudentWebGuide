<?php

class House{
    
    private $id, $title, $address, $name, $tel, $email, $googlemap, 
           $occupancy_date, $status, $img, $description;
    
    public function __construct($id, $title, $address, $name, $tel, $email, 
                                $googlemap, $occupancy_date, $status, $img, 
                                $description ){
            $this->id            = $id;
            $this->title         = $title;
            $this->address       = $address;
            $this->name          = $name;
            $this->tel           = $tel;
            $this->email         = $email;
            $this->googlemap     = $googlemap;
            $this->occupancy_date= $occupancy_date;
            $this->status        = $status;
            $this->img           = $img; 
            $this->description   = $description;

     }
 
    public function getId(){
        return $this->id;
    }
    
    public function setId($value){
        $this->id=$value;
    }    
    
    public function getTitle(){   
        return $this->title;
    }
    
    public function setTitle($value){
        $this->title=$value;
    }
    
    public function getAddress(){
        return $this->address;
    }
    
    public function setAddress($value){
        $this->address=$value;
    }    

    public function getName(){
        return $this->name;
    }
    
    public function setName($value){
        $this->name=$value;
    }    

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($value){
        $this->tel=$value;
    }    
    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($value){
        $this->email=$value;
    }    

    public function getGooglemap(){
        return $this->googlemap;
    }
    
    public function setGooglemap($value){
        $this->googlemap=$value;
    }    

    public function getOccupancyDate(){
        return $this->occupancy_date;
    }
    
    public function setOccupancyDate($value){
        $this->occupancy_date=$value;
    }    

    public function getStatus(){
        return $this->status;
    }
    
    public function setStatus($value){
        $this->status=$value;
    }    

    public function getImg(){
        return $this->img;
    }
    
    public function setImg($value){
        $this->img=$value;
    }    
    public function getDescription(){
        return $this->description;
    }
    
    public function setDescription($value){
        $this->description=$value;
    }    
}
?>