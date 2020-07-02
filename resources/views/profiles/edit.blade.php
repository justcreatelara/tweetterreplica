<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')
		
        <label>name</label>
        <div class="form-group row">
		<input type="text" name="name" id="name" value="{{$user->name}}" required>
		@error('name')
			<p>{{ $message }}</p>
        @enderror
        </div>
		
        <label>username</label>
        <div class="form-group row">
		<input type="text" name="username" id="username" value="{{$user->username}}" required>
		@error('username')
			<p>{{ $message }}</p>
        @enderror
        </div>
		
        <label> avatar </label>
        <div>
            <div>
                <input type="file" name="avatar" id="avatar">
                @error('avatar')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <img src="{{ $user->avatar }}" alt="your avatar">
            </div>
        </div>


        <label>email</label>
        <div class="form-group row">
		<input type="email" name="email" id="email" value="{{$user->email}}" required>
		@error('email')
			<p>{{ $message }}</p>
        @enderror
        </div>
		
        <label>password</label>
        <div class="form-group row">
		<input type="password" name="password" id="password" required>
		@error('password')
			<p>{{ $message }}</p>
        @enderror
        </div>
		
        <label>confirm password</label>
        <div class="form-group row">
		<input type="password" name="password_confirmation" id="password_confirmation" required>
		@error('password_confirmation')
			<p>{{ $message }}</p>
        @enderror
        </div>
		
		<button type="submit"> submit </button>
		<a href="{{ $user->path() }}"> cancel </a>
		</form>
</x-app>