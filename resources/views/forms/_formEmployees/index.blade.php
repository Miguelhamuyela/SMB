<div class="row">


    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Nome do Funcionário <small class="text-danger">*</small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($employee->name) ? $employee->name : old('name') }}"
                class="form-control border rounded" placeholder="Nome do Funcionário" required>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label for="nif">Telefone <small class="text-danger">*</small></label>
            <input type="text" name="tel" id="tel" value="{{ isset($employee->nif) ? $employee->nif : old('nif') }}"
                class="form-control border rounded" placeholder="Nº de Telefone" required>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Email <small class="text-danger">*</small></label>
            <input type="email" name="email" id="email"
                value="{{ isset($employee->email) ? $employee->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="occupation">Ocupação <small class="text-danger">*</small></label>
            <input type="text" name="occupation" id="occupation"
                value="{{ isset($employee->occupation) ? $employee->occupation : old('occupation') }}"
                class="form-control border rounded" placeholder="Ocupação" required>
        </div>
    </div>


    <div class="col-md-3">
        <div class="form-group">
            <label for="nif">NIF <small class="text-danger">*</small></label>
            <input type="text" name="nif" id="nif" value="{{ isset($employee->nif) ? $employee->nif : old('nif') }}"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div>




</div>

<div class="row">

    <div class="col-md-6">
        <div class="form-group">
            <label for="fk_departament">Departamento <small class="text-danger">*</small></label>

            <select type="text" name="fk_departament" id="sub_category_name" class="form-control border rounded"
                required>

                @if (isset($employee->departament))
                    <option value="{{ $employee->departament }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $employee->departament }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif

                @foreach ($departaments as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->department }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="Acrónimo">Acrónimo <small class="text-danger">*</small></label>

            <select id="sub_category" type="text" name="acronym" id="acronym" class="form-control border rounded"
                required>

                @if (isset($employee->acronym))
                    <option value="{{ $employee->acronym }}" class="text-primary h6 bg-primary text-white" selected>
                        {{ $employee->acronym }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option value="DMICD">
                    DMICD
                </option>


            </select>

        </div>
    </div>

</div>


<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label for="Foto">Foto <small class="text-danger"></small></label>
            <input type="file" name="photoEmployee"
                value="{{ isset($employee->photoEmployee) ? $employee->photoEmployee : old('photoEmployee') }}"
                id="photoEmployee" class="form-control border rounded">
        </div>
    </div>

</div>

@section('jQueryAPI')
    <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
@endsection
<script src="http://code.jquery.com/jquery-3.4.1.js"></script>
<script src="/dashboard/bundles/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        jQuery.support.cors = true;
        let _token = $('meta[name="csrf-token"]').attr('content');
        $('#sub_category_name').on('change', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.support.cors = true;
            $.ajax({
                // …
                crossDomain: true,
            });
            let id = $(this).val();
            $('#sub_category').empty();
            $('#sub_category').append(`<option value="0" disabled selected>Processando...</option>`);
            $.ajax({
                data: {
                    _token: _token
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',

                crossDomain: true,
                url: 'GetSubCatAgainstMainCatEdit/' +
                    id,
                success: function(response) {
                    var response = JSON.parse(response);
                    $('#sub_category').empty();
                    $('#sub_category').append(

                    );
                    $('#sub_category').append(
                        `<option selected value="${response['acronym']}">${response['acronym']}</option>`
                    );
                }
            });
        });
    });
</script>
