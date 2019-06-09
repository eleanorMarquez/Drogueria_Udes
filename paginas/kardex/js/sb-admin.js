(function($) {
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle").on('click',function(e) {
    e.preventDefault();
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();
    }
  });

  // Scroll to top button appear
  $(document).on('scroll',function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(event) {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($anchor.attr('href')).offset().top)
    }, 1000, 'easeInOutExpo');
    event.preventDefault();
  });

})(jQuery); // End of use strict

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

    function doSearch2()
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


        function doSearch3()
        		{
        			var tableReg = document.getElementById('miTabla3');
        			var searchText = document.getElementById('searchTerm3').value.toLowerCase();
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

            function doSearch4()
            		{
            			var tableReg = document.getElementById('miTabla4');
            			var searchText = document.getElementById('searchTerm4').value.toLowerCase();
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

    $("#tablaCliente").hide();
    $("#tablaEstudiante").hide();
    $("#tablaDocente").hide();
    $("#tablaEmpleado").hide();

    $("#Vercliente").on('click',function(e) {
      $("#tablaCliente").show();
      $("#tablaEstudiante").hide();
      $("#tablaDocente").hide();
      $("#tablaEmpleado").hide();
    });

    $("#verEstudiante").on('click',function(e) {
      $("#tablaCliente").hide();
      $("#tablaEstudiante").show();
      $("#tablaDocente").hide();
      $("#tablaEmpleado").hide();
    });

    $("#verDocente").on('click',function(e) {
      $("#tablaCliente").hide();
      $("#tablaEstudiante").hide();
      $("#tablaDocente").show();
      $("#tablaEmpleado").hide();
    });

    $("#verEmpleado").on('click',function(e) {
      $("#tablaCliente").hide();
      $("#tablaEstudiante").hide();
      $("#tablaDocente").hide();
      $("#tablaEmpleado").show();
    });

    $("#cerrar").on('click',function(e) {
      $("#tablaCliente").hide();
      $("#tablaEstudiante").hide();
      $("#tablaDocente").hide();
      $("#tablaEmpleado").hide();
    });


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
