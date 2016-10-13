<div class="container">

  <div class="page-header">
    <h4>Associado</h4>
  </div>

  <div class="well">
    <div class="dl-horizontal">

      <dt>ID</dt>
      <dd><?= $associate->idAssociated ?></dd>

      <dt>Nome</dt>
      <dd><?= $associate->name_assoc ?></dd>

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
      href="<?= base_url('associated/edit/'.$associate->idAssociated) ?>"><span class="glyphicon glyphicon-edit"></span> Alterar</a>
  </div>

</div>
