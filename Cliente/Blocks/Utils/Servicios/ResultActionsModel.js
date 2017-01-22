(function(){

	'use strict';

	angular
		.module('GENSA.MGGV.Blocks.Utils')
		.factory('GENSA.MGGV.Blocks.Utils.ResultActionsModel', ResultActionsModel);

	ResultActionsModel.$inject = [
		'GENSA.MGGV.Blocks.Utils.Constants'
	];	

	function ResultActionsModel(UtilsConstants)
	{
			var Model = function(dataDTO){

				var _self = this;


				angular.extend(this, {

					Result: UtilsConstants.EnumResult.SUCCESS,
					ResultData: null,
					Message: null,
					StackTraceMessage: null,
					SetMessageError: SetMessageError,
					SetStackTraceMessageError: SetStackTraceMessageError

				}, dataDTO);

				Object.defineProperty(_self, "HasError", {
					get: function(){
						return !_self.IsOk;
					}
				});

				Object.defineProperty(_self, "IsOk", {
					get: function(){
						return _self.Result === UtilsConstants.EnumResult.SUCCESS;
					}
				});

				function SetMessageError(errorMessage) 
				{
					_self.Result = UtilsConstants.EnumResult.ERROR;
					_self.Message = errorMessage;
					return _self;
				}

				function SetStackTraceMessageError(errorMessage, stackTraceMessage) 
				{
					_self.StackTraceMessage = stackTraceMessage;
					return SetMessageError(errorMessage);
				}
			};

		return Model;
	}

})();