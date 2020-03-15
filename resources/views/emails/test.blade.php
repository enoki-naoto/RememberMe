@foreach($todo as $do)
    <div>
        <p>{{ $do->id }}</p>
        <p>{{ str_limit($do->content, 100) }}</p>
    </div>
@endforeach
