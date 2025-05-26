@props([
    'contentClasses' => 'border-l-2 border-gray-200 dark:border-gray-600 pl-4 ml-3 space-y-1',
    'active' => false,
])

<div x-data="{
    open: {{ $active ? 'true' : 'false' }},
    height: 0,
    init() {
        const content = this.$refs.content;
        this.height = this.open ? content.scrollHeight : 0;

        this.$watch('open', value => {
            this.height = value ? content.scrollHeight : 0;
        });
    }
}" class="w-full">
    <div @click="open = !open" :class="open ? 'bg-gray-200 dark:bg-gray-700' : ''" class="cursor-pointer rounded-lg">
        {{ $trigger }}
    </div>

    <div x-ref="content" :style="{ height: open ? height + 'px' : '0px' }" :class="open ? 'mt-2' : ''"
        class="gap-1 flex flex-col transition-all duration-300 ease-in-out overflow-hidden {{ $contentClasses }}">
        {{ $content }}
    </div>
</div>
