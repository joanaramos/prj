{{csrf_field()}}
<div class="form-group">
    <label for="inputFullname">Name</label>
    <input
        type="text" class="form-control"
        name="name" id="inputName"
        placeholder="Nome" value="{{old('name', $user->name)}}" />

</div>


<div class="form-group">
    <label for="inputEmail">Email</label>
    <input
        type="email" class="form-control"
        name="email" id="inputEmail"
        placeholder="Email address" value="{{old('email', $user->email)}}"/>
</div>

<div class="form-group">
    <label for="inserirNumSocio">Nº de Sócio</label>
    <input
            type="text" class="form-control"
            name="num_socio" id="inputNumSocio"
            placeholder="Nº de sócio" value="{{old('num_socio', $user->num_socio)}}" />
</div>
<div class="form-group">
    <label for="inputNomeInformal">Nome Informal</label>
    <input
            type="text" class="form-control"
            name="nome_informal" id="inputNomeInformal"
            placeholder="Nome" value="{{old('nome_informal', $user->nome_informal)}}" />
</div>

<div class="form-group">
    <br><label for="inputFotografia">Fotografia</label>
    <br>
    <form action="upload.php" method="post"
          enctype="multipart/form-data">
        <input type= "text" name="description">
        <input type= "file" name="foto_url">
    </form>
</div>

<div class="form-group">
    <br><label for="inputSexo">Sexo</label>
    <br>
    <label for="input_sex_male_id">Masculino:</label>
     <input type="radio" id="input_sex_male_id" name="sexo"
            value="M" checked>

    <label for="input_sex_female_id">Feminino:</label>
        <input type="radio" id="input_sex_female_id"
           name="sexo" value="F">
</div>
<div class="form-group">
    <label for="inputDataNascimento">Data de Nascimento</label>
    <input type="date" id="dataNascimento" name="data_nascimento">
</div>

<div class="form-group">
    <label for="inputNIF">NIF</label>
    <input
            type="number" class="form-control"
            name="nif" id="inputNIF"
            placeholder="NIF" value="{{old('nif', $user->nif)}}" />
</div>

<div class="form-group">
    <label for="inputtelefone">Telefone</label>
    <input
            type="number" class="form-control"
            name="telefone" id="inputtelefone"
            placeholder="950000000" value="{{old('telefone', $user->telefone)}}" />
</div>
<div class="form-group">
    <label for="inputendereco">Endereço</label>
    <input
            type="text" class="form-control"
            name="endereco" id="inputendereco"
            placeholder="Rua da Paz nº 1 1º Esquerdo 2000-000 Lisboa" value="{{old('endereco', $user->endereco)}}" />
</div>
<br><label for="isQuotaPaga">Quota Paga</label>
<input type="checkbox" id="quota_paga" name="quota_paga" value="1" checked>
<div>Olá</div>
<div>Olá</div>
<br><label for="isQuotaPaga">Utilizador Ativo</label>
<input type="checkbox" id="ativo" name="ativo" value="1" checked>
<br><label for="isQuotaPaga">Membro da Administração</label>
<input type="checkbox" id="direcao" name="direcao" value="1" >






