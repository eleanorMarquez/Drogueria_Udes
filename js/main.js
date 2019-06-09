jQuery(document).on('submit','#formLg',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:'funciones/loginEntrar.php',
                type:'POST',
                dataType:'json',
                data:$(this).serialize(),
                beforeSend:function(){
                  $('.botonlg').val('Validando....');
                }
              })
              .done(function(respuesta){
                console.log(respuesta);
                if (!respuesta.error) {
                  if (respuesta.Tipo_Usuario=='Cliente') {
                    location='administrador.php';
                  }else if (respuesta.Tipo_Usuario=='Estudiante') {
                    location='paginas/estudiante/Sistema.php';
                  }else if (respuesta.Tipo_Usuario=='Docente') {
                    location='paginas/estudiante/Sistema.php';
                  }else if (respuesta.Tipo_Usuario=='Cliente') {
                    location='paginas/estudiante/Sistema.php';
                  }else if (respuesta.Tipo_Usuario=='Servicio General') {
                    location='paginas/estudiante/Sistema.php';
                  }else if (respuesta.Tipo_Usuario=='Administrador') {
                    location='paginas/admin/administrador.php';
                  }else if (respuesta.Tipo_Usuario=='Control Inventario') {
                    location='paginas/kardex/kardex.php';
                  }
                }else {
                  $('.mensaje-error').slideDown('slow');
                  setTimeout(function(){
                  $('.mensaje-error').slideUp('slow');
                },3000);
                $('.botonlg').val('Iniciar Sesion');
                }
              })
              .fail(function(resp){
                console.log(resp.responseText);
              })
              .always(function(){
                console.log("complete");
            });
      });
