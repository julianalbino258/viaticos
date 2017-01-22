<?php  
	
	include_once("../../BLL/Implementaciones/ComponenteFactoryBLL.php");
	include_once("../../BLL/Implementaciones/ParametroConceptoGastoBLL.php");
	include_once("../../BLL/Implementaciones/ParametroIndicadorFinancieroBLL.php");
	include_once("../../BLL/Implementaciones/ParametroGastoInternacionalBLL.php");
	include_once("../../BLL/Implementaciones/ParametroTipoComisionBLL.php");
	include_once("../../BLL/Implementaciones/ParametroGastoGeneralBLL.php");
	include_once('../../DTO/ResponseDTO.php');

	$responseDTO = new ResponseDTO();
	
	try 
	{
		$requestJson = file_get_contents("php://input");
		$requestDTO = json_decode($requestJson);

		$_componenteActual = new ComponenteFactoryBLL();
		$_componenteActual = $_componenteActual->GetComponenteActual($requestDTO->EnumTipoComponente);

		$responseDTO = $_componenteActual->GuardarParametro($requestDTO->ComponenteActual);
	} 
	catch (Exception $e) 
	{
		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());		
	}

	echo json_encode($responseDTO);

?>