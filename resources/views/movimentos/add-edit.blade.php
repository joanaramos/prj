@extends('master')

@section('title', 'Adicionar Movimento')

@section('content')



    {{csrf_field()}}
    <br>
    <div class="form-group">
        <label for="inputData">Data</label>
        <input
                type="date" class="form-control"
                name="movimento" id="inputData"
                value="{{old('data', $movimento->data)}}" />

    </div>

    <div class="form-group">
        <label for="inputHoraDescolagem">Hora Descolagem</label>
        <input
                type="time" class="form-control"
                name="hora_descolagem" id="inputHoraDescolagem"
                value="{{old('hora_descolagem', $movimento->hora_descolagem)}}" />

    </div>

    <div class="form-group">
        <label for="inputHoraAterragem">Hora Aterragem</label>
        <input
                type="time" class="form-control"
                name="hora_aterragem" id="inputHoraAterragem"
                value="{{old('hora_aterragem', $movimento->hora_aterragem)}}" />

    </div>

    <div class="form-group">

    </div>
    <div class="form-group">
        <label for="inputNumDiario">Nº diario</label>
        <input
                type="number" class="form-control"
                name="num_diario" id="inputNumDiario"
                value="{{old('num_diario', $movimento->num_diario)}}" />

    </div>
    <div class="form-group">
        <label for="inputNumServico">Nº Serviço</label>
        <input
                type="number" class="form-control"
                name="num_servico" id="inputNumServico"
                value="{{old('num_servico', $movimento->num_servico)}}" />

    </div>
    <div class="form-group">
        <label for="inputIDPiloto">ID Piloto</label>
        <input
                type="number" class="form-control"
                name="piloto_id" id="inputIDPiloto"
                value="{{old('piloto_id', $movimento->piloto_id)}}" />

    </div>
    <div class="form-group">
        <label for="inputNumLicencaPiloto">Nº licença Piloto</label>
        <input
                type="number" class="form-control"
                name="num_licenca_piloto" id="inputNumLicencaPiloto"
                value="{{old('num_licenca_piloto', $movimento->num_licenca_piloto)}}" />

    </div>
    <div class="form-group">
        <label for="inputValidadeLicencaPiloto">Validade licença Piloto</label>
        <input
                type="date" class="form-control"
                name="validade_licenca_piloto" id="inputValidadeLicencaPiloto"
                value="{{old('validade_licenca_piloto', $movimento->validade_licenca_piloto)}}" />

    </div>
    <div class="form-group">
        <label for="inputNumCertificadoPiloto">Nº Certificado Piloto</label>
        <input
                type="number" class="form-control"
                name="num_certificado_piloto" id="inputNumCertificadoPiloto"
                value="{{old('num_certificado_piloto', $movimento->num_certificado_piloto)}}" />

    </div>
    <div class="form-group">
        <label for="inputValidadeCertificadoPiloto">Validade Certificado Piloto</label>
        <input
                type="date" class="form-control"
                name="validade_certificado_piloto" id="inputValidadeCertificadoPiloto"
                value="{{old('validade_certificado_piloto', $movimento->validade_certificado_piloto)}}" />

    </div>
    <div class="form-group">
        <label for="inputClasseCertificadoPiloto">Classe Certificado Piloto</label>
        <input
                type="text" class="form-control"
                name="num_certificado_piloto" id="inputNumCertificadoPiloto"
                value="{{old('num_certificado_piloto', $movimento->num_certificado_piloto)}}" />

    </div>
    <div class="form-group">
        <label for="inputNumCertificadoPiloto">Natureza do Voo</label>
        <select name="natureza">
            <option value="T">
                Treino
            </option>
            <option value="I">
                Instrução
            </option>
            <option value="E">
                Especial
            </option>
        </select>
    </div>
    <div class="form-group">
        <label for="inputAerodromoPartida">Aerodromo de Partida</label>


    </div>
    <div class="form-group">
        <label for="inputAerodromoChegada">Aerodromo de Chegada</label>


    </div>
    <div class="form-group">
        <label for="inputNumAterragens">Nº de Aterragens</label>
        <input
                type="number" class="form-control"
                name="num_aterragens" id="inputNumAterragens"
                placeholder="ex: 1"
                value="{{old('num_aterragens', $movimento->num_aterragens)}}" />

    </div>
    <div class="form-group">
        <label for="inputNumDescolagens">Nº de Descolagens</label>
        <input
                type="number" class="form-control"
                name="num_descolagens" id="inputNumDescolagens"
                placeholder="ex: 1"
                value="{{old('num_descolagens', $movimento->num_descolagens)}}" />

    </div>
    <div class="form-group">
        <label for="inputNumPessoas">Nº de Pessoas a bordo</label>
        <input
                type="number" class="form-control"
                name="num_pessoas" id="inputNumPessoas"
                placeholder="ex: 1"
                value="{{old('num_pessoas', $movimento->num_pessoas)}}" />

    </div>
    <div class="form-group">
        <label for="inputContaHorasInicio">Valor do Conta-Horas no inicio do voo</label>
        <input
                type="number" class="form-control"
                name="conta_horas_inicio" id="inputContaHorasInicio"
                placeholder="ex: 125000"
                value="{{old('conta_horas_inicio', $movimento->conta_horas_inicio)}}" />

    </div>
    <div class="form-group">
        <label for="inputContaHorasFim">Valor do Conta-Horas no final do voo</label>
        <input
                type="number" class="form-control"
                name="conta_horas_fim" id="inputContaHorasFim"
                placeholder="ex: 125500"
                value="{{old('conta_horas_fim', $movimento->conta_horas_fim)}}" />

    </div>
    <div class="form-group">
        <label for="inputTempoVoo">Tempo de Voo </label>
        <input
                type="number" class="form-control"
                name="conta_horas_inicio" id="inputContaHorasInicio"
                placeholder="ex: 125000"
                value="{{old('conta_horas_inicio', $movimento->conta_horas_inicio)}}" />

    </div>
    <div class="form-group">
        <label for="inputModoPagamento">Mode de Pagamento</label>
        <select name="natureza">
            <option value="N">
                Numerário
            </option>
            <option value="M">
                Multibanco
            </option>
            <option value="T">
                Transferência
            </option>
            <option value="P">
                Pacote de Horas
            </option>
        </select>
    </div>
    <div class="form-group">
        <label for="inputNumRecibo">Nº do Recibo</label>
        <input
                type="number" class="form-control"
                name="num_recibo" id="inputNumRecibo"
                placeholder="ex: 120202"
                value="{{old('num_recibo', $movimento->num_recibo)}}" />
    </div>

    <div class="form-group">
        <label for="inputTempoVoo">Observações</label>
        <br>
        <textarea name="observacoes" rows="5" cols="48">
        Escreva aqui qualquer observação que ache necessária.
    </textarea>

    </div>
    @if(Auth::user()->isAdministrator())
        <br><label for="isConfirmado">Confirmado</label>
        <input type="checkbox" id="isConfirmado" name="confirmado" value="1" >
    @endif

    ---------------------------------------> CASO O VOO SEJA DE INSTRUCAO
    <div id="VooInstrucao">


        <div class="form-group">
            <label for="inputTipoInstrucao">Tipo de Instrução</label>
            <select name="tipo_instrucao" id="inputTipoInstrucao">
                <option value="S">
                    Solo
                </option>
                <option value="D">
                    Duplo
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="inputIDInstrutor">ID Instrutor</label>
            <input
                    type="number" class="form-control"
                    name="instrutor_id" id="inputIDInstrutor"
                    value="{{old('instrutor_id', $movimento->instrutor_id)}}" />

        </div>

    </div>

@endsection
