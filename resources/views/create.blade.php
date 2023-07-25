<!DOCTYPE html>
<html>
<head>
<title>Church Management | Add</title>
</head>
<body>

	@foreach ( $members_lists as $members_list )
	
{{ $members_list->first_name}}
</br>
		
	@endforeach
@if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif(session('failed'))
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('failed') }}
</div>
@endif
<form  method = "post" action = "{{ route('saveitem') }}">
	<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
	<table>
	<tr>
	<td>First Name</td>
	<td><input type='text' name='first_name' /></td>
	 
	 

	<tr>
	<td colspan = '2'>
	<input type = 'submit' value = "Add student"/>
	</td>
	</tr>
	</table>
</form>
</body>
</html>