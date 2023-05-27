<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Nome <small class="text-danger">*</small></label>
            <input required value="{{ isset($students->name) ? $students->name : old('name') }}" type="text"
                name="name"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">Pai<small class="text-danger">*</small></label>
            <input required value="{{ isset($students->father) ? $students->father : old('father') }}" type="text"
                name="father"class="form-control" />
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="clienttype">Mãe<small class="text-danger">*</small></label>
            <input required value="{{ isset($students->mather) ? $students->mather : old('mather') }}" type="text"
                name="mather"class="form-control" />
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Data de Nascimento <small class="text-danger">*</small></label>
            <input required value="{{ isset($students->borthday) ? $students->borthday : old('borthday') }}"
                type="date" name="borthday"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">B.I<small class="text-danger">*</small></label>
            <input required
                value="{{ isset($students->identification) ? $students->identification : old('identification') }}"
                type="text" name="identification"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Arquivo de Identificação<small class="text-danger">*</small></label>
            <input required value="{{ isset($students->arquiv) ? $students->arquiv : old('arquiv') }}" type="text"
                name="arquiv"class="form-control" />
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Endereço<small class="text-danger"></small></label>
            <input required value="{{ isset($students->address) ? $students->address : old('address') }}" type="text"
                name="address"class="form-control" />
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">Encarregado<small class="text-danger">*</small></label>
            <input required value="{{ isset($students->inCharge) ? $students->inCharge : old('inCharge') }}"
                type="text" name="inCharge"class="form-control" />
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="clienttype">Telefone<small class="text-danger">*</small></label>
            <input required value="{{ isset($students->tel) ? $students->tel : old('tel') }}" type="text"
                name="tel"class="form-control" />
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Nº de Recenseamento <small class="text-danger">*</small></label>
            <input required
                value="{{ isset($students->receseciament) ? $students->receseciament : old('receseciament') }}"
                type="text" name="receseciament"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Data de Emissão do Recenseamento <small class="text-danger">*</small></label>
            <input required value="{{ isset($students->censusdate) ? $students->censusdate : old('censusdate') }}"
                type="date" name="censusdate"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Data de Emissão (Bilhente de Identidade)<small class="text-danger">*</small></label>
            <input required value="{{ isset($students->dateIssue) ? $students->dateIssue : old('dateIssue') }}"
                type="date" name="dateIssue"class="form-control" />
        </div>
    </div>

</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Selecionar o Genero...<small class="text-danger">*</small></label>
            <select required value="{{ isset($genro->genro) ? $genro->genro : old('genro') }}"name="genro"
                class="form-control border-secondary" name="select">
                @if (isset($genro))
                    <option selected value="{{ $genro->genro }}">{{ $genro->genro }}
                    </option>
                @endif
                @if (isset($genro) && $payment->payment != 'Pago')
                    <option value="">Selecionar o Genero...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                @else
                    <option value="">Selecionar o Genero...</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                @endif
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Ano Lectivo<small class="text-danger">*</small></label>
            <input required value="{{ isset($students->startYear) ? $students->startYear : old('startYear') }}"
                type="text" name="startYear"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Local de Nascimento(Natural)<small class="text-danger">*</small></label>
            <input required
                value="{{ isset($students->municipeName) ? $students->municipeName : old('municipeName') }}"
                type="text" name="municipeName"class="form-control" />
        </div>
    </div>



    <div class="col-md-6">
        <div class="form-group">
            <label for="tel">Selecione o Curso<small class="text-danger">*</small></label>
            <select name="fk_course_id" class="form-control" aria-label="Default select example">
                <option disabled>Selecione o Curso</option>
                @foreach ($courses as $item)
                    <option value="{{ $item->id }}">{{ $item->courseName }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="tel">Selecione a Provincia(Natural)<small class="text-danger">*</small></label>
            <select name="fk_provinces_id" class="form-control" aria-label="Default select example">
                <option disabled>Selecione a Provincia</option>
                @foreach ($provinces as $item)
                    <option value="{{ $item->id }}">{{ $item->proviceName }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
