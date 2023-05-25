<div class="row">
    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Nome <small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->name) ? $registrations->name : old('name') }}" type="text"
                name="name"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">Pai<small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->father) ? $registrations->father : old('father') }}" type="text"
                name="father"class="form-control" />
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="clienttype">Mãe<small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->mather) ? $registrations->mather : old('mather') }}" type="text"
                name="mather"class="form-control" />
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Data de Nascimento <small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->borthday) ? $registrations->borthday : old('borthday') }}"
                type="date" name="borthday"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">B.I<small class="text-danger">*</small></label>
            <input required
                value="{{ isset($registrations->identification) ? $registrations->identification : old('identification') }}"
                type="text" name="identification"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Arquivo de Identificação<small class="text-danger">*</small></label>
            <input required
                value="{{ isset($registrations->arquiv) ? $registrations->arquiv : old('arquiv') }}"
                type="text" name="arquiv"class="form-control" />
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-5">
        <div class="form-group">
            <label for="name">Endereço<small class="text-danger"></small></label>
            <input required value="{{ isset($registrations->address) ? $registrations->address : old('address') }}" type="text"
                name="address"class="form-control" />
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">Encarregado<small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->inCharge) ? $registrations->inCharge : old('inCharge') }}"
                type="text" name="inCharge"class="form-control" />
        </div>
    </div>

    <div class="col-md-3">
        <div class="form-group">
            <label for="clienttype">Telefone<small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->tel) ? $registrations->tel : old('tel') }}" type="text"
                name="tel"class="form-control" />
        </div>
    </div>

</div>
<div class="row">

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Nº de Recenseamento <small class="text-danger">*</small></label>
            <input required
                value="{{ isset($registrations->receseciament) ? $registrations->receseciament : old('receseciament') }}"
                type="text" name="receseciament"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Data de Emissão do Recenseamento <small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->censusdate) ? $registrations->censusdate : old('censusdate') }}"
                type="date" name="censusdate"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Data de Emissão (Bilhente de Identidade)<small class="text-danger">*</small></label>
            <input required value="{{ isset($registrations->dateIssue) ? $registrations->dateIssue : old('dateIssue') }}"
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
            <input required value="{{ isset($registrations->startYear) ? $registrations->startYear : old('startYear') }}"
                type="text" name="startYear"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Local de Nascimento(Natural)<small class="text-danger">*</small></label>
            <input required
                value="{{ isset($registrations->municipeName) ? $registrations->municipeName : old('municipeName') }}"
                type="text" name="municipeName"class="form-control" />
        </div>
    </div>

</div>


<!-- /.col -->
