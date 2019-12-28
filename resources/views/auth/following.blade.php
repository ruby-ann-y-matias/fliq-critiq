<table class="centered" id="followingList">

	<meta name="csrf_token" content="{{ csrf_token() }}">

	<thead>
		<tr colspan="2"><h5 class="follow-title">Following</h5></tr>
	</thead>
	<tbody>

@foreach ($influencers as $influencer)

		<tr id="unfollow{{ $influencer->id }}"  class="influencer-row">
			<td>
				<a href={{ url("/profile/view/$influencer->id")}}>
					<h5 class="">{{ $influencer->username }}</h5>
				</a>
			</td>
			@if (Auth::user()->username == $user->username)
			<td>
				<button class="waves-effect waves-light btn unfollow-btn" value="{{ $influencer->id }}">
					<i class="material-icons">delete_forever</i>
				</button>
			</td>
			@else
			<td>
				<img src={{ asset("storage/$influencer->image") }} width="50" height="50" class="influencer-img">
			</td>
			@endif
		</tr>

@endforeach

	</tbody>
</table>

<script type="text/javascript">
	$('.unfollow-btn').click(function() {
		var influencer_id = $(this).val();
		var token = $('[name="csrf_token"]').attr('content');
		var followingCount = $('#newCount').html();
		var newCount = followingCount - 1;
		// alert(influencer_id);
		// alert(token);

		$.post('/profile/unfollow/' + influencer_id,
			{
				influencer_id: influencer_id,
				_token: token
			},
			function(data, status) {
				$('#unfollow' + influencer_id).remove();
				$('#newCount').html(newCount);
			});
	});
</script>