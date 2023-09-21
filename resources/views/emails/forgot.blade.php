<x-mail::message>
Hello {{$user->name}}
 
<p>Please click the Password reset button to reset your password!</p>
 @php
     $url = url("reset/".$user->remember_token);
 @endphp
<x-mail::button :url="$url">
Reset Password
</x-mail::button>
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>