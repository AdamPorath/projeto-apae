
<div class="container">
  <div class="page-header">
    <h4>Associados</h4>
    <a class="btn btn-success" href="<?= base_url('associated/new') ?>">Novo Associado <span class="glyphicon glyphicon-plus"></span></a>
  </div>

  <div class="well well-lg">
    <table class="table table-responsive table-striped table-hover">
      <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Data Nascimento</td>
          <td>RG</td>
          <td>CPF</td>
          <td>Ações</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach($associated as $associate): ?>
        <tr>
          <td><?= $associate['idAssociated'] ?></td>
          <td><?= $associate['name_assoc'] ?></td>
          <td><?= $associate['birth_date'] ?></td>
          <td><?= $associate['rg'] ?></td>
          <td><?= $associate['cpf'] ?></td>
          <td>
            <a class="btn btn-info" href="<?= base_url('associated-detail/'.$associate['idAssociated']) ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
            <a class="btn btn-primary" href="<?= base_url('associated/edit/'.$associate['idAssociated']) ?>"><span class="glyphicon glyphicon-edit"></span></a>
            <a id="<?= $associate['idAssociated'] ?>" data-toggle="modal" data-target="#modal" class="btn btn-danger" href="#"><span class="glyphicon glyphicon-trash"></span></a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
<script src="<?= base_url('assets/js/jquery-3.1.1.min.js');?>"></script>

<script type="text/javascript">
  $(document).ready(function(e) {
    var idAssociate;
    $('.table').on('click', '.btn-danger', function() {
      idAssociate = $(this).attr('id');
    });

    $('#confirmDelete').on('click', function() {
      $.ajax({
        url: 'associated/delete/'+ idAssociate,
        type: "POST",
        success: function(data) {

        },
        error: function(err) {
          alert(err);
        }
      })
    });
  });
</script>

<div class="modal fade" id="modal">
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
