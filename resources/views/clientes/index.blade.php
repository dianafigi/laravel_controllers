<h3>Clientes:</h3>
<a href="{{ route('cliente.create') }}">Novo Cliente</a>
<ul style="list-style: none;">
  @foreach ($clientes as $c)
    <li style="margin-bottom: 10px;">
      {{$c['id']}}  |  {{ $c['nome'] }} |
      <a href="{{ route('cliente.edit', $c['id']) }}">Editar</a> |
      <a href="{{ route('cliente.show', $c['id']) }}">Info</a> |
      <form action="{{ route('cliente.destroy', $c['id']) }}" method="post" style="display: inline;">
        {{ csrf_field() }}
        {{method_field('DELETE')}}
        <!-- proprio do laravel, para em vez de ser post, mandar um delete. Nao dá para mudar no form acima pq o html so aceita metodo get ou post -->
        <input type="submit" value="Apagar">
      </form>
    </li>
  @endforeach
</ul>
