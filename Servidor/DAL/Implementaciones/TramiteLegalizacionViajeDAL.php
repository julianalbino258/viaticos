<?php  
	
	include_once("../../Servicios/DataBaseData/DataBaseServices/Interfaz/IDataBaseServices.php");
	include_once("../../Servicios/DataBaseData/DataBaseServices/Implementacion/DataBaseServices.php");
	include_once('../../DTO/ResponseDTO.php');

	class TramiteLegalizacionViajeDAL
	{
	    public function GuardarParametro($tramiteLegalizacionViajeDTO)
	    {
	    	return $this->SaveData($tramiteLegalizacionViajeDTO);
	    }

	    public function ListarParametro()
	    {
			
	    }

	    private function SaveData($tramiteLegalizacionViajeDTO)
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

	    		$query = "INSERT INTO lega_viat (lv_codigos, lv_ciudades, lv_diligenciamientos, lv_gerencias, lv_centros, lv_cedulas,
	    		                                 lv_nombres, lv_cargos, lv_celulares, lv_correos, lv_origenes, lv_destinos, lv_salidas, 
	    		                                 lv_dias, lv_tipo_ciudades, lv_transportes, lv_kilometros, lv_actividades, lv_cargosa, lv_cdps, lv_montos) 
						  VALUES (:lv_codigos, :lv_ciudades, :lv_diligenciamientos, :lv_gerencias, :lv_centros, :lv_cedulas, :lv_nombres,
							  		  :lv_cargos, :lv_celulares, :lv_correos, :lv_origenes, :lv_destinos, :lv_salidas, :lv_dias,
	    		                      :lv_tipo_ciudades, :lv_transportes, :lv_kilometros, :lv_actividades, :lv_cargosa, :lv_cdps, :lv_montos)";
				$q = $dataBaseServices->connection->prepare($query);
				$q->execute(
					array(':lv_codigos'=> $tramiteLegalizacionViajeDTO->Consecutivo,
						  ':lv_ciudades'=> $tramiteLegalizacionViajeDTO->CiudadDil, 
						  ':lv_diligenciamientos'=> $tramiteLegalizacionViajeDTO->FechaDil, 
						  ':lv_gerencias'=> $tramiteLegalizacionViajeDTO->Gerencia, 
						  ':lv_centros'=> $tramiteLegalizacionViajeDTO->CentroCostos, 
						  ':lv_cedulas'=> $tramiteLegalizacionViajeDTO->Cedula, 
						  ':lv_nombres'=> $tramiteLegalizacionViajeDTO->Nombre,
						  ':lv_cargos'=> $tramiteLegalizacionViajeDTO->Cargo,
						  ':lv_celulares'=> $tramiteLegalizacionViajeDTO->Celular,
						  ':lv_correos'=> $tramiteLegalizacionViajeDTO->Email,
						  ':lv_origenes'=> $tramiteLegalizacionViajeDTO->CiudadOri,
						  ':lv_destinos'=> $tramiteLegalizacionViajeDTO->CiudadDest,
						  ':lv_salidas'=> $tramiteLegalizacionViajeDTO->FechaSal,
						  ':lv_dias'=> $tramiteLegalizacionViajeDTO->DiasComision,
						  ':lv_tipo_ciudades'=> $tramiteLegalizacionViajeDTO->TipoCiudad,
						  ':lv_transportes' => $tramiteLegalizacionViajeDTO->Transporte,
						  ':lv_kilometros'=> $tramiteLegalizacionViajeDTO->Kilometros, 
						  ':lv_actividades'=> $tramiteLegalizacionViajeDTO->ActividadesComision, 
						  ':lv_cargosa'=> $tramiteLegalizacionViajeDTO->ConCargo, 
						  ':lv_cdps'=> $tramiteLegalizacionViajeDTO->Cdp, 
						  ':lv_montos'=> $tramiteLegalizacionViajeDTO->Monto
						 )
				);

				$responseDTO->Message = "Parámetro guardado";

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