<?php  
	include_once("../../BLL/Interfaces/IParametroBLL.php");
	include_once("../../DAL/Implementaciones/ParametroIndicadorFinancieroDAL.php");
	include_once('../../DTO/ResponseDTO.php');
	
	class ParametroIndicadorFinancieroBLL implements IParametroBLL
	{
	    public function GuardarParametro($indicadorFinancieroDTO)
	    {
	    	$_indicadorFinancieroDAL = new ParametroIndicadorFinancieroDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
	    		$responseDTO = $this->ValidarParametroIndicadorFinanciero($indicadorFinancieroDTO);
	    		if($responseDTO->HasError)
	    		{
	    			return $responseDTO;
	    		}

				$responseDTO = $_indicadorFinancieroDAL->GuardarParametro($indicadorFinancieroDTO);
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

	    private function ValidarParametroIndicadorFinanciero($indicadorFinancieroDTO)
	    {
	    	$responseDTO = new ResponseDTO();

	    	if($indicadorFinancieroDTO == null)
	    	{
	    		$responseDTO->SetMessageError("El objeto no puede ser vacío");
	    		return $responseDTO;
	    	}

	    	if($indicadorFinancieroDTO->Codigo == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Código no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($indicadorFinancieroDTO->Nombre == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Nombre no puede ser vacía");
	    		return $responseDTO;
	    	}	    	

	    	return $responseDTO;
	    }
	}

?>