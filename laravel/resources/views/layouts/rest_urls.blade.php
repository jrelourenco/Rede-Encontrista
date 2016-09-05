<script>
    var urlList = "{{URL::route('admin.json.'.$model.'.index')}}";
    var urlShow = "{{URL::route('admin.json.'.$model.'.show',':id')}}";
    var utlStore = "{{URL::route('admin.json.'.$model.'.store')}}";
    var urlUpdate = "{{URL::route('admin.json.'.$model.'.update',':id')}}";
    var urlDestroy = "{{URL::route('admin.json.'.$model.'.destroy',':id')}}";
    var urlModal = "{{URL::route('admin.'.$model.'.modal')}}";
</script>