<div class="container">

  <div class="page-header">
    <h4>Associado</h4>
  </div>

  <div class="well">
    <div class="dl-horizontal">

      <dt>ID</dt>
      <dd><?= $associate->id_associate ?></dd>

      <dt>Nome</dt>
      <dd><?= $associate->name_associate ?></dd>

      <dt>Data de Nascimento</dt>
      <dd><?= $associate->birth_date ?></dd>

      <dt>RG</dt>
      <dd><?= $associate->rg ?></dd>

      <dt>CPF</dt>
      <dd><?= $associate->cpf ?></dd>

      <dt>Endereço</dt>
      <dd>
          <?= $associate->street .', '. $associate->number .', bairro '.$associate->neighborhood ?>
      </dd>
    </div>
    <br>
    <a class="btn btn-info" href="#" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
    <a class="btn btn-primary" href="<?= base_url('associated/edit/'.$associate->id_associate) ?>"><span class="glyphicon glyphicon-edit"></span> Alterar</a>
    <div class="pull-right">
      <a id="<?= $associate->id_associate ?>" data-toggle="modal" data-target="#inactive_modal" class="btn btn-warning" href="#"><span class="glyphicon glyphicon-ban-circle"></span> Inativar</a>
      <a id="<?= $associate->id_associate ?>" data-toggle="modal" data-target="#delete_modal" class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash"></span> Apagar</a>
    </div>
  </div>

</div>

<script type="text/javascript">
  $(document).ready(function(e) {
    var idAssociate;
    $('.pull-right').on('click', '.btn-danger', function() {
      idAssociate = $(this).attr('id');
      console.log(idAssociate);
    });

    $('#confirmDelete').on('click', function() {
      if ( !isNaN(idAssociate)) {
        $.ajax({
          url: '<?= base_url('associated/delete/') ?>'+ idAssociate,
          type: "POST",
          success: function(data) {
            console.log(data);
          },
          error: function(err) {
            console.log(err);
          }
        })
      }
    });
  });
</script>

<div class="modal fade" id="delete_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Confirmar Exclusão</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja apagar este associado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
        <button id="confirmDelete" type="button" class="btn btn-danger" data-dismiss="modal">Apagar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="inactive_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Confirmar Inatividade</h4>
      </div>
      <div class="modal-body">
        <p>Tem certeza que deseja inativar este associado?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
        <button id="confirmInactive" type="button" class="btn btn-warning" data-dismiss="modal">Inativar</button>
      </div>
    </div>
  </div>
</div>
