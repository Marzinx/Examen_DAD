<div class="modal-content">
    <form id="formUpdate" action="{{$usuarios->id ? route('usuarios.update', $usuarios) : route('usuarios.store')}}" method = "post">
        <div class="modal-header">
            <h4 class="modal-title" id="modal-title">Nuevo</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            @if($usuarios->id)
            @method('PUT')
            <input type="hidden" name = "id" value = "{{$usuarios->id}}">
            @endif
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name = "nombre" class="form-control" id="name" placeholder="Ingrese nombre" value="{{$usuarios->name}}">
                <div id="msg_nombre"></div>
            </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="guardar"><span id="textoBoton"></span></button>
        </div>
        </div>
        <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
</div>