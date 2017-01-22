<?php 
	include_once("../../Servicios/DataBaseData/DataBaseServices/Interfaz/IDataBaseServices.php");
	include_once("../../Servicios/DataBaseData/DataBaseServices/Implementacion/DataBaseServices.php");
	include_once("../../DTO/ResponseDTO.php"); 
	include_once("../../DTO/ParametroGastoGeneral/TipoCiudadDTO.php");

	class ParametroGastoGeneralDAL
	{
	    public function GuardarParametro($parametroGastoGeneralDTO)
	    {
	    	return $this->SaveData($parametroGastoGeneralDTO);
	    }

	    public function ListarParametro()
	    {
			return $this->GetTipoCiudad();
	    }
	 	
	    private function GetTipoCiudad()
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

	    		$query = "SELECT * FROM ciudades";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute();
				
				$result = $q->fetchAll();	

				$arrayTipoCiudadesList = array();

				while ($row = array_shift($result)) 
				{
					$tipoCiudadDTO = new TipoCiudadDTO();

					$tipoCiudadDTO->NombreCiudad = $row['ciud_nombres'];
					$tipoCiudadDTO->CategoriaCiudad = $row['ciud_categorias'];

					array_push($arrayTipoCiudadesList, $tipoCiudadDTO);
				};

				if($arrayTipoCiudadesList == NULL)
				{
					$responseDTO->SetMessageError("No hay registros para mostrar");
					return $responseDTO;
				}
				
				$responseDTO->ResultData = $arrayTipoCiudadesList;

				$dataBaseServices->connection = null;	
	    	} 
	    	catch (Exception $e) 
	    	{
	    		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());
	    	}

			return $responseDTO;
	    }

	    private function SaveData($parametroGastoGeneralDTO)
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

	    		$query = "INSERT INTO rela_gast_func_ciud (rfgc_codigos, rfgc_cg_codigos, rfgc_func_categorias, rfgc_ciud_categorias, rfgc_valores) VALUES (:rfgc_codigos, :rfgc_cg_codigos, :rfgc_func_categorias, :rfgc_ciud_categorias, :rfgc_valores)";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute(
					array( ':rfgc_codigos'		   => $parametroGastoGeneralDTO->Codigo,
						   ':rfgc_cg_codigos' 	   => $parametroGastoGeneralDTO->ConceptoGasto,
						   ':rfgc_func_categorias' => $parametroGastoGeneralDTO->CategoriaFuncionario,
						   ':rfgc_ciud_categorias' => $parametroGastoGeneralDTO->TipoCiudad,
						   ':rfgc_valores'         => $parametroGastoGeneralDTO->Valores					   
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