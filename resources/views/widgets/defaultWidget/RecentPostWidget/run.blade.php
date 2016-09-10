<div class="panel panel-widget">
  	<div class="panel-heading">
  		<h2 class="panel-title">{{ $options['title'] }}</h2>
  	</div>
  	<div class="list-group">
  		@foreach($model as $value)
		  <a href="{{ $value->getUrl() }}" class="list-group-item active">
		    <h4 class="list-group-item-heading">{{ $value->post_title }}</h4>
		    <p class="list-group-item-text">{{ $value->getExcerpt() }}</p>
		  </a>
		@endforeach  
	</div>
</div>
