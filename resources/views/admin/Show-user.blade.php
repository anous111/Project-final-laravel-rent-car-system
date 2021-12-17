@extends('layouts.admin')

@section('content')

@forelse ($User as $key=>$data)

<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-3">
        <h2>Name: {{$data->name}}</h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>Email: {{$data->email}}</p>
         
        </div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>Number {{$data->number}}</p>
         
        </div>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>City {{$data->city}}</p> 
        </div>
      </div>
    </div>
    
