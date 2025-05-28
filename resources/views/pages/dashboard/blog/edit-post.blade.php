@section('title', 'Edit Posts')

{{-- Fix Edit form this form is not having a field for assigning user only available for admins --}}
<x-dashboard-layout>
    <livewire:components.blog.manage.edit-form :slug="$slug" />
</x-dashboard-layout>
