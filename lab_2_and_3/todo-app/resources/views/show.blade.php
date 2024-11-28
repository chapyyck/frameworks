@extends('layouts.app')

@section('title', 'Детали задачи')

@section('content')
    <x-task
        :id="$task->id"
        :title="$task->title"
        :description="$task->description"
        :created_at="$task->created_at"
        :updated_at="$task->updated_at"
        :category="$task->category->name"
        :category_description="$task->category->description"
        :tags="$task->tags->pluck('name')->join(', ')"
    />
@endsection
