<table id="followingList">

	<thead>
		<tr colspan="2"><h5 class="follow-title">Followers</h5></tr>
	</thead>
	<tbody>

@foreach ($followers as $follower)

		<tr class="follower-row">
			<td>
				<img src={{ asset("storage/$follower->image") }} width="50" height="50" class="follower-img">
			</td>
			<td>
				<a href={{ url("/profile/view/$follower->id")}}>
					<h5 class="">{{ $follower->username }}</h5>
				</a>
			</td>
		</tr>

@endforeach

	</tbody>
</table>