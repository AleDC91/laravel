<div class="card">
    <ul>
        @foreach ($users as $user)
            <li>{{$user['name']}}</li>            
        @endforeach
    </ul>
    
</div>