<h1>MODIFICA PAGAMENTO</h1>

<form class="" action="{{route('pagamento.update', $pagamenti -> id)}}" method="post">
  @csrf
  @method('POST')
  <div class="form-group">
    <label for="status">STATO PAGAMENTO</label>
    <input type="text" name="status" value="{{$pagamenti -> status}}">
  </div>
  <div class="form-group">
    <label for="price">PREZZO</label>
    <input type="text" name="price" value="{{$pagamenti -> price}}">
  </div>
<button type="submit" name="button">MODIFICA</button>

</form>
