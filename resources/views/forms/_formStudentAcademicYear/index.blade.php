<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">

            <div class="col-auto text-end float-end ms-auto download-grp">
                <a href="{{ route('admin.student_academic_years.index') }}" class="btn btn-outline-primary me-2"><i
                        class=""></i> Clica aqui Para ver a Lista dos Matriculados</a>
                <a href="{{ route('admin.student_academic_years.create') }}"></i></a>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    <hr>
                    <h3 class="page-title">Adicionar Nova Matricula
                        <hr>
                    </h3>
                    <hr>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <br><br>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nº do Estudante
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($students->name) ? $students->name : old('name') }}"
                                            id="bi" name="bi" type="text"
                                            placeholder="Código do Estudante" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Selecione o Nome do Estudante
                                            <span class="login-danger"></span></label>
                                        <select id="fullName" name="fk_students_id" placeholder="Nome do Estudane"
                                            class="form-control ">
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Selecione o Curso
                                            <span class="login-danger"></span></label>
                                        <select name="fk_course_id" class="form-control"
                                            aria-label="Default select example">
                                            <option disabled>Selecione o Curso</option>
                                            @foreach ($courses as $item)
                                                <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Tipo de Estudante
                                            <span class="login-danger"></span></label>
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
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Telefone
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_academic_years->phone) ? $student_academic_years->phone : old('phone') }}"
                                            type="text" name="phone"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Telefone Altenativa<span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_academic_years->phoneAlt) ? $student_academic_years->phoneAlt : old('phoneAlt') }}"
                                            type="text" name="phoneAlt"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Ano Lectivo
                                            <span class="login-danger"></span></label>
                                        <input required
                                            value="{{ isset($student_academic_years->startYear) ? $student_academic_years->startYear : old('startYear') }}"
                                            type="text" name="startYear"class="form-control" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Nível Académico
                                            <span class="login-danger"></span></label>
                                        <select required
                                            value="{{ isset($academiclevel->academiclevel) ? $academiclevel->academiclevel : old('academiclevel') }}"name="academiclevel"
                                            class="form-control border-secondary" name="select">
                                            @if (isset($genro))
                                                <option selected value="{{ $academiclevel->academiclevel }}">
                                                    {{ $academiclevel->academiclevel }}
                                                </option>
                                            @endif
                                            @if (isset($academiclevel) && $academiclevel->payment != 'Pago')
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


                                <div class="col-12 col-sm-4">
                                    <div class="form-group local-forms">
                                        <label>Selecione o Periodo
                                            <span class="login-danger"></span></label>
                                        <select required
                                            value="{{ isset($period->period) ? $period->period : old('period') }}"name="period"
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
                                <div class="col-12">
                                    <div class="student-submit">
                                        <button type="submit" class="btn btn-primary">
                                            GUARDAR
                                        </button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
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
