<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Nº do Estudante
            <span class="login-danger"></span></label>
        <input required value="{{ isset($students->name) ? $students->name : old('name') }}" id="bi" name="bi"
            type="text" placeholder="Código do Estudante" class="form-control">
    </div>
</div>
<div class="col-12 col-sm-4">
    <div class="form-group local-forms">
        <label>Selecione o Nome do Estudante
            <span class="login-danger"></span></label>
        <select id="fullName" name="fk_students_id" placeholder="Nome do Estudane" class="form-control ">
        </select>
    </div>
</div>
<HR>
<br><br><br><br>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Selecione o Curso<small class="text-danger"></small></label>
            <select name="fk_course_id" class="form-control" aria-label="Default select example">
                <option disabled>Selecione o Curso</option>
                @foreach ($courses as $item)
                    <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="father">Selecionar o Tipo de Estudante<small class="text-danger"></small></label>
            <select required
                value="{{ isset($typeStudent->typeStudent) ? $typeStudent->typeStudent : old('typeStudent') }}"name="typeStudent"
                class="form-control border-secondary" name="select">
                @if (isset($typeStudent))
                    <option selected value="{{ $typeStudent->typeStudent }}">
                        {{ $typeStudent->typeStudent }}
                    </option>
                @endif
                @if (isset($typeStudent) && $typeStudent->typeStudent != 'Pago')
                    <option value="">Selecionar o Tipo de Estudante...</option>
                    <option value="Interno">Interno</option>
                    <option value="Externo">Externo</option>
                @else
                    <option value="">Selecionar o Tipo de Estudante...</option>
                    <option value="Interno">Interno</option>
                    <option value="Externo">Externo</option>
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="startYear">Ano Lectivo<small class="text-danger"></small></label>
            <input required
                value="{{ isset($student_years->startYear) ? $student_years->startYear : old('startYear') }}"
                type="text" name="startYear"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="level">Selecionar o Nível Académico<small class="text-danger"></small></label>
            <select required
                value="{{ isset($level->level) ? $level->level : old('level') }}"name="level"
                class="form-control border-secondary" name="select">
                @if (isset($genro))
                    <option selected value="{{ $level->level }}">
                        {{ $student_years->level }}
                    </option>
                @endif
                @if (isset($level) && $level->payment != 'Pago')
                    <option value="">Selecionar o Nível Académico...</option>
                    <option value="1º Ano">1º Ano</option>
                    <option value="2º Ano">2º Ano</option>
                    <option value="3º Ano">3º Ano</option>
                    <option value="4º Ano">4º Ano</option>
                    <option value="5º Ano">5º Ano</option>
                @else
                    <option value="">Selecionar o Nível Académico...</option>
                    <option value="1º Ano">1º Ano</option>
                    <option value="2º Ano">2º Ano</option>
                    <option value="3º Ano">3º Ano</option>
                    <option value="4º Ano">4º Ano</option>
                    <option value="5º Ano">5º Ano</option>
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Selecionar o Periódo...<small class="text-danger"></small></label>
            <select required value="{{ isset($period->period) ? $period->period : old('period') }}"name="period"
                class="form-control border-secondary" name="select">
                @if (isset($period))
                    <option selected value="{{ $period->period }}">
                        {{ $period->period }}
                    </option>
                @endif
                @if (isset($period) && $period->period != 'Pago')
                    <option value="">Selecionar o Periódo...</option>
                    <option value="manha">manha</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                @else
                    <option value="">Selecionar o Periódo...</option>
                    <option value="manha">manha</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                @endif
            </select>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="start">Início do Ano Lectivo<small class="text-danger"></small></label>
            <input required
                value="{{ isset($student_years->start) ? $student_years->start : old('start') }}"
                type="text" name="start"class="form-control" />
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="address">Endereço<small class="text-danger"></small></label>
            <input required
                value="{{ isset($student_years->address	) ? $student_years->address	 : old('address	') }}"
                type="text" name="address"class="form-control" />
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
        $('#bi').on('change', function() {
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
            $('#fullName').empty();
            $('#fullName').append(`<option value="0" disabled selected>Processando...</option>`);
            let _token = $('meta[name="csrf-token"]').attr('content');
            $.ajax({
                data: {
                    _token: _token
                },
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                crossDomain: true,
                type: 'GET',


                url: 'estudantes/' + id,
                success: function(response) {
                    var response = JSON.parse(response);
                    $('#fullName').empty();
                    $('#fullName').append(

                    );
                    response.forEach(element => {
                        $('#fullName').append(
                            `<option selected value="${element['id']}">${element['name']}</option>`
                        );
                    });

                    ;
                }
            });
        });
    })
</script>
