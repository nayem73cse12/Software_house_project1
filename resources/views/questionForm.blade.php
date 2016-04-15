
@extends('layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10">
			
			<h4>Question</h4>
			
			<table class="table">
			

			<?php $i=1; ?>
			@foreach($data as $row)
			<tr>
            <td>{{$i++}}</td>
            <td>{{$row->question}}</td>
            
            </tr>

            @endforeach
      
			</table>
		</div>
	</div>
</div>
@endsection