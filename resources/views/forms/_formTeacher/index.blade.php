<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Nome Completo<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->name) ? $teachers->name : old('name') }}" type="text"
                name="name"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="father">Nome do Pai<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->father) ? $teachers->father : old('father') }}" type="text"
                name="father"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="mother">Nome da Mâe<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->mother) ? $teachers->mother : old('mother') }}" type="text"
                name="mother"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Telefone<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->tel) ? $teachers->tel : old('tel') }}"
                type="text" name="tel"class="form-control" />
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="biPasst">Nº B.I/Passaporte<small class="text-danger"></small></label>
            <input required
                value="{{ isset($teachers->biPasst) ? $teachers->biPasst : old('biPasst') }}"
                type="text" name="biPasst"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="arquiv">Arquivo de Identificação<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->arquiv) ? $teachers->arquiv : old('arquiv') }}" type="text"
                name="arquiv"class="form-control" />
        </div>
    </div>
</div>





<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Email<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->email) ? $teachers->email : old('email') }}" type="email"
                name="email"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="father">Data de Nascimento<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->birthDate) ? $teachers->birthDate : old('birthDate') }}" type="date"
                name="birthDate"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="country">País<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->country) ? $teachers->country : old('country') }}" type="text"
                name="country"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="city">Cidade<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->city) ? $teachers->city : old('city') }}"
                type="text" name="city"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="academicGrau">Nível Académico<small class="text-danger"></small></label>
            <input required
                value="{{ isset($teachers->academicGrau) ? $teachers->academicGrau : old('academicGrau') }}"
                type="text" name="academicGrau"class="form-control" />
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="especiality">Arquivo de Identificação<small class="text-danger"></small></label>
            <input required value="{{ isset($teachers->arquiv) ? $teachers->especiality : old('especiality') }}" type="text"
                name="especiality"class="form-control" />
        </div>
    </div>
</div>


<div class="col-md-4">
    <div class="form-group">
        <label for="email">Selecionar o Genero...<small class="text-danger"></small></label>
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
        <label for="address">Endereço<small class="text-danger"></small></label>
        <input required value="{{ isset($teachers->address) ? $teachers->address : old('address') }}" type="text"
            name="address"class="form-control" />
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="address">Ano Lectivo<small class="text-danger"></small></label>
        <input required value="{{ isset($teachers->startYear) ? $teachers->startYear : old('startYear') }}" type="text"
            name="startYear"class="form-control" />
    </div>
</div>

<div class="col-md-12">
    <label for="Detalhes Sobre a Startup">Experiência<small
            class="text-danger"></small></label>
    <textarea class="form-control rounded" name="experience" required
        style="min-height:70px; min-width:100%">{{ isset($teachers->experience) ? $teachers->experience : old('obs') }}</textarea>
</div>
