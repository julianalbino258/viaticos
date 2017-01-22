<?php  
	
	include_once("../../Servicios/DataBaseData/DataBaseServices/Interfaz/IDataBaseServices.php");
	include_once("../../Servicios/DataBaseData/DataBaseServices/Implementacion/DataBaseServices.php");
	include_once('../../DTO/ResponseDTO.php');

	class ParametroIndicadorFinancieroDAL
	{
	    public function GuardarParametro($parametroFinancieroDTO)
	    {
	    	return $this->SaveData($parametroFinancieroDTO);
	    }

	    public function ListarParametro()
	    {
			
	    }

	    private function SaveData($indicadorFinancieroDTO)
	    {
	    	$responseDTO = new ResponseDTO();
	    	$dataBaseServices = new DataBaseServices();

	    	try 
	    	{
	    		$responseDTO = $dataBaseServices->InitConnectionToDataBase();
	    		if($responseDTO->Result == 0)
	    		{
	    			return $responseDTO;
	    		}

	    		$query = "INSERT INTO indi_fina (if_codigos, if_nombres, if_observaciones) VALUES (:if_codigos, :if_nombres, :if_observaciones)";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute(
					array(':if_codigos' => $indicadorFinancieroDTO->Codigo,
						  ':if_nombres' => $indicadorFinancieroDTO->Nombre,
						  ':if_observaciones' => $indicadorFinancieroDTO->Observaciones
						 )
				);

				$responseDTO->Message = "Parámetro guardado";

				$dataBaseServices->connection = null;	
	    	} 
	    	catch (Exception $e) 
	    	{
	    		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());
	    	}

			return $responseDTO;
	    }
	}

?>