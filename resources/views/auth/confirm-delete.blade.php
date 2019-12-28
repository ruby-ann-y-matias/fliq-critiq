<form method="POST" action={{ url("/profile/delete/$user->id") }}>
	{{ csrf_field() }}
	{{ method_field('delete') }}
	<input hidden name="user_id" value="{{ $user->id }}">
	<h5>Do you really want to delete {{ $user->username }}?</h5>
	<button class="btn waves-effect waves-light red lighten-2" type="submit" name="action">Delete
	    <i class="material-icons right">delete_forever</i>
	</button>
</form>