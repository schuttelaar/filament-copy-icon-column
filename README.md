# filament-copy-icon-column

Just an icon to copy whatever you want from a table row. The default in Filament is to add "copyable" toggle to an existing text field which adds the icon. This provides just an icon that copies for instance a calculated value (for instance an url generated from a hash).

The icon can be customized.

```
CopyIconColumn::make('copy')
->copyableState(fn (Model $record): string => 'https://www.mydomainname.com/' $record['hash'])
->copyMessage('Link was copied to clipboard')
->icon('heroicon-o-clipboard-document-list'),
```