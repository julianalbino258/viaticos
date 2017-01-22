<?php  
	
	include_once("../../Servicios/DataBaseData/DataBaseServices/Interfaz/IDataBaseServices.php");
	include_once("../../Servicios/DataBaseData/DataBaseServices/Implementacion/DataBaseServices.php");
	include_once('../../DTO/ResponseDTO.php');

	class TramiteSolicitudViajeDAL
	{
	    public function GuardarTramite($tramiteSolicitudViajeDTO)
	    {
	    	return $this->SaveData($tramiteSolicitudViajeDTO);
	    }

	    public function ListarTramite()
	    {
			
	    }

	    private function SaveData($tramiteSolicitudViajeDTO)
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

	    		$query = "INSERT INTO soli_viaj (sv_codigos, sv_ciudades, sv_diligenciamientos, sv_gerencias, 
												 sv_centros, sv_cedulas, sv_nombres, sv_cargos, sv_celulares, 
												 sv_correos, sv_origen, sv_intermedias, sv_destinos, sv_salidas, 
												 sv_regresos, sv_objetos, sv_viajeros, sv_transportes, sv_alojamientos, 
												 sv_casinos, sv_cargosa, sv_anticipos, sv_cdps, sv_proyecciones) 
						  VALUES (:sv_codigos, :sv_ciudades, :sv_diligenciamientos, :sv_gerencias, :sv_centros, 
						  		  :sv_cedulas, :sv_nombres, :sv_cargos, :sv_celulares, :sv_correos, :sv_origen, 
								  :sv_intermedias, :sv_destinos, :sv_salidas, :sv_regresos, :sv_objetos, :sv_viajeros, 
								  :sv_transportes, :sv_alojamientos, :sv_casinos, :sv_cargosa, :sv_anticipos, :sv_cdps, 
								  :sv_proyecciones)";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute(
					array(':sv_codigos' => $tramiteSolicitudViajeDTO->Codigo,
						  ':sv_ciudades' => $tramiteSolicitudViajeDTO->Ciudad,
						  ':sv_diligenciamientos' => $tramiteSolicitudViajeDTO->FechaDil,
						  ':sv_gerencias' => $tramiteSolicitudViajeDTO->Gerencia,
						  ':sv_centros' => $tramiteSolicitudViajeDTO->Costos,
						  ':sv_cedulas' => $tramiteSolicitudViajeDTO->Cedula,
						  ':sv_nombres' => $tramiteSolicitudViajeDTO->Nombre,
						  ':sv_cargos' => $tramiteSolicitudViajeDTO->Cargo,
						  ':sv_celulares' => $tramiteSolicitudViajeDTO->Celular,
						  ':sv_correos' => $tramiteSolicitudViajeDTO->Email,
						  ':sv_origen' => $tramiteSolicitudViajeDTO->CiudadOri,
						  ':sv_intermedias' => $tramiteSolicitudViajeDTO->CiudadInt,
						  ':sv_destinos' => $tramiteSolicitudViajeDTO->CiudadDest,
						  ':sv_salidas' => $tramiteSolicitudViajeDTO->FechaSal,
						  ':sv_regresos' => $tramiteSolicitudViajeDTO->FechaReg,
						  ':sv_objetos' => $tramiteSolicitudViajeDTO->ObjetoViaje,
						  ':sv_viajeros' => $tramiteSolicitudViajeDTO->TipoViajero,
						  ':sv_transportes' => $tramiteSolicitudViajeDTO->TipoTransporte,
						  ':sv_alojamientos' => $tramiteSolicitudViajeDTO->Alojamiento,
						  ':sv_casinos' => $tramiteSolicitudViajeDTO->Alimentacion,
						  ':sv_cargosa' => $tramiteSolicitudViajeDTO->ConCargo,
						  ':sv_anticipos' => $tramiteSolicitudViajeDTO->Anticipo,
						  ':sv_cdps' => $tramiteSolicitudViajeDTO->Cdp,
						  ':sv_proyecciones' => $tramiteSolicitudViajeDTO->Monto,
						 )
				);

				$responseDTO->Message = "Trámite guardado";

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