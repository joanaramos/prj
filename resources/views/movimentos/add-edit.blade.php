{{csrf_field()}}
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


