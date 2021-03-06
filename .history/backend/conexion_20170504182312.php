<?php
session_start();

class Conexion extends PDO {
	
	private $tipo_de_base = "mysql";
	private $host = "localhost";
	private $nombre_de_base = "demo";
	private $usuario = "root";	
	private $contrasena = "zayro";
	private $port = "3307";
	
	public function __construct() {
		try{
			
			parent::__construct($this->tipo_de_base.":host=".$this->host.";port=".$this->port.";dbname=".$this->nombre_de_base, $this->usuario, $this->contrasena);
			
		}
		catch(PDOException $e){
			
			echo "Ha surgido un error y no se puede conectar a la base de datos. Detalle: " . $e->getMessage();
			
			exit;
			
		}
		
	}
	
}

