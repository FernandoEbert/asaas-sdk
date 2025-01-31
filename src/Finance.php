<?php

<<<<<<< HEAD
namespace FernandoEbert\Asaas;

/**
 * Finance [ MODEL ]
 * Classe responsavel por trazer os dados financeiros da conta
 *
 * @copyright (c) year, Fernando Ebert fernando@fernandoebert.com.br @FernandoEbert
 */

class Finance {

    public $http;
=======
namespace CodePhix\Asaas;

use CodePhix\Asaas\Connection;
use \Exception;

class Finance
{
    public $http;
    protected $cobranca;
>>>>>>> 8eabe3baacebb2e0047663ef3c087a47fdd0c8c1

    public function __construct(Connection $connection)
    {
        $this->http = $connection;
    }

<<<<<<< HEAD
    public function balance()
    {
        return $this->http->get("/finance/balance");
=======
    // Retorna a listagem de cobranças
    public function getBalance()
    {
        return $this->http->get('/finance/balance');
    }

    // Retorna os dados da cobrança de acordo com o Id
    public function getPaymentStatistics(array $filtros = [])
    {
        $filtros = http_build_query($filtros);
        return $this->http->get('/finance/payment/statistics?'.$filtros);
    }

    // Retorna os dados da cobrança de acordo com o Id
    public function getSplitStatistics()
    {
        return $this->http->get('/finance/split/statistics?');
>>>>>>> 8eabe3baacebb2e0047663ef3c087a47fdd0c8c1
    }

}
