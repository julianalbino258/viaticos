<?php  
	
	include_once("../../BLL/Implementaciones/ComponenteFactoryBLL.php");
	include_once("../../BLL/Implementaciones/ParametroConceptoGastoBLL.php");
	include_once("../../BLL/Implementaciones/ParametroIndicadorFinancieroBLL.php");
	include_once("../../BLL/Implementaciones/ParametroGastoInternacionalBLL.php");
	include_once("../../BLL/Implementaciones/ParametroTipoComisionBLL.php");
	include_once("../../BLL/Implementaciones/ParametroGastoGeneralBLL.php");
	include_once("../../BLL/Implementaciones/TramiteSolicitudViajeBLL.php");

	class ComponenteFactoryBLL
	{
		public function GetComponenteActual($enumTipoComponente)
		{
			switch ($enumTipoComponente) 
			{
				case 1:
					return new ParametroConceptoGastoBLL();
				
				case 2:
					return new ParametroIndicadorFinancieroBLL();

				case 3:
					return new ParametroTipoComisionBLL();
					
				case 4:
					return new ParametroGastoInternacionalBLL();

				default:
					return new ParametroGastoGeneralBLL();		
			}
		}

		public function GetTramiteActual($enumTipoComponente)
		{
			switch ($enumTipoComponente) 
			{
				case 1:
					return new TramiteSolicitudViajeBLL();
				case 2:
					return new TramiteLegalizacionViajeBLL();
				case 3:
					return new TramiteAprobacionViajeBLL();
			}
		}

	}

?>