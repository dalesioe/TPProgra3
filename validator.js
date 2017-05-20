$(document).ready(function(){
    $('#login').bootstrapValidator({
        message:'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-zoom-in'
        },
        fields: {
            txtusuario: {
                validators: {
                	notEmpty:{
                		message:'Este campo no puede estar vacio'
                	}
                }
                },
            password: {
                validators: {
                    notEmpty:{
                        message:'Este campo no puede estar vacio'
                    }
                }
                }
            }
        
    });

});
