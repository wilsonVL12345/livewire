<div>
  <div class="card">
    <h3 class="text-center mt-4">detalles de todos los datos</h3>
    <div class="card-header">
        {{-- para ver si esta comunicandose con el servidor --}}
        {{-- {{$search}} --}}
        <input wire:model.live='search' type="text" class="form-control" placeholder="buscar...">
        <table class="table">
            <tr>
                <th>id</th>
                <th>titulo</th>
                <th>contenido</th>
            </tr>
            @foreach ($detalle as $item)
                <tr wire:key='{{$item->id}}'>
                    <td>{{$item->id}}</td>
                    <td>{!!$item->title!!}</td>
                    <td>{{$item->content}}</td>
                </tr>
            @endforeach
        </table>
    </div>
  </div>
</div>
