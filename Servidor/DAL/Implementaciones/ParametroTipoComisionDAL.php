<?php  
	
	include_once("../../Servicios/DataBaseData/DataBaseServices/Interfaz/IDataBaseServices.php");
	include_once("../../Servicios/DataBaseData/DataBaseServices/Implementacion/DataBaseServices.php");
	include_once('../../DTO/ResponseDTO.php');

	class ParametroTipoComisionDAL
	{
	    public function GuardarParametro($parametroTipoComisionDTO)
	    {
	    	return $this->SaveData($parametroTipoComisionDTO);
	    }

	    public function ListarParametro()
	    {
			
	    }

	    private function SaveData($parametroTipoComisionDTO)
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

	    		$query = "INSERT INTO tipo_comi (tc_codigos, tc_nombres, tc_observaciones) VALUES (:tc_codigos, :tc_nombres, :tc_observaciones)";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute(
					array(':tc_codigos' => $parametroTipoComisionDTO->Codigo,
						  ':tc_nombres' => $parametroTipoComisionDTO->Nombre,
						  ':tc_observaciones' => $parametroTipoComisionDTO->Observaciones
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