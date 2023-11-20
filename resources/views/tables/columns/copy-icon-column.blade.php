@php
    use Filament\Tables\Columns\IconColumn\IconColumnSize;
@endphp

<div>
    @php
        $icon = $getIcon($state);
        $color = $getColor($state) ?? 'gray';
        $size = $getSize($state) ?? IconColumnSize::Large;
        $copyableState = $getCopyableState($state) ?? $state;
        $copyMessage = $getCopyMessage($state);
        $copyMessageDuration = $getCopyMessageDuration($state);
        $weight = $getWeight($state);

        $iconClasses = \Illuminate\Support\Arr::toCssClasses([
            'fi-ta-text-item-icon h-5 w-5',
            match ($color) {
                'gray', null => 'text-gray-400 dark:text-gray-500',
                default => 'text-custom-500',
            },
        ]);

        $iconStyles = \Illuminate\Support\Arr::toCssStyles([
            \Filament\Support\get_color_css_variables($color, shades: [500]) => $color !== 'gray',
        ]);
    @endphp

    <div x-on:click="
        window.navigator.clipboard.writeText(@js($copyableState))
        $tooltip(@js($copyMessage), { timeout: @js($copyMessageDuration) })
        return false"
        >

    <x-filament::icon
        :icon="$icon"
        @class([
            'fi-ta-icon-item',
            'cursor-pointer',
            match ($size) {
                IconColumnSize::ExtraSmall, 'xs' => 'fi-ta-icon-item-size-xs h-3 w-3',
                IconColumnSize::Small, 'sm' => 'fi-ta-icon-item-size-sm h-4 w-4',
                IconColumnSize::Medium, 'md' => 'fi-ta-icon-item-size-md h-5 w-5',
                IconColumnSize::Large, 'lg' => 'fi-ta-icon-item-size-lg h-6 w-6',
                IconColumnSize::ExtraLarge, 'xl' => 'fi-ta-icon-item-size-xl h-7 w-7',
                default => $size,
            },
            match ($color) {
                'gray' => 'text-gray-400 dark:text-gray-500',
                default => 'text-custom-500 dark:text-custom-400',
            },
        ])
        @style([
            \Filament\Support\get_color_css_variables($color, shades: [400, 500]) => $color !== 'gray',
        ])

    />
    </div>
</div>
