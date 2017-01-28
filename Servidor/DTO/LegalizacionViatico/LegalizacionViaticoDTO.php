<?php 

	class LegalizacionViaticoDTO
	{
		                public $Ciudad= null;
						public $FechaDil= null;
						public $Gerencia= null;
						public $Costos= null;
						public $Cedula= null;   /*Este valor puede modificarse en caso de que el usuario haga la solicitud de otra persona*/
						public $Nombre= null;
						public $Cargo= 	null;
						public $Categoria= null;
						public $Celular= null;						
						public $Email= null;
						public $CiudadOri= null;						
						public $CiudadDest= null;
						public $FechaSal= null;
						public $DiasComision= null;						
						public $TipoCiudad= null;
						public $Kilometros= null;
						public $ActividadesComision= null;
						public $ConCargo= null;
						public $Cdp= null;
						public $Monto= null;
						
						/*Datos modal Manutención*/

						public $Fecha= null;
						public $HoraSalida= null;
						public $HoraRegreso= null;
						public $Trayecto= null;
						public $Valor= null;
						public $TotalDia= null;

						/*Datos modal Detallar otros gastos*/

						public $Nit= null;
						public $RazonSocial= null;
						public $ValorFactura= null;
						public $Iva= null;
						public $ValorIva= null;
						public $ReteFuente= null;
						public $ReteIva= null;
						public $ReteIca= null;
						public $OtrosDescuentos= null;
						public $ValorPagado= null;
	}

?>

