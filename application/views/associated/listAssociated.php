
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
          <td><?= $associate['id_associate'] ?></td>
          <td><?= $associate['name_associate'] ?></td>
          <td><?= $associate['birth_date'] ?></td>
          <td><?= $associate['rg'] ?></td>
          <td><?= $associate['cpf'] ?></td>
          <td>
            <a class="btn btn-info" href="<?= base_url('associated-detail/'.$associate['id_associate']) ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
            <a class="btn btn-primary" href="<?= base_url('associated/edit/'.$associate['id_associate']) ?>"><span class="glyphicon glyphicon-edit"></span></a>
          </td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>