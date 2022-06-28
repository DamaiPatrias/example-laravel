@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Post</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-primary">Creta new post</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $item)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->category->name }}</td>
        <td>
          <a href="/dashboard/posts/{{ $item->slug }}" class="badge bg-info"><span data-feather="eye" ></span></a>
          <a href="/dashboard/posts/{{ $item->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
          <form action="/dashboard/posts/{{ $item->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

{{-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero, nostrum. Reprehenderit quasi et, recusandae porro nemo earum iusto labore molestiae minus numquam fugit dicta odio doloribus eligendi aliquid voluptate? Repellat, unde repudiandae et magnam harum voluptate assumenda at explicabo, distinctio veritatis beatae corporis suscipit sunt natus. Sapiente, excepturi autem, ut saepe mollitia illo dolore numquam ipsum sit, cupiditate voluptatem repudiandae! Labore perferendis omnis sint reprehenderit earum exercitationem repellendus, iste molestias saepe tempore, dolorem quaerat? Quidem perferendis non at tenetur quisquam molestiae rerum porro laboriosam nam nobis? Illum reiciendis necessitatibus repellat dolores sequi non voluptas quaerat enim beatae illo expedita animi provident optio quis commodi velit ad ullam voluptate, nulla, ab aliquam cupiditate? Veniam nostrum numquam eaque? Perspiciatis ad eveniet commodi possimus velit, fugiat dolores facilis voluptas cupiditate enim reprehenderit porro quos recusandae voluptates fuga corporis perferendis ducimus eum dignissimos esse! Dolor quas debitis totam, unde cupiditate excepturi vero eos et officia odit molestias recusandae cumque dolores possimus pariatur ad. Maxime qui nisi perferendis nam in, et corporis libero impedit sed, reprehenderit cumque maiores aliquam eius dicta! Voluptatibus officiis possimus, atque quisquam minima distinctio eius architecto cumque explicabo voluptatem, incidunt natus hic vero repudiandae corrupti repellat inventore suscipit veniam ipsa voluptatum! Excepturi, officia possimus! Enim libero, vitae eius quod quo id quibusdam fugiat labore maiores praesentium, totam, cum mollitia necessitatibus iure tempora eveniet at cumque rem quasi quis suscipit sed aliquid doloribus? Repellat, deleniti? Quisquam, voluptate? At, cumque fugit ex ratione aliquid nobis in, beatae porro facilis odit harum id necessitatibus fugiat hic. Impedit, eum reiciendis! Architecto distinctio excepturi eum beatae sed repellendus quae praesentium nihil. Delectus distinctio, alias deserunt iste rem aliquid quae saepe perspiciatis, suscipit similique dolor modi fuga? Cumque blanditiis inventore maiores quaerat laudantium, sit doloribus eum aperiam ex voluptatibus, sapiente, sunt corporis obcaecati amet sed commodi deleniti. --}}