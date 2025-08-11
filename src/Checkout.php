<?php

namespace FernandoEbert\Asaas;


class Checkout {

    public $http;

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }


    public function create(array $dados){
        return $this->http->post('/checkouts/', $dados);
    }

    public function cancel(string $id){
        return $this->http->post('/checkouts/'.$id.'/cancel',[]);
    }

}
