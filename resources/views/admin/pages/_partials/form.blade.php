@csrf

    {{-- old() retorna o valor antigo do input--}}
    <div class="form-group">
        <input class="form-control" type="text" name="name" placeholder="Nome:" value="{{ old('name')}}">
            
    </div>
        
    <div class="form-group">
        <input class="form-control" type="text" name="description" placeholder="Descrição:" value="{{ old('description')}}">
    </div>

    <div class="form-group">
        <input class="form-control" type="text" name="price" placeholder="Preço:" value="{{ old('price')}}">
            
    </div>
        
    <div class="form-group">
        <input class="form-control" type="file" name="foto">            
        </div>
        
    <div class="form-group">
        <button class="btn brn-success form-control" type="submit">Enviar</button>
        </div>