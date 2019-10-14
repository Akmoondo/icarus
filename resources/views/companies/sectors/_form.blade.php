<div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Setor<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  type="text" id="sector" name="sector" required="required" class="form-control col-md-7 col-xs-12" >
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Empresa<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input  type="text" id="company_uuid" name=""class="form-control col-md-7 col-xs-12" value="{{ $company->name }}" readonly>
        </div>
    </div>
    <div class="ln_solid"></div>