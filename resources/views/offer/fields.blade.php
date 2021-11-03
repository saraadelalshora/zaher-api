
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
<!-- Name Field -->

<div class="form-group row ">
  {!! Form::label('sort', trans("lang.offer_sort"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    {!! Form::number('sort', null,  ['class' => 'form-control','placeholder'=>  trans("lang.offer_sort")]) !!}
   
  </div>
</div>


</div>
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">

<!-- Image Field -->
<div class="form-group row">
  {!! Form::label('image', trans("lang.offer_image"), ['class' => 'col-3 control-label text-right']) !!}
  <div class="col-9">
    <div style="width: 100%" class="dropzone image" id="image" data-field="image">
      <input type="hidden" name="image">
    </div>
    <a href="#loadMediaModal" data-dropzone="image" data-toggle="modal" data-target="#mediaModal" class="btn btn-outline-{{setting('theme_color','primary')}} btn-sm float-right mt-1">{{ trans('lang.media_select')}}</a>
    <div class="form-text text-muted w-50">
      {{ trans("lang.offer_image_help") }}
    </div>
  </div>
</div>
@prepend('scripts')
<script type="text/javascript">
    var var15866134771240834480ble = '';
    @if(isset($offer) && $offer->hasMedia('image'))
    var15866134771240834480ble = {
        name: "{!! $offer->getFirstMedia('image')->name !!}",
        size: "{!! $offer->getFirstMedia('image')->size !!}",
        type: "{!! $offer->getFirstMedia('image')->mime_type !!}",
        collection_name: "{!! $offer->getFirstMedia('image')->collection_name !!}"};
    @endif
    var dz_var15866134771240834480ble = $(".dropzone.image").dropzone({
        url: "{!!url('uploads/store')!!}",
        addRemoveLinks: true,
        maxFiles: 1,
        init: function () {
        @if(isset($offer) && $offer->hasMedia('image'))
            dzInit(this,var15866134771240834480ble,'{!! url($offer->getFirstMediaUrl('image','thumb')) !!}')
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
                file, var15866134771240834480ble, '{!! url("offer/remove-media") !!}',
                'image', '{!! isset($offer) ? $offer->id : 0 !!}', '{!! url("uplaods/clear") !!}', '{!! csrf_token() !!}'
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
  <button type="submit" class="btn btn-{{setting('theme_color')}}" ><i class="fa fa-save"></i> {{trans('lang.save')}} {{trans('lang.offer')}}</button>
  <a href="{!! route('offer.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{trans('lang.cancel')}}</a>
</div>
