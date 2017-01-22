(function(){

	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.run(MGGVAppRun);

	MGGVAppRun.$inject = [
		'GENSA.MGGV.Blocks.Utils.Constants'
	];	

	function MGGVAppRun(UtilsConstants) 
	{
		UtilsConstants.URLS.GuardarParametroURL = UtilsConstants.URLS.ServerRelativeURLPath + "GuardarParametro.php";
		UtilsConstants.URLS.ListarParametroURL = UtilsConstants.URLS.ServerRelativeURLPath + "ListarParametro.php";
		UtilsConstants.URLS.GuardarTramiteURL = UtilsConstants.URLS.ServerRelativeURLPath + "GuardarTramite.php";
		UtilsConstants.URLS.ListarTramiteURL = UtilsConstants.URLS.ServerRelativeURLPath + "ListarTramite.php";
	}

})();