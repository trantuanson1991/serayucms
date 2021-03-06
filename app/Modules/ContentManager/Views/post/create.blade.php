@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        @include('ContentManager::partials.errormessage')
    </div>
    @include('ContentManager::post.partials.form')
</div>
@endsection

@push('scripts')
@include('ContentManager::post.partials.scriptform')
<script type="text/javascript">
$(function() {
	$('#tags').tagsInput({
	  autocomplete_url:'http://myserver.com/api/autocomplete'
	});
});
</script>
@endpush