				   
   		@if(session("status"))
		<div class="alert alert-info alert-fill alert-border-left alert-close alert-dismissible fade in" role="alert" style="margin-bottom: 3%;">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			{{session("status")}}
		</div>
		@endif
		@if(session("success"))
			<div class="alert alert-info alert-fill alert-border-left alert-close alert-dismissible fade in" role="alert" style="margin-bottom: 3%;">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				{!! session("success") !!}
			</div>
		@endif

		@if(session("error"))
		<div class="alert alert-danger alert-fill alert-border-left alert-close alert-dismissible fade in" role="alert" style="margin-bottom: 3%;">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			{!!  session("error") !!}
		</div>
		@endif

		@if($errors->any())					
		<div class="alert alert-danger alert-fill alert-border-left alert-close alert-dismissible fade in" role="alert" style="margin-bottom: 3%;">
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
			 </ul>
			
      </div>
      @endif