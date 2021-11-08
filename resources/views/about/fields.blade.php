
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- Name Field -->
<div class="form-group row ">
  {!! Form::label('title', trans("lang.about_title"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::text('title', null,  ['class' => 'form-control','placeholder'=>  trans("lang.about_title")]) !!}
 
  </div>
</div>

<div class="form-group row ">
  {!! Form::label('description', trans("lang.about_description"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::textarea('description', null,  ['class' => 'form-control','placeholder'=>  trans("lang.about_description")]) !!}
 
  </div>
</div>

</div>

</div>

<!-- Submit Field -->
<div class="form-group col-12 text-right">
  <button type="submit" class="btn btn-{{setting('theme_color')}}" ><i class="fa fa-save"></i> {{trans('lang.save')}} {{trans('lang.ad')}}</button>
  <a href="{!! route('about.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{trans('lang.cancel')}}</a>
</div>
