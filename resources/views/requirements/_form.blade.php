<div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Artigo/Capítulo<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  type="text" id="clause" name="clause" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Requisito<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" id="requirement" name="requirement" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descrição<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea class="resizable_textarea form-control" maxlength="500" id="brief" name="brief" placeholder="Insira uma descrição"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Empresa</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control">
                @foreach ($references as $reference)
                    <option  name="reference_uuid" id="reference_uuid" value="{{$reference->uuid}}">{{$reference->reference}}</option>
                @endforeach 
            </select>
        </div>
    </div>
<div class="ln_solid"></div>