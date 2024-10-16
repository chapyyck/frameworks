@extends('layouts.app')

@section('title', 'Детали задачи')

@section('content')
    <x-task
        :id="$task['id']"
        :title="$task['title']"
        :assignment="$task['assignment']"
        :description="$task['description']"
        :status="$task['status']"
        :priority="$task['priority']"
        :created_at="$task['created_at']"
        :updated_at="$task['updated_at']"
    />
@endsection
