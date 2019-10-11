<div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Setor<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  type="text" id="sector" name="sector" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Empresa<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input  type="text" id="company_uuid" name="company_uuid" required="required" class="form-control col-md-7 col-xs-12" >
            </div>
        </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Empresa</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <select class="form-control">
               @foreach ($companies as $company)
                <option  name="company_uuid" value="{{$company->uuid}}">{{$company->name}}</option>
                @endforeach 
            </select>
        </div>
    </div>
    <div class="ln_solid"></div>