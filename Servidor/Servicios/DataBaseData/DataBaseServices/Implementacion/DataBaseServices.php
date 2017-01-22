<?php

	class DataBaseServices implements IDataBaseServices
	{
		public $connection = null;
		private $_username = "root";
		private $_password = "isabel2005";

		public function InitConnectionToDataBase()
		{
			$responseDTO = new ResponseDTO();

			try 
			{
				$this->connection = new PDO('mysql:host=localhost;dbname=viaticos', $this->_username, $this->_password) or die ("Error de conexión con la base de datos");
				if($this->connection)
				{
					$responseDTO->Message = "Conexión Exitosa";	
					return $responseDTO;
				}

				$responseDTO->SetMessageError("Error de conexión con la base de datos");	
				
			} 
			catch (Exception $e)
			{
				$responseDTO->SetStackTraceMessageError("Ocurrió un problema mientras se conectaba con la base de datos", $e->getMessage());
			}

			return $responseDTO;
		}
	}
?>