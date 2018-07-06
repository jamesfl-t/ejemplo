<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript">
   function dato(callback, valor) {
      $.ajax({
         type: "POST",
         url: "comprobar.php",
         data: {'accion': 'usuario', 'valor': valor},
         dataType: "json"
      })

      .done(function (data) {
// console.log('obtenerCP : ' + data);
callback(data);
})

      .fail(function (jqXHR, textStatus, errorThrown) {
//someErrorFunction();
alert('usuario error!  jqXHR: ' + jqXHR + ' -- textStatus:' + textStatus +
   ' -- errorThrown:' + errorThrown);
})


   }

   $('#buscar').on('click',function(){
      $('#pba').attr("disabled", true);
      $('#msgUsuario').text('');
      var valor = $('#clave').val();

      dato(function (data){

         if (data.respuesta) {
            console.log('click');
            $('#msgUsuario').text(data.info['nombre']);
            $('#pba').removeAttr("disabled");
         }

      },valor);
   });
</script>
</body>
</html>