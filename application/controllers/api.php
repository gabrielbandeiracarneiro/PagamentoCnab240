<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends CI_Controller {

	public function index()
	{
		$this->load->helper('remessa');
		$this->load->model('conta');
		$contas = $this->conta->get_contas(array());
		//var_dump($contas);
		remessa_salario($contas);
	}
	public function salario()
	{
		$this->load->helper('remessa');
		$contas = [];
		$contas[0]=(object)['codigo_banco'=>'001','agencia'=>'0200','dv_agencia'=>'3','conta'=>'123654','dv_conta'=>'5','fornecedor'=>'NOME DA PESSOA','data_vencimento'=>'2018-05-24','valor'=>25.75,'conta_id'=>'1324','pf_pj'=>'1','cpf_cnpj'=>'10020030084'];
		//$contas = $this->conta->get_contas(array());
		//var_dump($contas);
		remessa_salario($contas);
	}
}