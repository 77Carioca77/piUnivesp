<?php

?>
<!DOCTYPE html>
<?php

include ("head.php")
?>
<title>PJ Sistema de Segurança</title>
<body>


<?php
include ("header.php");
include ("navbar.php");
?>

   <fieldset class="p-3 bg-info bg-opacity-10 border border-info border-start-0 rounded-end">
       <form action="#" class="row gx-3 gy1 form-control">
           <div class="row col-12 mt-2">
               <div class="col-md-4">
                   <label for="nomeColaborador" class="form-label">Número da ordem de serviço</label>
                   <div class="input-group">
                       <input type="text" class="form-control" id="nomeColaborador" placeholder="Nome do colaborador" name="nomeColaborador" aria-label="" aria-describedby="button-addon0">
                       <button class="btn btn-outline-primary" type="button" id="button-addon0">Pesquisar</button>
                   </div>
               </div>

                <?php
                    include ("button-group.php")
                ?>
           </div>
        </form>
    </fieldset>

  <script>
   
    function limparCampos() {
        document.getElementById("orderNumber").value = '';
    }
        
  </script>
<?php
    include "footer.php"
?>
</body>
</html>

