<?php  

	include_once("../../BLL/Interfaces/ITramiteBLL.php");
	include_once("../../DAL/Implementaciones/TramiteSolicitudViajeDAL.php");
	include_once('../../DTO/ResponseDTO.php');

	class TramiteSolicitudViajeBLL implements ITramiteBLL
	{
	    public function GuardarTramite($tramiteSolicitudViajeDTO)
	    {
	    	$_tramiteSolicitudViajeDAL = new TramiteSolicitudViajeDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
	    		$responseDTO = $this->ValidarTramiteSolicitudViaje($tramiteSolicitudViajeDTO);
	    		if($responseDTO->HasError)
	    		{
	    			return $responseDTO;
	    		}

				$responseDTO = $_tramiteSolicitudViajeDAL->GuardarTramite($tramiteSolicitudViajeDTO);
	    	} 
	    	catch (Exception $e) 
	    	{
	    		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());
	    	}

			return $responseDTO;
	    }

	    public function ListarTramite()
	    {
			
	    }
	    
	    private function ValidarTramiteSolicitudViaje($tramiteSolicitudViajeDTO)
	    {
	    	$responseDTO = new ResponseDTO();

	    	if($tramiteSolicitudViajeDTO == null)
	    	{
	    		$responseDTO->SetMessageError("El objeto no puede ser vacío");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Cedula == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Cédula no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Nombre == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Nombre no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Cargo == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Cargo no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Ciudad == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Gerencia == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Gerencia no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Costos == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Centro de Costos no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->FechaDil == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Fecha Diligenciamiento no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Email == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Email no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->Celular == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Celular no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->CiudadOri == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad Origen no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->CiudadInt == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad Intermedia no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->CiudadDest == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad Destino no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->FechaSal == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Fecha Salida no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->FechaReg == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Fecha Regreso no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->ObjetoViaje == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Objeto Viaje no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteSolicitudViajeDTO->CDP == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad CDP no puede ser vacía");
	    		return $responseDTO;
	    	}	    	

	    	return $responseDTO;
	    }
	}

?>