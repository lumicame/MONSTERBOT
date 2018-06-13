<div class="item{{$student->id}} ui raised card open-modal" id="draggable" data-id="{{$student->id}}" data-name="{{$student->name}}" data-username="{{$student->username}}" style="cursor: pointer;">
    <div class="content">
      <img src="{{url('monsters/monsterbot_s.png')}}" style="max-height: 150px;height: auto;">
      <p style="font-weight: 700;
    font-size: 1.28571429em;">{{$student->username}}</p><p id="">{{$student->name}}</p>
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
    line-height: 2;">{{$student->id}}</div></div>
  </div>
 