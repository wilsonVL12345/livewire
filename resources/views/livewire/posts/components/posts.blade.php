<div>
    {{-- siempre dejar el un div padre --}}
    <div class="card">
        <div class="card-header">
            Lista de Datos
        </div>
        <div class="card-body">
           <table class="table">
             <thead>
                <tr>
                    <td><strong>ID</strong></td>
                    <td><strong>Titulo</strong></td>
                    <td><strong>Contenido</strong></td>
                </tr>
             </thead>
             <tbody>
                 @foreach ($posts as $post)
                    <tr wire:key='{{$post->id}}'>
                        <td>{{$post->id}}</td>
                        {{-- !! esto lo ponemos  para decirle que es un string  para sus caracteres especiales --}}
                        <td>{!! $post->title !!}</td>
                        <td>{!! $post->content !!}</td>
                    </tr>
                @endforeach
              <tr>
                {{-- aqui vemos la paginacion que se puso --}}
                <td colspan="3"> {{ $posts->links() }}</td>
              </tr>
             </tbody>
           </table>
        </div>
    </div>
</div>
