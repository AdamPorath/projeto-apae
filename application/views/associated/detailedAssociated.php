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
    <a class="btn btn-primary"
      href="<?= base_url('associated/edit/'.$associate->id_associate) ?>"><span class="glyphicon glyphicon-edit"></span> Alterar</a>
  </div>

</div>
