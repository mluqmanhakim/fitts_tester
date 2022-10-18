@extends('layout.base')

@section('extra_style')
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
@endsection

@section('content')


<style>

body {
  background-color: lightgreen;
}

#box1 {
    background-color: #000000;
    color: #FFFFFF;
    position: fixed;
    top: 10px;
    left: 10px;
    width: 90px;
    height: 90px;
}

/* max 1400px and 700px */

#box2 {
    background-color: #000000;
    color: #FFFFFF;
    position: fixed;
}

</style>


<button id="box1" type="button" onclick="box1_click()">Box 1</button>

<button id="box2" type="button" onclick="box2_click()">Box 2</button>


@endsection

@section('extra_script')

<script>

document.getElementById("box2").style.visibility = "hidden";

let top_ = randomNumber(120, 600);
let left_ = randomNumber(120, 1200);
let width = randomNumber(60, 200);
let height = randomNumber(60, 200);
let x_distance = left_ - 100
let y_distance = top_ - 100

console.log(x_distance)
console.log(y_distance)


document.getElementById("box2").style.top = top_ + "px";
document.getElementById("box2").style.left = left_ + "px";
document.getElementById("box2").style.width = width + "px";
document.getElementById("box2").style.height = height + "px";



function box1_click() {
    document.getElementById("box2").style.visibility = "visible";
}

function randomNumber(min, max) { 
    return Math.floor(Math.random() * (max - min) + min);
}

function box2_click() {
    window.location.replace("http://127.0.0.1:8000/");
    alert("Good job!");
}


</script>

@endsection