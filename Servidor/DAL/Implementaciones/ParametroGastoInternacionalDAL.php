<?php 
	include_once("../../Servicios/DataBaseData/DataBaseServices/Interfaz/IDataBaseServices.php");
	include_once("../../Servicios/DataBaseData/DataBaseServices/Implementacion/DataBaseServices.php");
	include_once('../../DTO/ResponseDTO.php'); 

	class ParametroGastoInternacionalDAL
	{
	    public function GuardarParametro($parametroGastoInternacionalDTO)
	    {
	    	return $this->SaveData($parametroGastoInternacionalDTO);
	    }

	    public function ListarParametro()
	    {
			
	    }

	    private function SaveData($parametroGastoInternacionalDTO)
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

	    		$query = "INSERT INTO para_gast_inte (pgi_codigos, pgi_destinos, pgi_monedas, pgi_valores) VALUES (:pgi_codigos, :pgi_destinos, :pgi_monedas, :pgi_valores)";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute(
					array( ':pgi_codigos' => $parametroGastoInternacionalDTO->Codigo,
						   ':pgi_destinos'=> $parametroGastoInternacionalDTO->Destino,
						   ':pgi_monedas' => $parametroGastoInternacionalDTO->TipoMoneda,
						   ':pgi_valores' => $parametroGastoInternacionalDTO->Monto						   
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