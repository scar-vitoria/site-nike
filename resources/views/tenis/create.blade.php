@extends('layouts.main')

@section('title', 'Cadastrar Tênis')

@section('principal')

<div style="display: flex; justify-content: center; margin-bottom: 20px">
  <div id="tenis-create-container" class="col-md-5" style="">
    <h1 style="font-family: 'Oswald', sans-serif; font-size: 25px; letter-spacing: 1px; text-align: center; margin-bottom: 30px;">CADASTRO DE TÊNIS</h1>
    <form action="/tenis" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <p>Nome:<input type="text" class="form-control" id="nome" name="nome" placeholder=""></p>
      </div>
      <div class="form-group">
        <p>Tipo:</p>
        <input type="text" class="form-control" id="tipo" name="tipo" placeholder="">
      </div>
      <div class="form-group">
        <p>Marca:</p>
        <input type="text" class="form-control" id="marca" name="marca" placeholder="">
      </div>
      <div class="form-group">
        <p>Cor:</p>
        <input type="text" class="form-control" id="cor" name="cor" placeholder="">
      </div>
      <div class="form-group">
        <p>Descrição:</p>
        <textarea type="text" class="form-control" id="descricao" name="descricao" placeholder=""></textarea>
      </div>
      <div class="form-group">
        <p>Tamanho:</p>
        <select name="tam" id="tam" class="form-control">
          <option value="35">35</option>
          <option value="36">36</option>
          <option value="37">37</option>
          <option value="38">38</option>
          <option value="39">39</option>
          <option value="40">40</option>
          <option value="41">41</option>
          <option value="42">42</option>
          <option value="43">43</option>
          <option value="44">44</option>
          <option value="45">45</option>
        </select>
      </div>
      <div class="form-group">
        <p>Preço:</p>
        <input type="decimal" class="form-control" id="preco" name="preco" placeholder= "00.00">
      </div>
      <div class="form-group" >
          <p>Carregar Imagem:<label for="img">UPLOAD</label></p>
          <input type="file" id="img" name="img">
      </div>v
      <input type="submit" class="btn" style="background-color: #000; border: 1px solid #000; font-size: 15px; color: #fff; height: 40px; width: 100%; cursor: pointer;" value="CADASTRAR">
    </form>
</div>
</div>

@endsection