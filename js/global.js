/* 
    Created on : 24-mar-2014, 20:59:50
    Author     : Mitosu
    Name: Miguel Angel Torres 
 */

function init() {
    var form = document.getElementById('info');
    form.validationEngine();
    var empresa = document.getElementById('empresa');
    var contacto = document.getElementById('contacto');
    var direccion = document.getElementById('direccion');
    var cpostal= document.getElementById('cpostal');
    var ciudad = document.getElementById('ciudad');
    var email = document.getElementById('email');
    
    empresa.className = 'validate[requiredminSize[4]]]';
    contacto.className = 'validate[required]';
    direccion.className = 'validate[required]';
    cpostal.className = 'validate[required]';
    ciudad.className = 'validate[required]';
    email.className = 'validate[required, custom[email]]';
}

