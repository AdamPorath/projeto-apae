<div class="container">
  <div class="page-header">
    <h4><?= $title ?></h4>
  </div>

  <div class="well">
    <?= validation_errors() ?>
    <?= form_open($action) ?>

      <div class="form-group row">
        <label for="idAssociated" class="col-sm-2 col-form-label">ID</label>
        <div class="col-sm-6">
          <input type="number" readonly
            class="form-control"
            id="idAssociated" name="idAssociated"
            value="<?= set_value('idAssociated', isset($associate->idAssociated) ? $associate->idAssociated:''); ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="name_assoc" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-6">
          <input type="text"
            class="form-control"
            id="name_assoc" name="name_assoc"
            value="<?= set_value('name_assoc', isset($associate->name_assoc) ? $associate->name_assoc:''); ?>"
            placeholder="Nome Associado">
        </div>
      </div>

      <div class="form-group row">
        <label for="birth_date" class="col-sm-2 col-form-label">Data de Nascimento</label>
        <div class="col-sm-6">
          <input type="date"
            class="form-control"
            id="birth_date" name="birth_date"
            value="<?= set_value('birth_date', isset($associate->birth_date) ? $associate->birth_date:''); ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="rg" class="col-sm-2 col-form-label">RG</label>
        <div class="col-sm-6">
          <input type="number"
            class="form-control"
            id="rg" name="rg"
            placeholder="RG"
            value="<?= set_value('rg', isset($associate->rg) ? $associate->rg:''); ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
        <div class="col-sm-6">
          <input type="number"
            class="form-control"
            id="cpf" name="cpf"
            placeholder="CPF"
            value="<?= set_value('cpf', isset($associate->cpf) ? $associate->cpf:''); ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="street" class="col-sm-2 col-form-label">Rua</label>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="street" name="street"
            placeholder="Rua"
            value="<?= set_value('street', isset($associate->street) ? $associate->street:''); ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="number" class="col-sm-2 col-form-label">Número</label>
        <div class="col-sm-4">
          <input type="number"
            class="form-control"
            id="number" name="number"
            placeholder="Número"
            value="<?= set_value('number', isset($associate->number) ? $associate->number:''); ?>">
        </div>
      </div>

      <div class="form-group row">
        <label for="neighborhood" class="col-sm-2 col-form-label">Bairro</label>
        <div class="col-sm-4">
          <input type="text"
            class="form-control"
            id="neighborhood" name="neighborhood"
            placeholder="Bairro"
            value="<?= set_value('neighborhood', isset($associate->neighborhood) ? $associate->neighborhood:''); ?>">
        </div>
      </div>

      <a class="btn btn-info" href="#" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
      <button type="submit" class="btn btn-success" href="#"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>

    </form>
  </div>

</div>
