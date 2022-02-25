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

    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Email <small class="text-danger">*</small></label>
            <input type="email" name="email" id="email"
                value="{{ isset($employee->email) ? $employee->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="nif">NIF <small class="text-danger">*</small></label>
            <input type="text" name="nif" id="nif" value="{{ isset($employee->nif) ? $employee->nif : old('nif') }}"
                class="form-control border rounded" placeholder="Nº de Identificação Fiscal" required>
        </div>
    </div>


    <div class="col-md-4">
        <div class="form-group">
            <label for="photoEmployee">Foto <small class="text-danger"></small></label>
            <input type="file" name="photoEmployee" id="photoEmployee" class="form-control border rounded">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="occupation">Ocupação <small class="text-danger">*</small></label>
            <input type="text" name="occupation" id="occupation"
                value="{{ isset($employee->occupation) ? $employee->occupation : old('occupation') }}"
                class="form-control border rounded" placeholder="Ocupação" required>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="departament">Departamento <small class="text-danger">*</small></label>

                <select type="text" name="departament" id="departament" class="form-control border rounded"
                required>

                @if (isset($employee->departament))
                    <option value="{{ $employee->departament }}"
                        class="text-primary h6 bg-primary text-white" selected>
                        {{ $employee->departament  }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                    <option value="Departamento de Administração de Sistemas, Redes e Comunicações" >
                        Departamento de Administração de Sistemas, Redes e Comunicações
                    </option>

                    <option value="Departamento de Gestão de Infra-Estrutura Tecnológica e Serviços Partilhados" >
                        Departamento de Gestão de Infra-Estrutura Tecnológica e Serviços Partilhados
                    </option>
                    <option value="Departamento de Massificação, Inclusão e Conteúdo Digital" >
                        Departamento de Massificação, Inclusão e Conteúdo Digital
                    </option>
                    <option value="Departamento de Cibersegurança, Chaves Públicas e Carimbo do Tempo" >
                        Departamento de Cibersegurança, Chaves Públicas e Carimbo do Tempo
                    </option>
                    <option value="Departamento de Apoio ao Director Geral" >
                        Departamento de Apoio ao Director Geral
                    </option>

                    <option value="Departamento de Administração e Serviços Gerais" >
                        Departamento de Administração e Serviços Gerais
                    </option>
                    <option value="Departamento de Comunicação, Inovação, Tecnologia e Modernização dos Serviços" >
                        Departamento de Comunicação, Inovação, Tecnologia e Modernização dos Serviços
                    </option>


            </select>

        </div>
    </div>
