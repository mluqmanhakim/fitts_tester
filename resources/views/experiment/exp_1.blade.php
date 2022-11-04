@extends('layout.base')
@extends('experiment.timer')

@section('extra_style')
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@endsection

@section('content')
<style>
#box1 {
    background-color: #000000;
    color: #FFFFFF;
    position: fixed;
    top: 10px;
    left: 10px;
    width: 90px;
    height: 90px;
}
#box2 {
    background-color: #000000;
    color: #FFFFFF;
    position: fixed;
}
</style>


<button id="box1" type="button" onclick="box1_click()">Box 1</button>

<button id="box2" type="button" onclick="box2_click()">Box 2</button>

<form id="log_form" action="{{ route('submit_log') }}" method="POST" hidden>
    @csrf 
    <input id="nickname" name="nickname" type="text">   
    <input id="box_w" name="box_w" type="number">
    <input id="box_h" name="box_h" type="number">
    <input id="x_distance" name="x_distance" type="number">
    <input id="y_distance" name="y_distance" type="number">
    <input id="time" name="time" type="number"> 
    <input id="distracted" name="distracted" type="number"> 
    <input id="distract_type" name="distract_type" type="number" value=1>
    <input id="misclick" name="misclick" type="number">            
</form>

<p id="nickname" hidden></p>
<p id="savetime" hidden></p>
<p id="currenttime" hidden></p>
@endsection

@section('extra_script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
document.getElementById("box2").style.visibility = "hidden";

var distracted = Math.round(Math.random());
var start_time;
var time;
let top_ = randomNumber(120, 600);
let left_ = randomNumber(120, 1200);
let width = randomNumber(60, 200);
let height = randomNumber(60, 200);
let x_distance = left_ - 100;
let y_distance = top_ - 100;
var click_record = false;

// Set form input values
document.getElementById("box_w").value = width;
document.getElementById("box_h").value = height;
document.getElementById("x_distance").value = x_distance;
document.getElementById("y_distance").value = y_distance;
document.getElementById("distracted").value = distracted;

// Set box2
document.getElementById("box2").style.top = top_ + "px";
document.getElementById("box2").style.left = left_ + "px";
document.getElementById("box2").style.width = width + "px";
document.getElementById("box2").style.height = height + "px";

function box1_click() {
    click_record = true;
    start_time = Date.now()
    document.getElementById("box2").style.visibility = "visible";
    if (distracted == 1) {
        setInterval(change_bg, 200);
    }
    setInterval(record_misclick, 500);
}

function randomNumber(min, max) { 
    return Math.floor(Math.random() * (max - min) + min);
}

function box2_click() {
    time = (Date.now() - start_time) / 1000;
    document.getElementById("time").value = time;
    document.getElementById("log_form").submit();
}

function change_bg() {
    let colors = ['green', 'blue', 'yellow', 'red', 'orange', 'grey', 'violet'];
    let color_idx = randomNumber(0, colors.length);
    document.body.style.backgroundColor = colors[color_idx]; 
}

function record_misclick() {
    window.onclick = e => {
        if (click_record == true) {
            if (e.target.id != "box2") {
                document.getElementById("misclick").value = 1;
            }
            click_record = false;
        }
    }
}

    //timer and nickname
    document.getElementById("nickname").value = localStorage.getItem("nickname");
    document.getElementById("savetime").innerHTML = localStorage.getItem("savetime");
    document.getElementById("currenttime").innerHTML = currentTime;
</script>
@endsection