<?php  
	
	interface ITramiteBLL
	{
	    public function GuardarTramite($tramiteDTO);
	    public function ListarTramite();
		public function ObtenerFuncionario($tramiteDTO);
	}
?>