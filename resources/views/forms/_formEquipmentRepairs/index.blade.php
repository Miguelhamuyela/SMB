<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="equipmentName">Nome do Equipamento <small class="text-danger">*</small></label>
            <input type="text" name="equipmentName" id="equipmentName"
                value="{{ isset($equipmentRepair->equipmentName) ? $equipmentRepair->equipmentName : old('equipmentName') }}"
                class="form-control border rounded" placeholder="Nome do  Equipamento" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="model">Modelo <small class="text-danger">*</small></label>
            <input type="text" name="model" id="model"
                value="{{ isset($equipmentRepair->model) ? $equipmentRepair->model : old('model') }}"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="fk_Employees_id">funcionário <small class="text-danger">*</small></label>
            <select type="text" name="fk_Employees_id" id="fk_Employees_id" class="form-control border rounded"
                required>

                @if (isset($equipmentRepair->employees->name))
                    <option selected value="{{ $equipmentRepair->employees->id }}"
                        class="text-primary h6 bg-primary text-white" >
                {{         $equipmentRepair->employees->name }}
                    </option>
                @else
                    <option disabled selected>selecione uma outra opção</option>
                @endif
                @foreach ($employees as $item)
                    <option value="{{ $item->id }}" class="text-primary h6 bg-primary text-white" selected>

                        {{ $item->name }}
                    </option>
                @endforeach

            </select>
        </div>
    </div>

</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Cor <small class="text-danger">*</small></label>
            <input type="color" name="color" id="color"
                value="{{ isset($equipmentRepair->color) ? $equipmentRepair->color : old('color') }}"
                class="form-control border rounded" placeholder="Email do equipmentRepaire" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="image">Imgem <small class="text-danger">*</small></label>
            <input type="file" name="image" id="image"
                value="{{ isset($equipmentRepair->image) ? $equipmentRepair->tel : old('image') }}"
                class="form-control border rounded" required>
        </div>
    </div>

</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="problemDetails">Detalhes do Problema <small class="text-danger">*</small></label>
        <textarea name="problemDetails" rows="4" id="editor1" class="form-control border-secondary no-resize"
            placeholder="Descrição do curso">{{ isset($equipmentRepair->problemDetails) ? $equipmentRepair->problemDetails : old('problemDetails') }}
    </textarea>
    </div>
</div>
<!-- /.col -->
