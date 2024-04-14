<div>
    <div class="card">
        <div class="card-header">
            Crear posts
        </div>
        <div class="card-body">
            <form wire:submit='create'>
                <input type="text" wire:model.live='title' class="form-control" placeholder="titulo..">
                <textarea wire:model='content' rows="5" placeholder="contenido" class="form-control" style="margin-top:15px"></textarea>
                <input type="submit" value="guardar" style="margin-top:15px" class="btn btn-success">
            </form>
            {{ $this->title }}
        </div>
    </div>
</div>
