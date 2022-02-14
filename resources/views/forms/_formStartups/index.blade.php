<div class="row">

  <div class="col-md-8">
    <div class="form-group">
        <label for="name">Nome da Startup <small class="text-danger">*</small></label>
        <input type="text" name="name" id="name" value="{{ isset($startup->name) ? $startup->name: old('name') }}"
            class="form-control border rounded" placeholder="Nome da startup " required>
    </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label for="nif">NIF <small class="text-danger">*</small></label>
      <input type="text" name="nif" id="nif" value="{{ isset($startup->nif) ? $startup->nif: old('nif') }}"
          class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
  </div>
</div>

</div>


<div class="row">

<div class="col-md-3">
  <div class="form-group">
      <label for="email">Email <small class="text-danger">*</small></label>
      <input type="email" name="email" id="email" value="{{ isset($startup->email) ? $startup->email: old('email') }}"
          class="form-control border rounded" placeholder="Email" required>
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
      <label for="tel">Telefone <small class="text-danger">*</small></label>
      <input type="text" name="tel" id="tel" value="{{ isset($startup->tel) ? $startup->tel: old('tel') }}"
          class="form-control border rounded" placeholder="Telefone" required>
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
      <label for="tel">Sala <small class="text-danger">*</small></label>
      <input type="text" name="roomName" id="roomName" value="{{ isset($startup->roomName) ? $startup->roomName: old('roomName') }}"
          class="form-control border rounded" placeholder="Sala " required>
  </div>
</div>

<div class="col-md-3">
  <div class="form-group">
      <label for="site">Site </label>
      <input type="text" name="site" id="site" value="{{ isset($startup->site) ? $startup->site: old('site') }}"
          class="form-control border rounded" placeholder="Site ">
  </div>
</div>
</div>
<!-- /.col -->

