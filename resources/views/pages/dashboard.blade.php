@section('content')
<div class="content">
    <h1>Welcome to Trie</h1>
    @if($workspace)
        <h2>{{ $workspace->name }}</h2>
        <p>{{ $workspace->description }}</p>
        <p>Author: {{ $workspace->author }}</p>
    @else
        <p>Data belum masuk cokkk</p>
    @endif
</div>
@endsection

@section('styles')
<style>
    .content {
        transition: margin-left 0.3s;
    }
</style>
@endsection
