<h3>今日のtodoは以下のとおりです</h3>

<div class="m-0 p-0">
  <ol>
    @foreach($todo as $do)
      <li>{{ str_limit($do->content, 100) }}</li>
    @endforeach
  </ol>
</div>
