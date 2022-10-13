<h2>Equip:</h2>
<table>

<tr><td>{{ $p->id }} </td><td>{{ $p->nombre }} </td><td>{{ $p->ciudad }} </td></tr>

</table>


<h2>Jugadors</h2>
<table>
@foreach($x as $jugador)
<tr><td>{{ $jugador->id }} </td><td>{{ $jugador->nombre }} </td><td>{{ $jugador->nacionalidad }} </td><td>{{ $jugador->dorsal }} </td><td>{{ $jugador->equipo }} </td></tr>
@endforeach
</table>

