@extends('layouts.master')
@section('content')

<div class="container-1">
    <input type="text" placeholder="Enter Text" id="search" />
  </div>
  <div class="container">
    <div class="select-container">
      <select name="" id="">
        <option value="">Option 1</option>
        <option value="">Option 2</option>
        <option value="">Option 3</option>
        <option value="">Option 4</option>
      </select>
    </div>
    <div class="select-container">
      <select name="" id="">
        <option value="">Option 1</option>
        <option value="">Option 2</option>
        <option value="">Option 3</option>
        <option value="">Option 4</option>
      </select>
    </div>
    <div class="select-container">
      <select name="" id="">
        <option value="">Option 1</option>
        <option value="">Option 2</option>
        <option value="">Option 3</option>
        <option value="">Option 4</option>
      </select>
    </div>
  </div>
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
        <div class="key">
          <img src="{{ asset('assets/images/key-3.jpg') }}" alt="" />
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
  @endsection


  @push('scripts')

  <script>

    $(document).ready(function () {
				$(document).on('click', '.pagination a', function (event) {
					event.preventDefault();
					var page = $(this).attr('href').split('page=')[1];
					alert(page);
        });
  });
  </script>

  @endpush