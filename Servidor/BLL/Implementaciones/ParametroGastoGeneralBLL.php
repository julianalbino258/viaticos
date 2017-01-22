<?php

	include_once("../../BLL/Interfaces/IParametroBLL.php");
	include_once("../../DAL/Implementaciones/ParametroGastoGeneralDAL.php");
	include_once('../../DTO/ResponseDTO.php');

	class ParametroGastoGeneralBLL implements IParametroBLL
	{
	    public function GuardarParametro($parametroGastoGeneralDTO)
	    {
	    	$_parametroGastoGeneralDAL = new ParametroGastoGeneralDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
	    		$responseDTO = $this->ValidarParametroGastoGeneral($parametroGastoGeneralDTO);
	    		if($responseDTO->HasError)
	    		{
	    			return $responseDTO;
	    		}

				$responseDTO = $_parametroGastoGeneralDAL->GuardarParametro($parametroGastoGeneralDTO);
	    	} 
	    	catch (Exception $e) 
	    	{
	    		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());
	    	}

			return $responseDTO;
	    }

	    public function ListarParametro()
	    {
			$_parametroGastoGeneralDAL = new ParametroGastoGeneralDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
				$responseDTO = $_parametroGastoGeneralDAL->ListarParametro();
	    	} 
	    	catch (Exception $e) 
	    	{
	    		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());
	    	}

			return $responseDTO;	
	    }

	    private function ValidarParametroGastoGeneral($parametroGastoGeneralDTO)
	    {
	    	$responseDTO = new ResponseDTO();

	    	if($parametroGastoGeneralDTO == null)
	    	{
	    		$responseDTO->SetMessageError("El objeto no puede ser vacío");
	    		return $responseDTO;
	    	}

	    	if($parametroGastoGeneralDTO->ConceptoGasto == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Código Concepto Gasto no puede ser vacía");
	    		return $responseDTO;
	    	}

	    		    	
	    	if($parametroGastoGeneralDTO->CategoriaFuncionario == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Categoría Funcionario no puede ser vacía");
	    		return $responseDTO;
	    	}	    	

	    	if($parametroGastoGeneralDTO->TipoCiudad == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Tipo Ciudad no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($parametroGastoGeneralDTO->Valores == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Código Valor no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	return $responseDTO;
	    }
	}

?>