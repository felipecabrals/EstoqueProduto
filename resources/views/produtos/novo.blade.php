@extends('principal')
@section('conteudo')
<h1>Novo produto</h1>
<form> 
    <div class="form-group">
        <label>Nome</label> 
        <input class="form-control" name="nome"> 
    </div>
    <div class="form-group">
        <label>Descrição</label> 
        <input class="form-control" name="descricao"> 
    </div> 
    <div class="form-group">
        <label>Valor</label> 
        <input class="form-control" name="valor"> 
    </div> 
    <div class="form-group">
        <label>Quantidade</label> 
        <input type="number" class="form-control" name="quantidade"> 
    </div>
    <button type="submit" class="btn-primary btn-block">Submit</button> 

</form>
@stop