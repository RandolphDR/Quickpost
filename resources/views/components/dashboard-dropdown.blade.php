    @props(['contentClasses' => 'border-l-2 border-gray-600 pl-4 ml-3 space-y-1'])

    <div x-data="{ open: false, height: 0 }" x-init="$watch('open', value => {
        const content = $refs.content;
        height = value ? content.scrollHeight : 0;
    })" class="w-full">
        <div @click="open = !open" :class="open ? 'bg-gray-700' : ''" class="cursor-pointer rounded-lg">
            {{ $trigger }}
        </div>

        <div x-ref="content" :style="{ height: open ? height + 'px' : '0px' }" :class="open ? 'mt-2' : ''"
            class="transition-all duration-300 ease-in-out overflow-hidden {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
