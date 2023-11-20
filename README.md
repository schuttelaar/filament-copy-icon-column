# filament-copy-icon-column

Just an icon to copy whatever you want from a table row. In Filament you can make any textfield "copyable", but you can't add an icon without connecting it to a displayed text column. So this package provides just an seperate column with an icon that can copy for instance a calculated value (for instance an url generated from a hash).

The icon can be customized.

```
CopyIconColumn::make('copy')
->copyableState(fn (Model $record): string => 'https://www.mydomainname.com/' $record['hash'])
->copyMessage('Link was copied to clipboard')
->icon('heroicon-o-clipboard-document-list'),
```
