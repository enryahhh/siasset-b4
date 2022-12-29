<?php

namespace App\Support;

class GeneratePrimaryHelper {
    private $type;
    private $lastId;
    public $kode;
    private $val = 1;

    public function __construct($type,$id){
        $this->type = $type;
        $this->lastId = $id;
    }

    public function createCode(){
        
        if($this->lastId != null){
            if($this->type == "KT"){
                $typeId = $this->lastId->id_kategori;
            }else if($this->type == "MK"){
                $typeId = $this->lastId->id_merek;
            }else if($this->type == "IN"){
                $typeId = $this->lastId->id_inventaris;
            }
            
            $angkaIdLast = substr($typeId,2);
            $this->val = intval($angkaIdLast) + 1;
           }
   
           $this->kode = $this->type.str_pad($this->val,3,'0',STR_PAD_LEFT);
        return $this->kode;
    }
}

?>