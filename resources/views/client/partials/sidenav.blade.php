<aside class="col-md-4 SideNav">
        <ul class="list-group">
            @foreach($users as $user)
          <li class="list-group-item"><a href="{{route('client.index')}}"><i class="fa fa-address-card" ></i>&nbsp;Données personnelles</a></li>
            @endforeach

        </ul>
        @foreach($users as $user)
        <ul class="list-group">
        <li class="list-group-item"><a href="{{route('client.edit',$user->id)}}"><i class="fa fa-briefcase" aria-hidden="true"></i>&nbsp;Modification</a></li>

        </ul>
        @endforeach
       
    </aside>
    
    