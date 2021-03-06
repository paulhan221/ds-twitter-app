@foreach($instagrams as $instagram)
  <div class="grid-item thumbnail">
      @if(isset($instagram["videos"]))
        <video controls src="{{ $instagram["videos"]}}" class="vids">
          Your Browser does not support the video tag
        </video>
      @else
        <img class="pics" src = {{ $instagram["picture"] }} />
      @endif
      <br>
      <div class="caption">
        <a href="http://instagram.com/{{ $instagram["username"] }}"><img src={{ $instagram["profile_picture"] }} class = "profile-pic"></a>
        <h3>
          <a href="http://instagram.com/{{ $instagram["username"] }}">
            {{ $instagram["username"] }}
          </a>
        </h3>
        {{ $instagram["caption"] }}
      </div>
      {{ $instagram["likes_count"]}} likes
  </div>
  
@endforeach