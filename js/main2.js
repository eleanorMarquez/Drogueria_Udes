$("#divCliente").hide();
$("#divEstudiante").hide();
$("#divDocente").hide();

$('.numero').on('input', function () {
  this.value = this.value.replace(/[^0-9]/g,'');
});


//validacion letras
$('.letra').keypress(function (key) {
          window.console.log(key.charCode)
          if ((key.charCode < 97 || key.charCode > 122)//letras mayusculas
              && (key.charCode < 65 || key.charCode > 90) //letras minusculas
              && (key.charCode != 45) //retroceso
              && (key.charCode != 241) //ñ
               && (key.charCode != 209) //Ñ
               && (key.charCode != 32) //espacio
               && (key.charCode != 225) //á
               && (key.charCode != 233) //é
               && (key.charCode != 237) //í
               && (key.charCode != 243) //ó
               && (key.charCode != 250) //ú
               && (key.charCode != 193) //Á
               && (key.charCode != 201) //É
               && (key.charCode != 205) //Í
               && (key.charCode != 211) //Ó
               && (key.charCode != 218) //Ú

              )
              return false;
      });

function numeroale() {
    var aleatorio = Math.round(Math.random()*1000000);
    document.getElementById('codigo_aleatorio').innerHTML ='123';
}

window.onload = function(){
$('#codigo_aleatorio').val('30');
};

function alerta() {
  alertify.set('notifier','position', 'top-right');
  alertify.notify('Añadido al Carrito');
}

$(document).on('click', '.borrar', function (event) {
    event.preventDefault();
    $(this).closest('tr').remove();
});

window.onload = function(){
  var fecha = new Date(); //Fecha actual
  var mes = fecha.getMonth()+1; //obteniendo mes
  var dia = fecha.getDate(); //obteniendo dia
  var ano = fecha.getFullYear(); //obteniendo año
  if(dia<10)
    dia='0'+dia; //agrega cero si el menor de 10
  if(mes<10)
    mes='0'+mes //agrega cero si el menor de 10
  document.getElementById('fechaActual').value=ano+"-"+mes+"-"+dia;
}


function doSearch()
		{
			var tableReg = document.getElementById('miTabla');
			var searchText = document.getElementById('searchTerm').value.toLowerCase();
			var cellsOfRow="";
			var found=false;
			var compareWith="";

			// Recorremos todas las filas con contenido de la tabla
			for (var i = 1; i < tableReg.rows.length; i++)
			{
				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
				found = false;
				// Recorremos todas las celdas
				for (var j = 0; j < cellsOfRow.length && !found; j++)
				{
					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
					// Buscamos el texto en el contenido de la celda
					if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
					{
						found = true;
					}
				}
				if(found)
				{
					tableReg.rows[i].style.display = '';
				} else {
					// si no ha encontrado ninguna coincidencia, esconde la
					// fila de la tabla
					tableReg.rows[i].style.display = 'none';
				}
			}
		}

    function doSearch22()
    		{
    			var tableReg = document.getElementById('miTabla2');
    			var searchText = document.getElementById('searchTerm2').value.toLowerCase();
    			var cellsOfRow="";
    			var found=false;
    			var compareWith="";

    			// Recorremos todas las filas con contenido de la tabla
    			for (var i = 1; i < tableReg.rows.length; i++)
    			{
    				cellsOfRow = tableReg.rows[i].getElementsByTagName('td');
    				found = false;
    				// Recorremos todas las celdas
    				for (var j = 0; j < cellsOfRow.length && !found; j++)
    				{
    					compareWith = cellsOfRow[j].innerHTML.toLowerCase();
    					// Buscamos el texto en el contenido de la celda
    					if (searchText.length == 0 || (compareWith.indexOf(searchText) > -1))
    					{
    						found = true;
    					}
    				}
    				if(found)
    				{
    					tableReg.rows[i].style.display = '';
    				} else {
    					// si no ha encontrado ninguna coincidencia, esconde la
    					// fila de la tabla
    					tableReg.rows[i].style.display = 'none';
    				}
    			}
    		}



        function pagoOnChange(sel) {
              if (sel.value==""){
                   $("#divCliente").hide();
                   $("#divEstudiante").hide();
                   $("#divDocente").hide();
              }

              if (sel.value=="Cliente"){
                   $("#divCliente").show();
                   $("#divEstudiante").hide();
                   $("#divDocente").hide();
              }

              if (sel.value=="Estudiante"){
                $("#divCliente").hide();
                $("#divEstudiante").show();
                $("#divDocente").hide();
              }

              if (sel.value=="Docente"){
                $("#divCliente").hide();
                $("#divEstudiante").hide();
                $("#divDocente").show();
              }
        }
