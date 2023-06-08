<?php
namespace   App\Model ;

use Core\model;

class pages extends model {

public function getpage($where=[]) {
   $query  = $this->SELECT($where);
   $query = $this->Query_runner($query);
   return  $this->Fetchassoc($query);
} 
}
