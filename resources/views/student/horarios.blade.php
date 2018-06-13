<div class="card" id="cardhover"  style="background: #4e54c8; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #4e54c8c4, #4e54c8); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #4e54c8c4, #4e54c8);cursor: pointer;
  border-radius: 10px ">
    <div class="content">
      <div class="header" style="color: #fff">
         {{$shedule->subject()->first()->name}}
       </div>
      <div class="meta" style="color: #fff">{{$shedule->classroom()->first()->description}}
      </div>
      <div class="description">
        <table>
           @foreach($shedule->dates as $date)
          <tr style="color: #fff">
            <td style="padding-right:40px">{{$date->dia}}</td>
            <td>{{$date->inicio}} - {{$date->fin}}</td>
          </tr>
        @endforeach
          
        </table>
       
      </div>
      </div>    
  </div>