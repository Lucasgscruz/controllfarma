<?php
/**
* Model - Lógica da aplicação.
Carlos Magno
Lucas Geraldo
*/
class Cliente{
	private $nome;
	private $cpf;

	public function set_nome($nome){
		
		$this->$nome=$nome;

	}
	public function set_cpf($cpf){

		$this->$cpf=$cpf;
	}

	public function get_nome(){
		return $nome;
	}

	public function get_cpf(){
		return $cpf;
	}

	public function salvar_cliente($nome,$cpf){
		$this->set_nome($nome);
		echo "O cliente ".$nome." Foi registrado";
		return True;
	}

}


?>