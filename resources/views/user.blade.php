

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    @foreach($posts as $post)
    <div>
        <h3>{{$post->id}}</h3>
        <h3>{{$post->Title}}</h3>
        <h3>{{$post->user_id}}</h3>
        <h3>{{$post->body}}</h3>
        <h3>{{$post->body}}</h3>
    </div>
    @endforeach


{{-- <h1>I am User view tail wind</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>user_id</th>
        <th>body</th>
        <th>user Name</th>
        <th>Email</th>
    </tr>
@foreach($posts as $post)
    <tr>
      <td>{{$post->id}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->user_id}}</th>
      <td>{{$post->body}}</td>




    </tr>

    @foreach($post->user as $user)

    {{$post->id}}

    @endforeach
@endforeach
</table> --}}

</body>


