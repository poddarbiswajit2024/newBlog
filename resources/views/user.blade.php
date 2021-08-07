

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    {{-- <link href="/tailwind.css" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}"> --}}
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body >
    <h1 class="m-8 text-3xl text-green-900 leading-tight">aaaaa</h1>

    <button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75">
        Click me
      </button>

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


