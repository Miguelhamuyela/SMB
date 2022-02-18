<div class="row">

    <div class="col-md-5">
      <div class="form-group">
          <label for="name">Nome do Equipamento <small class="text-danger">*</small></label>
          <input type="text" name="name" id="name" value="{{ isset($client->name) ? $client->name: old('name') }}"
              class="form-control border rounded" placeholder="Nome do Cliente" required>
      </div>
  </div>


  <div class="col-md-4">
    <div class="form-group">
        <label for="nif">Modelo <small class="text-danger">*</small></label>
        <input type="text" name="nif" id="nif" value="{{ isset($client->nif) ? $client->nif: old('nif') }}"
            class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
    </div>
  </div>

  <div class="col-md-3">
    <div class="form-group">
      <label for="clienttype">funcionário  <small class="text-danger">*</small></label>
      <select type="text" name="clienttype" id="clienttype" class="form-control border rounded" required>

          @if (isset($client->clienttype))
              <option value="{{ $client->clienttype }}" class="text-primary h6 bg-primary text-white" selected>
                  {{ $client->clienttype }}
              </option>
          @else
              <option disabled selected>selecione uma outra opção</option>
          @endif
@foreach ($employees as $item)
<option value="{{ $item->id }}">{{ $item->name }}</option>

@endforeach

      </select>
  </div>
  </div>

  </div>


  <div class="row">

  <div class="col-md-6">
    <div class="form-group">
        <label for="email">Cor <small class="text-danger">*</small></label>
        <input type="color" name="email" id="email" value="{{ isset($client->email) ? $client->email: old('email') }}"
            class="form-control border rounded" placeholder="Email do Cliente" required>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
        <label for="tel">Imgem <small class="text-danger">*</small></label>
        <input type="file" name="tel" id="tel" value="{{ isset($client->tel) ? $client->tel: old('tel') }}"
            class="form-control border rounded" placeholder="Telefone do Cliente" required>
    </div>
  </div>



  </div>
  <div class="col-md-12">
    <div class="form-group">
        <label for="tel">Detalhe do Problema <small class="text-danger">*</small></label>
        <textarea name="description" rows="4" id="editor1" class="form-control border-secondary no-resize"
        placeholder="Descrição do curso">{{ isset($course->description) ? $course->description : old('description') }}
    </textarea>
    </div>
  </div>
  <!-- /.col -->

