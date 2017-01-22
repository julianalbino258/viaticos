<?php  
	
	include_once("../../BLL/Implementaciones/ComponenteFactoryBLL.php");
	include_once("../../BLL/Implementaciones/TramiteSolicitudViajeBLL.php");
	include_once("../../BLL/Implementaciones/TramiteLegalizacionViajeBLL.php");
	include_once("../../BLL/Implementaciones/TramiteAprobacionViajeBLL.php");
	include_once('../../DTO/ResponseDTO.php');

	$responseDTO = new ResponseDTO();
	
	try 
	{
		$requestJson = file_get_contents("php://input");
		$requestDTO = json_decode($requestJson);

		$_componenteActual = new ComponenteFactoryBLL();
		$_componenteActual = $_componenteActual->GetTramiteActual($requestDTO->EnumTipoComponente);

		$responseDTO = $_componenteActual->GuardarTramite($requestDTO->ComponenteActual);
	} 
	catch (Exception $e) 
	{
		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());		
	}

	echo json_encode($responseDTO);

?>