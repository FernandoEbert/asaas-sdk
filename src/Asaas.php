<?php

namespace FernandoEbert\Asaas;

/**
 *
 */
class Asaas {

    /**
     * @var Cidades
     */
    public $cidade;
    /**
     * @var Assinatura
     */
    public $assinatura;
    /**
     * @var Cliente
     */
    public $cliente;
    /**
     * @var Cobranca
     */
    public $cobranca;
    /**
     * @var LinkPagamento
     */
    public $LinkPagamento;
    /**
     * @var Notificacao
     */
    public $notificacao;
    /**
     * @var Transferencia
     */
    public $transferencia;
    /**
     * @var Webhook
     */
    public $webhook;
    /**
     * @var Antecipacao
     */
    public $antecipacao;
    /**
     * @var Extrato
     */
    public $extrato;
    /**
     * @var Finance
     */
    public $finance;
    /**
     * @var CreditCard
     */
    public $creditCard;
    /**
     * @var PagarConta
     */
    public $pagarconta;
    /**
     * @var NotaFiscal
     */
    public $NotaFiscal;
    /**
     * @var MinhaConta
     */
    public $MinhaConta;
    /**
     * @var InformacoesFiscais
     */
    public $InformacoesFiscais;
    /**
     * @var ConsultaSerasa
     */
    public $ConsultaSerasa;
    /**
     * @var Pix
     */
    public $Pix;
    /**
     * @var Parcelamento
     */
    public $Parcelamento;
    /**
     * @var Conta
     */
    public $Conta;
    /**
     * @var Finance
     */
    public $Finance;
    /**
     * @var SubContas
     */
    public $SubContas;

    /**
     * @var Connection
     */
    private $connection;

    /**
     * @param $token
     * @param bool $status
     */
    public function __construct($token, bool $status = false)
    {
        $this->connection = new Connection($token, ((!empty($status)) ? $status : 'producao'));
        $this->assinatura           = new Assinatura($this->connection);
        $this->cidade               = new Cidades($this->connection);
        $this->cliente              = new Cliente($this->connection);
        $this->cobranca             = new Cobranca($this->connection);
        $this->LinkPagamento        = new LinkPagamento($this->connection);
        $this->notificacao           = new Notificacao($this->connection);
        $this->transferencia        = new Transferencia($this->connection);
        $this->extrato              = new Extrato($this->connection);
        $this->finance               = new Finance($this->connection);
        $this->antecipacao          = new Antecipacao($this->connection);
        $this->pagarconta           = new PagarConta($this->connection);
        $this->NotaFiscal           = new NotaFiscal($this->connection);
        $this->MinhaConta           = new MinhaConta($this->connection);
        $this->InformacoesFiscais   = new InformacoesFiscais($this->connection);
        $this->ConsultaSerasa       = new ConsultaSerasa($this->connection);
        $this->webhook              = new Webhook($this->connection);
        $this->Pix                  = new Pix($this->connection);
        $this->Parcelamento         = new Parcelamento($this->connection);
        $this->Conta                = new Conta($this->connection);
        $this->Finance              = new Finance($this->connection);
        $this->SubContas            = new SubContas($this->connection);
        $this->creditCard           = new CreditCard($this->connection);
    }

    /**
     * @return CreditCard
     */
    public function creditCard(): CreditCard
    {
        $this->creditCard = new CreditCard($this->connection);
        return $this->creditCard;
    }

    /**
     * @return Assinatura
     */
    public function Assinatura(): Assinatura
    {
        $this->assinatura  = new Assinatura($this->connection);
        return $this->assinatura;
    }

    /**
     * @return Pix
     */
    public function Pix(): Pix
    {
        $this->Pix  = new Pix($this->connection);
        return $this->Pix;
    }

    /**
     * @return Parcelamento
     */
    public function Parcelamento(): Parcelamento
    {
        $this->Parcelamento  = new Parcelamento($this->connection);
        return $this->Parcelamento;
    }

    /**
     * @return Cidades
     */
    public function Cidade(): Cidades
    {
        $this->cidade = new Cidades($this->connection);
        return $this->cidade;
    }

    /**
     * @return Cliente
     */
    public function Cliente(): Cliente
    {
        $this->cliente     = new Cliente($this->connection);
        return $this->cliente;
    }

    /**
     * @return Cobranca
     */
    public function Cobranca(): Cobranca
    {
        $this->cobranca    = new Cobranca($this->connection);
        return $this->cobranca;
    }

    /**
     * @return LinkPagamento
     */
    public function LinkPagamento(): LinkPagamento
    {
        $this->LinkPagamento    = new LinkPagamento($this->connection);
        return $this->LinkPagamento;
    }

    /**
     * @return Notificacao
     */
    public function Notificacao(): Notificacao
    {
        $this->notificacao = new Notificacao($this->connection);
        return $this->notificacao;
    }

    /**
     * @return Transferencia
     */
    public function Transferencia(): Transferencia
    {
        $this->transferencia = new Transferencia($this->connection);
        return $this->transferencia;
    }

    /**
     * @return Extrato
     */
    public function Extrato(): Extrato
    {
        $this->extrato = new Extrato($this->connection);
        return $this->extrato;
    }

    /**
     * @return Finance
     */
    public function finance(): Finance
    {
        $this->finance = new Finance($this->connection);
        return $this->finance;
    }

    /**
     * @return Finance
     */
    public function InformacoesFinanceiras(): Finance
    {
        return $this->finance();
    }

    /**
     * @return Antecipacao
     */
    public function Antecipacao(): Antecipacao
    {
        $this->antecipacao = new Antecipacao($this->connection);
        return $this->antecipacao;
    }

    /**
     * @return PagarConta
     */
    public function PagarConta(): PagarConta
    {
        $this->pagarconta = new PagarConta($this->connection);
        return $this->pagarconta;
    }

    /**
     * @return NotaFiscal
     */
    public function NotaFiscal(): NotaFiscal
    {
        $this->NotaFiscal = new NotaFiscal($this->connection);
        return $this->NotaFiscal;
    }

    /**
     * @return InformacoesFiscais
     */
    public function InformacoesFiscais(): InformacoesFiscais
    {
        $this->InformacoesFiscais = new InformacoesFiscais($this->connection);
        return $this->InformacoesFiscais;
    }

    /**
     * @return MinhaConta
     */
    public function MinhaConta(): MinhaConta
    {
        $this->MinhaConta = new MinhaConta($this->connection);
        return $this->MinhaConta;
    }

    /**
     * @return ConsultaSerasa
     */
    public function ConsultaSerasa(): ConsultaSerasa
    {
        $this->ConsultaSerasa = new ConsultaSerasa($this->connection);
        return $this->ConsultaSerasa;
    }

    /**
     * @return Conta
     */
    public function Conta(): Conta
    {
        $this->Conta = new Conta($this->connection);
        return $this->Conta;
    }

    /**
     * @return Webhook
     */
    public function Webhook(): Webhook
    {
        $this->webhook     = new Webhook($this->connection);
        return $this->webhook;
    }

}
