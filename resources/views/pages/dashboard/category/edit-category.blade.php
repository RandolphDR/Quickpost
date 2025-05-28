@section('title', 'Edit Category')

<x-dashboard-layout>
    <livewire:components.dashboard.category.edit-form :categoryId="$categoryId" />
</x-dashboard-layout>
