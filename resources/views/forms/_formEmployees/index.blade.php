<div class="row">


    <div class="col-md-6">
      <div class="form-group">
          <label for="name">Nome do Funcionário <small class="text-danger">*</small></label>
          <input type="text" name="name" id="name" value="{{ isset($employee->name) ? $employee->name: old('name') }}"
              class="form-control border rounded" placeholder="Nome do Funcionário" required>
      </div>
    </div>


  <div class="col-md-6">
    <div class="form-group">
        <label for="nif">Telefone <small class="text-danger">*</small></label>
        <input type="text" name="tel" id="tel" value="{{ isset($employee->nif) ? $employee->nif: old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Telefone" required>
    </div>
  </div>



    <div class="col-md-6">
      <div class="form-group">
          <label for="name">Email <small class="text-danger">*</small></label>
          <input type="email" name="email" id="email" value="{{ isset($employee->name) ? $employee->name: old('name') }}"
              class="form-control border rounded" placeholder="Nome do employeee" required>
      </div>
    </div>


  <div class="col-md-6">
    <div class="form-group">
        <label for="nif">NIF <small class="text-danger">*</small></label>
        <input type="text" name="nif" id="nif" value="{{ isset($employee->nif) ? $employee->nif: old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
    </div>
  </div>


  <!-- /.col -->

