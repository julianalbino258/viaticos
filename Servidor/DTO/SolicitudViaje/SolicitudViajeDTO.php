<?php 

	class SolicitudViajeDTO
	{
		public $Cedula = null;   /*Este valor puede modificarse en caso de que el usuario haga la solicitud de otra persona*/
        public $Nombre = null;
        public $Cargo = null;
        public $Ciudad = null;
        public $Gerencia = null;
        public $Costos = null;
        public $FechaDil = null;
        public $Email = null;
        public $Celular = null;
        public $Categoria = null;				

        public $CiudadOri = null;
        public $CiudadInt = null; /*Campo opcional para el usuario*/
        public $CiudadDest = null;
        public $FechaSal = null;
        public $FechaReg = null;
        public $ObjetoViaje = null;
        public $TipoTransporte = 1; //UtilsConstants.EnumTipoTransporte.AEREO
        public $Alojamiento = 1; //UtilsConstants.EnumAlojamiento.SEDE;
        public $Alimentacion = 1; //UtilsConstants.EnumAlimentacion.CASINO;						
        public $Anticipo = 1; //UtilsConstants.EnumAnticipo.SI;
        public $ConCargo = 1; //UtilsConstants.EnumConCargo.FUNCIONAMIENTO;
        public $TipoViajero = 1; //UtilsConstants.EnumTipoViajero.EMPLEADO;
        public $Cdp = null;
        public $Monto = null;
	}

?>