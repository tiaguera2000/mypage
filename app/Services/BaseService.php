<?php

namespace App\Services;

    class BaseService{

        public function all(){

            $models = $this->repository->all();
            return $models; 
        }
    }

?>