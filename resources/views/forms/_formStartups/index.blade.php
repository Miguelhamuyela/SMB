<div class="row mb-2">
    <div class="col-8">
        <label class="text-muted form-label" for="startup">Nome</label>
      <input type="text" name="name" value="{{ isset($startup->name) ? $startup->name: old('name') }}" class="form-control bg-secondary border-secondary  rounded" placeholder="Nome *" aria-label="First name">
    </div>

    <div class="col-4">
        <label class="text-muted form-label" for="nif">NIF</label>
        <input type="text" name="nif" value="{{ isset($startup->nif) ? $startup->nif: old('nif') }}" class="form-control bg-secondary border-secondary rounded" placeholder="NIF da startup *" aria-label="Last name">
      </div>


</div>

<div class="row mb-2">
    <div class="col-6">
        <label class="text-muted form-label" for="nif">Email</label>
        <input type="email" name="email" value="{{ isset($startup->email) ? $startup->email: old('email') }}" class="form-control bg-secondary border-secondary rounded" placeholder="Email  *" aria-label="Last name">
      </div>

      <div class="col-6">
        <label class="text-muted form-label" for="nif">Telefone</label>
        <input type="text" name="tel" value="{{ isset($startup->tel) ? $startup->tel: old('tel') }}" class="form-control bg-secondary border-secondary rounded" placeholder="Número de Telefone *" aria-label="Last name">
      </div>

</div>


<div class="row">

        <div class="col-4">
        <label class="text-muted form-label" for="nif">Sala</label>
        <input type="text" name="roomName" value="{{ isset($startup->roomName) ? $startup->roomName: old('roomName') }}" class="form-control bg-secondary border border-secondary rounded" placeholder="Sala *" aria-label="Last name">
      </div>

      <div class="col-8">
        <label class="text-muted form-label" for="nif">Site</label>
          <input type="text" value="{{ isset($startup->site) ? $startup->site: old('site') }}" name="site" class="form-control bg-secondary border border-secondary rounded" placeholder="Site da startup *" aria-label="Last name">
        </div>

</div>