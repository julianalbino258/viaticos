(function(){

	'use strict';

	angular
		.module('GENSA.MGGV.App')
		.component('parametroViaticos', {
			templateUrl: 'Cliente/App/Components/parametro-viaticos.php',
			controller: ParametroViaticosController,
			bindings: {
				parametroViaticosDto: '=',
				enumTipoComponente: "="
			}
		});

	ParametroViaticosController.$inject = [
		'GENSA.MGGV.Parametros.ParametroViaticoModel'
	];	

	function ParametroViaticosController(ParametroViaticoModel)
	{
		var ctrl = this;

		ctrl.GuardarParametro = GuardarParametro;
		ctrl.Clear = Clear;

		function GuardarParametro()
		{
			var resultado =	ctrl.parametroViaticosDto.ValidarTipoComponente();
			if(resultado.HasError)
			{
				alert(resultado.Message);
				return;
			}

			ctrl.parametroViaticosDto.GuardarTipoComponente(ctrl.enumTipoComponente).then(
				function (resultActionsModel){

					if(resultActionsModel.HasError)
					{
						alert(resultActionsModel.Message);
						console.log(resultActionsModel.StackTraceMessage);
						return;
					}

					alert(resultActionsModel.Message);
				},
				function (error){
					alert('Error');
					console.log(error);
				}
			);
		}

		function Clear()
		{
			ctrl.parametroViaticosDto.Codigo = null;
			ctrl.parametroViaticosDto.Nombre = null;
			ctrl.parametroViaticosDto.Observaciones = null;
		}
	}

})();