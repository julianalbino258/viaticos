<?php  

	include_once("../../BLL/Interfaces/IParametroBLL.php");
	include_once("../../DAL/Implementaciones/ParametroConceptoGastoDAL.php");
	include_once('../../DTO/ResponseDTO.php');

	class ParametroConceptoGastoBLL implements IParametroBLL
	{
	    public function GuardarParametro($parametroConceptoGastoDTO)
	    {
	    	$_parametroConceptoGastoDAL = new ParametroConceptoGastoDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
	    		$responseDTO = $this->ValidarParametroConceptoGasto($parametroConceptoGastoDTO);
	    		if($responseDTO->HasError)
	    		{
	    			return $responseDTO;
	    		}

				$responseDTO = $_parametroConceptoGastoDAL->GuardarParametro($parametroConceptoGastoDTO);
	    	} 
	    	catch (Exception $e) 
	    	{
	    		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());
	    	}

			return $responseDTO;
	    }

	    public function ListarParametro()
	    {
			
	    }

	    private function ValidarParametroConceptoGasto($parametroConceptoGastoDTO)
	    {
	    	$responseDTO = new ResponseDTO();

	    	if($parametroConceptoGastoDTO == null)
	    	{
	    		$responseDTO->SetMessageError("El objeto no puede ser vacío");
	    		return $responseDTO;
	    	}

	    	if($parametroConceptoGastoDTO->Codigo == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Código no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($parametroConceptoGastoDTO->Nombre == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Nombre no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	return $responseDTO;
	    }
	}

?>