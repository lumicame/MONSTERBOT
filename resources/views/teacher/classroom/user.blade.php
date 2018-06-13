<div class="item{{$user->id}} ui raised card" id="draggable" data-id="{{$user->id}}" data-name="{{$user->name}}" data-username="{{$user->username}}">
    <input type="hidden" value="@if($user->monster()->first()){{$user->monster()->first()->nit}}@endif" id="monsters_nit{{$user->id}}">
    <div class="content open-modal" onclick="modalopen($('#monsters_nit{{$user->id}}').val())" style="cursor: pointer;">
      <img src="{{url('monsters/monsterbot_s.png')}}" style="max-height: 150px;height: auto;">
      <p style="font-weight: 700;
    font-size: 1.28571429em;">{{$user->username}}</p><p id="">{{$user->name}}</p>
   
    </div>
    <div class="description">
         <div class="ui form" role="form"> 

    <div class="field">
            <select class="ui dropdown" id="select{{$user->id}}" onchange="asignar('{{$user->id}}')" autofocus>
            <option value="0"><span style="color: #d6caca;">Selecciona Monsterbot</span></option>
            <?php
                $monsters=App\Monster::all();
             ?>
             @foreach($monsters as $monster)

            @if($user->monster()->first())
                    @if($user->monster()->first()->id===$monster->id)

                        <option value="{{$monster->nit}}" selected>{{$monster->name}}</option>
                        @else
                                    <option value="{{$monster->nit}}">{{$monster->name}}</option>

                        @endif
            @else
            <option value="{{$monster->id}}">{{$monster->name}}</option>
            @endif
            
             @endforeach
            
            
          </select>
          </div></div>
    </div>
    <div style="position: absolute; top: -1rem; right: -1rem; padding: 0px; margin: 0px; border: 0px; text-align: right;"><div style="    display: inline-block;
    border: 3px solid white;
    border-radius: 50px;
    color: white;
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.15) 0px 1px 3px 0px;
    font-weight: 600;
    min-width: 3rem;
    font-size: 18px;
    background-color: rgb(147, 213, 83);
    line-height: 2;">{{$user->id}}</div></div>

  </div>
 