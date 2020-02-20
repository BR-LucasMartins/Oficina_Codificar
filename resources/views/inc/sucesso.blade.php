<?php
        //caso registro seja salvo
        if(isset($_GET['sucesso'])){?>
        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
            <p> Novo registro salvo com sucesso. </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>      
        <?php
        }
        ?>

<?php
        //caso registro seja atualizado
        if(isset($_GET['sucesso2'])){?>
        <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
            <p> Registro alterado com sucesso. </p>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>      
 <?php
    }
?>

<?php
//caso registro excluido
if(isset($_GET['sucesso3'])){?>
<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
    <p> Registro removido com sucesso. </p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>      
<?php
}
?>