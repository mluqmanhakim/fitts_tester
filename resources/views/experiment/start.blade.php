@extends('layout.base')
<div class="container">
<form action="{{ route('show_exp_1') }}">
    <div class="form-group">
      <label for="nickName">Nickname</label>
      <input type="textbox" class="form-control" id="nickName" aria-describedby="emailHelp" placeholder="nickname">
      <small id="emailHelp" class="form-text text-muted">We'll never share your data with anyone else.</small>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Agreement about the experiment...</label>
    </div>
    <button type="submit" class="btn btn-primary">Confirm and Start Experiment</button>
</form>
</div>