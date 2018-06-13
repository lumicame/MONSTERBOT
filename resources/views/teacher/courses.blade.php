

   <div class="card"  style="cursor: pointer">
    <div class="content">
      <div class="header">
         {{$shedule->subject()->first()->name}}
       </div>
      <div class="meta">{{$shedule->classroom()->first()->name." ".$shedule->classroom()->first()->description}}<br>
{{$shedule->classroom()->first()->users()->count()." Alumnos"}}
      </div>
      <div class="description">
        <table>
           @foreach($shedule->dates as $date)
          <tr>
            <td style="padding-right:40px">{{$date->dia}}</td>
            <td>{{$date->inicio}} - {{$date->fin}}</td>
          </tr>
        @endforeach
          
        </table>
       
      </div>
      </div>
      <div class="ui bottom attached button blue" onclick="location.href='teacher/classroom/{{$shedule->id}}';">
      <i class="arrow right icon"></i>
      Entrar
    </div>
    
  </div>