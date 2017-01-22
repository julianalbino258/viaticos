<?php 
	include_once("../../BLL/Interfaces/IParametroBLL.php");
	include_once("../../DAL/Implementaciones/ParametroTipoComisionDAL.php");
	include_once('../../DTO/ResponseDTO.php'); 
	
	class ParametroTipoComisionBLL implements IParametroBLL
	{
	    public function GuardarParametro($parametroTipoComisionDTO)
	    {
	    	$_parametroTipoComisionDAL = new ParametroTipoComisionDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
	    		$responseDTO = $this->ValidarParametroTipoComision($parametroTipoComisionDTO);
	    		if($responseDTO->HasError)
	    		{
	    			return $responseDTO;
	    		}

				$responseDTO = $_parametroTipoComisionDAL->GuardarParametro($parametroTipoComisionDTO);
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

	    private function ValidarParametroTipoComision($parametroTipoComisionDTO)
	    {
	    	$responseDTO = new ResponseDTO();

	    	if($parametroTipoComisionDTO == null)
	    	{
	    		$responseDTO->SetMessageError("El objeto no puede ser vacío");
	    		return $responseDTO;
	    	}

	    	if($parametroTipoComisionDTO->Codigo == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Código no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($parametroTipoComisionDTO->Nombre == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Nombre no puede ser vacía");
	    		return $responseDTO;
	    	}
	    	

	    	return $responseDTO;
	    }
	}

?>