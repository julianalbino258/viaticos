<?php  
	
	include_once("../../Servicios/DataBaseData/DataBaseServices/Interfaz/IDataBaseServices.php");
	include_once("../../Servicios/DataBaseData/DataBaseServices/Implementacion/DataBaseServices.php");
	include_once('../../DTO/ResponseDTO.php');

	class ParametroConceptoGastoDAL
	{
	    public function GuardarParametro($parametroConceptoGastoDTO)
	    {
	    	return $this->SaveData($parametroConceptoGastoDTO);
	    }

	    public function ListarParametro()
	    {
			
	    }

	    private function SaveData($parametroConceptoGastoDTO)
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

	    		$query = "INSERT INTO conc_gast (cg_codigos, cg_nombres, cg_observaciones) VALUES (:cg_codigos, :cg_nombres, :cg_observaciones)";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute(
					array(':cg_codigos' => $parametroConceptoGastoDTO->Codigo,
						  ':cg_nombres' => $parametroConceptoGastoDTO->Nombre,
						  ':cg_observaciones' => $parametroConceptoGastoDTO->Observaciones
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