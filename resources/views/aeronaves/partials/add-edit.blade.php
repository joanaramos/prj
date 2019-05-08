{{csrf_field()}}
<div class="form-group">
    <label for="inputMatricula">Matricula</label>
    <input
            type="text" class="form-control"
            name="matricula" id="inputMatricula"
            placeholder="Matricula" value="{{old('matricula', $aeronave->matricula)}}" />

</div>
<div class="form-group">
    <label for="inputMarca">Marca</label>
    <input
            type="text" class="form-control"
            name="marca" id="inputMarca"
            placeholder="Marca" value="{{old('marca', $aeronave->marca)}}" />

</div>
<div class="form-group">
    <label for="inputModelo">Modelo</label>
    <input
            type="text" class="form-control"
            name="modelo" id="inputModelo"
            placeholder="Modelo" value="{{old('modelo', $aeronave->modelo)}}" />

</div>
<div class="form-group">
    <label for="inputNumLugares">Nº lugares</label>
    <input
            type="number" class="form-control"
            name="num_lugares" id="inputNumLugares"
            placeholder="ex: 1" value="{{old('num_lugares', $aeronave->num_lugares)}}" />

</div>
<div class="form-group">
    <label for="inputMatricula">Matricula</label>
    <input
            type="number" class="form-control"
            name="conta_horas" id="inputContaHoras"
            placeholder="ex: 140000" value="{{old('conta_horas', $aeronave->conta_horas)}}" />

</div>
<div class="form-group">
    <label for="inputPrecoHora">Preço/Hora:</label>
    <input
            type="number" class="form-control"
            name="preco_hora" id="inputPrecoHora"
            placeholder="ex: 140.00" value="{{old('preco_hora', $aeronave->preco_hora)}}" />

</div>




