@extends ('layouts.master')

@section ('content')

        <div class="col-sm-8 blog-main">

          @if ($posts->isEmpty())
            <h1>No blogs are available</h1>
          @endif

          @foreach ($posts as $post)

            @include('posts.post')

          @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

@endsection

@section ('footer')

	<script src="/js/file.js"></script>

@endsection