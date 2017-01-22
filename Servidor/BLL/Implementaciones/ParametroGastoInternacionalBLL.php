<?php

	include_once("../../BLL/Interfaces/IParametroBLL.php");
	include_once("../../DAL/Implementaciones/ParametroGastoInternacionalDAL.php");
	include_once('../../DTO/ResponseDTO.php');
	
	class ParametroGastoInternacionalBLL implements IParametroBLL
	{
	    public function GuardarParametro($parametroGastoInternacionalDTO)
	    {
	    	$_parametroGastoInternacionalDAL = new ParametroGastoInternacionalDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
	    		$responseDTO = $this->ValidarParametroGastoInternacional($parametroGastoInternacionalDTO);
	    		if($responseDTO->HasError)
	    		{
	    			return $responseDTO;
	    		}

				$responseDTO = $_parametroGastoInternacionalDAL->GuardarParametro($parametroGastoInternacionalDTO);
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

	    private function ValidarParametroGastoInternacional($parametroGastoInternacionalDTO)
	    {
	    	$responseDTO = new ResponseDTO();

	    	if($parametroGastoInternacionalDTO == null)
	    	{
	    		$responseDTO->SetMessageError("El objeto no puede ser vacío");
	    		return $responseDTO;
	    	}

	    	if($parametroGastoInternacionalDTO->Codigo == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Código no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($parametroGastoInternacionalDTO->Destino == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Destino no puede ser vacía");
	    		return $responseDTO;
	    	}	    	

	    	if($parametroGastoInternacionalDTO->Monto == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Monto no puede ser vacía");
	    		return $responseDTO;
	    	}	    	

	    	return $responseDTO;
	    }
	}

?>