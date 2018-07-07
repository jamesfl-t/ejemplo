<!DOCTYPE html>
<html lang="">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title></title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

   <style type="text/css">
   select{
      margin-top: 5px;
   }

   #resultado{
      margin-bottom: 10px;
   }

   #usuario{
      margin-top: 10px;
      border:1px solid #C5C8CC;
      border-radius: 15px;

   }
</style>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
//funciones clonar y remover elementos
   function clonar(){
      $( "#com" ).clone().appendTo( "#lista" );
   }
   function remover(){
      $("#com").remove();
   }

//funcion copiar texto en textarea
   $(document).ready(function () {
      $("#pasa").keyup(function () {
         var value = $(this).val();
         $("#texto").val(value);
      });
   });
</script>
</head>
<body>