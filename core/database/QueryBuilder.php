<?php
/**
 * Classe global para Tratamento dos dados.
 */
class QueryBuilder
{
    protected $pdo;
	/**
	 * Método de Instânciamento do Driver PDO
	 */
	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}
	/**
	 * Função de retorno de todos os dados de uma Tabela
	 * $table - Define a Tabela em qual será realizado o Select
	 */
	public function selectAll($table)
	{
		$statement = $this->pdo->prepare("SELECT * FROM {$table}");
		$statement->execute();
		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
	/**
	 * Função de Inserção de dados em uma Tabela
	 * $table - Tabela que será definida.
	 * $parameters - são os valores enviados pelo Formulário
	 */
	public function insert($table, $parameters)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(', ', array_keys($parameters)),
			':' . implode(', :', array_keys($parameters)) 
		);
		try {
			$statement = $this->pdo->prepare($sql);
			$statement->execute($parameters);
		} catch (Exception $e) {
			die('Whoops, Alguma coisa deu errado ;(! Não foi possível salvar os dados.');
		}
	}
}