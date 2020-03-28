<h3>今日のtodoは以下のとおりです</h3>

<div class="m-0 p-0">
  <ol>
    @foreach($user->todos as $todo)
      <li>{{ str_limit($todo->content, 100) }}</li>
    @endforeach
  </ol>
</div>
