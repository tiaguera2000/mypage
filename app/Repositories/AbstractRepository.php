<?php

namespace  App\Repositories;

    class AbstractRepository{

        protected $model;

        public function __construct($model)
        {
            $this->model = $model;
        }

        public function all(){

            return $this->model->all();
        }
    }

?>