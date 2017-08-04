{{-- Include --}}
@extends('template.main')

{{-- Title --}}
@section('title',  $title)

{{-- Content --}}
@section('content')
    <div class="container" style="margin: 80px; 0px;">
        <div class="row">
            <div class="col-md-12">
                @include('components.ReminderList', ['reminders' => $reminders])
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('components.NewReminder', ['types' => $types])
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                @include('components.ReminderTypeList', ['types' => $types])
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @include('components.NewReminderType')
            </div>
        </div>
    </div>
@stop