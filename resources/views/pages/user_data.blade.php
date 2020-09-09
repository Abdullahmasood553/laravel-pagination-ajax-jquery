<div class="container">

    @foreach($users as $key)
    <div class="card">
      <div class="card-header">
        <img src="{{ asset('assets/images/city.jpeg') }}" alt="" />
      </div>
      <div class="card-body">
        <span class="tag tag-pink">{{ $key->type }}</span>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing.</h4>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque
          sed consequuntur ullam temporibus provident repudiandae!
        </p>
        <div class="user">
          <img src="{{ asset('assets/images/user-3.jpg') }}" alt="" />
          <div class="key-info">
            <h5>{{ $key->fname }}</h5>
            <small>23 Dec 2019</small>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="">
      {!! $users->links() !!}
    </div>
  </div>