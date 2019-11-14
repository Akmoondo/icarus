<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome do Usuário<span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <input  type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12" >
    </div>
</div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="password" class="form-control" id="password" name="password" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Função</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <select class="form-control" name="role_uuid">
            <option value="">Escolha uma das funções!</option>
            @if( isset($roles))
                @foreach ($roles as $role)
                    <option value="{{ $role->uuid }}">{{ $role->name }}</option>
                @endforeach
            @endif
        </select>
        </div>
    </div>
<div class="ln_solid"></div>
