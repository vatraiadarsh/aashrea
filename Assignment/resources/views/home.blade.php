@extends('adminlte::page')

@section('title', ' Admin- AIBT')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>You are logged in!</p>

    <!-- ./col -->
	<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-aqua">
			<div class="inner">
				<h3>{{ $users }}</h3>
				<p>Total Unique Visitors</p>
			</div>
			<div class="icon">
				<i class="ion ion-person"></i>
			</div>
			<a href="javascript:void(0)" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
        </div>

    </div>
    <div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
			<div class="inner">
				<h3>{{ $contacts }}</h3>
				<p>Total Forms Submitted</p>
			</div>
			<div class="icon">
				<i class="ion ion-ios-book"></i>
			</div>
			<a href="javascript:void(0)" class="small-box-footer">More info
				<i class="fa fa-arrow-circle-right"></i>
			</a>
        </div>

    </div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

            <div class="box-header">
              <h3 class="box-title">Contact Form Data</h3>
              <div class="box-tools">
                <span class="fa fa-user"></span>

          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="contact-table" class="table table-bordered table-striped">
          <tr>
              <th>Id</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Created date</th>
          </tr>
        </table>
        </div>





        <div class="box-header">
                <h3 class="box-title">User List</h3>
                <div class="box-tools">
                  <span class="fa fa-user"></span>

            </div>
          </div>
    <div class="box-body">
            <table id="user-table" class="table table-bordered table-striped">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Created date</th>
            </tr>
          </table>
    </div>


    </div>

    <!-- ./col -->


@stop


@section('js')
    <script>
        $(document).ready(function(){
            $.getJSON("json/contact",function(data){
                var $table=$("#contact-table");
                $.each(data,function(i,c){
                   var $tr=$("<tr></tr>")
                   $("<tr/>").html(c.id).appendTo($tr);
                   $("<td/>").html(c.firstname).appendTo($tr);
                   $("<td/>").html(c.lastname).appendTo($tr);
                   $("<td/>").html(c.email).appendTo($tr);
                   $("<td/>").html(c.subject).appendTo($tr);
                   $("<td/>").html(c.created_at).appendTo($tr);
                   $tr.appendTo($table);
                });
            });
        });


    $(document).ready(function(){
                $.getJSON("json/user",function(data){
                    var $table=$("#user-table");
                    $.each(data,function(i,c){
                    var $tr=$("<tr></tr>")
                    $("<tr/>").html(c.id).appendTo($tr);
                    $("<td/>").html(c.name).appendTo($tr);
                    $("<td/>").html(c.email).appendTo($tr);
                    $("<td/>").html(c.created_at).appendTo($tr);
                    $tr.appendTo($table);
                    });
                });
            });

    </script>
    @stop


