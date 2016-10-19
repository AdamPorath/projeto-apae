<div class="container">
  <div class="page-header">
    <h4><?= $title ?></h4>
  </div>
  <div id="validation_errors" class="container row">
    <?= validation_errors('<div class="col-sm-2 alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>', '</div>') ?>
  </div>
  <div class="well row col-sm-12">
    <form>


      <div class="row col-sm-6">
          <div class="form-group row">
            <label for="id_associate" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-6">
              <input type="number" readonly
                class="form-control"
                id="id_associate" name="id_associate"
                value="<?= set_value('id_associate', isset($associate->id_associate) ? $associate->id_associate:''); ?>">
            </div>
          </div>

          <div class="form-group row">
            <label for="name_associate" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-6">
              <input type="text"
                class="form-control"
                id="name_associate" name="name_associate"
                value="<?= set_value('name_associate', isset($associate->name_associate) ? $associate->name_associate:''); ?>"
                placeholder="Nome Associado">
            </div>
          </div>

          <div class="form-group row">
            <label for="birth_date" class="col-sm-2 col-form-label">Aniversário</label>
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
      </div>

      <div class="row col-sm-6">
        <label class="lead">Contatos</label>
        <a data-toggle="modal" data-target="#contact_modal" class="label label-success" href="#"><span class="glyphicon glyphicon-plus"></span> Contato</a>
        <div id="contacts" class="well"></div>
      </div>

      <div class="pull-right">
        <a class="btn btn-info" href="#" onclick="history.back()"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a>
        <a id="create_associate" class="btn btn-success"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</a>
      </div>

    </form>
  </div>

</div>


<div class="modal fade" id="contact_modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title">Novo contato</h4>
      </div>
      <div class="modal-body">
        <div class="form-group row">
          <label for="contact_description" class="col-sm-2 col-form-label">Tipo</label>
          <div class="col-sm-6">
            <select class="" name="contact_type" id="contact_type">
              <?php foreach($contact_types as $type): ?>
                <option value="<?= $type["id_contact_type"] ?>" data-name="<?= $type["description_contact_type"] ?>"><?= $type["description_contact_type"] ?></option>
              <?php endforeach ?>
            </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="contact_description" class="col-sm-2 col-form-label">Descrição</label>
          <div class="col-sm-6">
            <input type="text"
              class="form-control"
              id="contact_description" name="contact_description"
              value=""
              placeholder="Descrição">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Voltar</button>
        <button id="create_contact" type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('#contact_modal').ready(function() {
    var id_contact_type,
        name_contact_type,
        contacts = [];

    $('#create_contact').on("click", function() {

      contact_value = $('#contact_description').val();
      id_contact_type = $("#contact_type").val();
      name_contact_type = $("#contact_type").find("option[value='"+id_contact_type+"']").data("name");


      var $contacts = $('#contacts');

      $div = $('<div>').attr({class: "contact"});
      $btn = $('<button>').attr({class: "close", type: "button"});
      $span = $('<span>').html("&times;");
      $btn.append($span);
      $btn[0].onclick = function() {
          this.parentNode.parentNode.removeChild(this.parentNode);
      };
      $div.append($btn);
      $div.append("<strong>"+name_contact_type+": </strong>"+contact_value);
      $contacts.append($div);
      $div.data("type",id_contact_type);
      $div.data("value",contact_value);
    });
  });

  $("#create_associate").on("click", function() {
    var contacts = [],
        contact;
    $(".contact").each(function(i, el) {
      contacts[i] = {type:$(el).data("type"),
                     value:$(el).data("value")};
    });



    var associatedObj= [];
    associatedObj['contacts'] = contacts;

    $("#contents").find("form").serializeArray().forEach(function(el, index, arr){
      associatedObj[el.name] = el.value;
    });

    console.log(associatedObj);



    $.ajax({
      url: "associated/create",
      type: "POST",
      data: {
        asssociated: associatedObj
      },
      success: function(data) {

      },
      error: function(err) {
        console.log(err);
      }
    });
  });

</script>
