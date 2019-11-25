<h3>Novo Cliente:</h3>
<form action="{{ route('cliente.store') }}" method="post">
  {{ csrf_field() }}
  <input type="text" name="nome">
  <input type="submit" value="Guardar">
</form>