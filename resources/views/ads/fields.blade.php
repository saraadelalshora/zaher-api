
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- Name Field -->
<div class="form-group row ">
  {!! Form::label('title', trans("lang.ad_title"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::text('title', null,  ['class' => 'form-control','placeholder'=>  trans("lang.ad_title")]) !!}
 
  </div>
</div>

<div class="form-group row ">
  {!! Form::label('header', trans("lang.ad_header"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::text('header', null,  ['class' => 'form-control','placeholder'=>  trans("lang.ad_header")]) !!}
 
  </div>
</div>


<div class="form-group row ">
  {!! Form::label('link', trans("lang.ad_link"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::url('link', null,  ['class' => 'form-control','placeholder'=>  trans("lang.ad_link")]) !!}

  </div>
</div>


<div class="form-group row ">
  {!! Form::label('text', trans("lang.ad_text"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::text('text', null,  ['class' => 'form-control','placeholder'=>  trans("lang.ad_text")]) !!}
  
  </div>
</div>
<div class="form-group row ">
  {!! Form::label('sort', trans("lang.ad_sort"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::number('sort', null,  ['class' => 'form-control','placeholder'=>  trans("lang.ad_sort")]) !!}
   
  </div>
</div>
<div class="form-group row ">
  {!! Form::label('position', trans("lang.ad_position"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <select name="position" class="form-control " >
      <option value="top" @if(isset($ad) && $ad->position == 'top') selected @endif>@lang('lang.ad_top')</option>
      <option value="bottom" @if(isset($ad) && $ad->position == 'bottom') selected @endif>@lang('lang.ad_bottom')</option>
    </select>
    {{-- {!! Form::number('position', null,  ['class' => 'form-control','placeholder'=>  trans("lang.ad_position")]) !!} --}}
  
  </div>
</div>
<div class="form-group row ">
  {!! Form::label('status', trans("lang.ad_status"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <select name="status" class="form-control " >
      <option value="active" @if(isset($ad) && $ad->status == 'active') selected @endif>@lang('lang.active')</option>
      <option value="inactive" @if(isset($ad) && $ad->status == 'inactive') selected @endif>@lang('lang.inactive')</option>
    </select>
    {{-- {!! Form::number('position', null,  ['class' => 'form-control','placeholder'=>  trans("lang.ad_position")]) !!} --}}
  
  </div>
</div>

</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Image Field -->
<div class="form-group row">
  {!! Form::label('image', trans("lang.ad_image"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <div style="width: 100%" class="dropzone image" id="image" data-field="image">
      <input type="hidden" name="image">
    </div>
    <a href="#loadMediaModal" data-dropzone="image" data-toggle="modal" data-target="#mediaModal" class="btn btn-outline-{{setting('theme_color','primary')}} btn-sm float-right mt-1">{{ trans('lang.media_select')}}</a>
    <div class="form-text text-muted w-50">
      {{ trans("lang.ad_image_help") }}
    </div>
  </div>
</div>
@prepend('scripts')
<script type="text/javascript">
    var var15866134771240834480ble = '';
    @if(isset($ad) && $ad->hasMedia('image'))
    var15866134771240834480ble = {
        name: "{!! $ad->getFirstMedia('image')->name !!}",
        size: "{!! $ad->getFirstMedia('image')->size !!}",
        type: "{!! $ad->getFirstMedia('image')->mime_type !!}",
        collection_name: "{!! $ad->getFirstMedia('image')->collection_name !!}"};
    @endif
    var dz_var15866134771240834480ble = $(".dropzone.image").dropzone({
        url: "{!!url('uploads/store')!!}",
        addRemoveLinks: true,
        maxFiles: 1,
        init: function () {
        @if(isset($ad) && $ad->hasMedia('image'))
            dzInit(this,var15866134771240834480ble,'{!! url($ad->getFirstMediaUrl('image','thumb')) !!}')
        @endif
        },
        accept: function(file, done) {
            dzAccept(file,done,this.element,"{!!config('medialibrary.icons_folder')!!}");
        },
        sending: function (file, xhr, formData) {
            dzSending(this,file,formData,'{!! csrf_token() !!}');
        },
        maxfilesexceeded: function (file) {
            dz_var15866134771240834480ble[0].mockFile = '';
            dzMaxfile(this,file);
        },
        complete: function (file) {
            dzComplete(this, file, var15866134771240834480ble, dz_var15866134771240834480ble[0].mockFile);
            dz_var15866134771240834480ble[0].mockFile = file;
        },
        removedfile: function (file) {
            dzRemoveFile(
                file, var15866134771240834480ble, '{!! url("ads/remove-media") !!}',
                'image', '{!! isset($ad) ? $ad->id : 0 !!}', '{!! url("uplaods/clear") !!}', '{!! csrf_token() !!}'
            );
        }
    });
    dz_var15866134771240834480ble[0].mockFile = var15866134771240834480ble;
    dropzoneFields['image'] = dz_var15866134771240834480ble;
</script>
@endprepend
</div>

<!-- Submit Field -->
<div class="form-group col-12 text-right">
  <button type="submit" class="btn btn-{{setting('theme_color')}}" ><i class="fa fa-save"></i> {{trans('lang.save')}} {{trans('lang.ad')}}</button>
  <a href="{!! route('ads.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{trans('lang.cancel')}}</a>
</div>
