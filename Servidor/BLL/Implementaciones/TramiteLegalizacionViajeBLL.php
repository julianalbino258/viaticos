<?php  

	include_once("../../BLL/Interfaces/ITramiteBLL.php");
	include_once("../../DAL/Implementaciones/TramiteLegalizacionViajeDAL.php");
	include_once('../../DTO/ResponseDTO.php');

	class TramiteLegalizacionViajeBLL implements ITramiteBLL
	{
	    public function GuardarTramite($tramiteLegalizacionViajeDTO)
	    {
	    	$_tramiteLegalizacionViajeDAL = new TramiteLegalizacionViajeDAL();
	    	$responseDTO = new ResponseDTO();

	    	try 
	    	{
	    		$responseDTO = $this->ValidarTramiteLegalizacionViaje($tramiteLegalizacionViajeDTO);
	    		if($responseDTO->HasError)
	    		{
	    			return $responseDTO;
	    		}

				$responseDTO = $_tramiteLegalizacionViajeDAL->GuardarTramite($tramiteLegalizacionViajeDTO);
	    	} 
	    	catch (Exception $e) 
	    	{
	    		$responseDTO->SetStackTraceMessageError("Ocurrió un problema durante el guardado de los datos", $e->getMessage());
	    	}

			return $responseDTO;
	    }

		public function ObtenerFuncionario($tramiteDTO)
		{
			
		}

	    public function ListarTramite()
	    {
			
	    }
	    
	    private function ValidarTramiteLegalizacionViaje($tramiteLegalizacionViajeDTO)
	    {
	    	$responseDTO = new ResponseDTO();

	    	if($tramiteLegalizacionViajeDTO == null)
	    	{
	    		$responseDTO->SetMessageError("El objeto no puede ser vacío");
	    		return $responseDTO;
	    	}	    	

	    	if($tramiteLegalizacionViajeDTO->Gerencia == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Gerencia no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->Costos == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Centro de Costos no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->FechaDil == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Fecha Diligenciamiento no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->Email == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Email no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->Celular == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Celular no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->CiudadOri == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad Origen no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->CiudadInt == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad Intermedia no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->CiudadDest == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad Destino no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->FechaSal == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Fecha Salida no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->FechaReg == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Fecha Regreso no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->ObjetoViaje == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Objeto Viaje no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->CDP == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad CDP no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	//MODAL DETALLE MANUTENCIÓN
	    	if($tramiteLegalizacionViajeDTO->Fecha == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Fecha no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->HoraSalida == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Hora Salida no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->HoraRegreso == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Hora Regreso no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->Trayecto == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	if($tramiteLegalizacionViajeDTO->Valor == null)
	    	{
	    		$responseDTO->SetMessageError("La propiedad Ciudad no puede ser vacía");
	    		return $responseDTO;
	    	}

	    	return $responseDTO;
	    }
	}

?>