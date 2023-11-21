# filament-copy-icon-column

In Filament you can make any textfield "copyable", but you can't add a copy icon without connecting it to a text column. This package provides a seperate icon column, which copies text. 

The text copied can be anything, for instance a url generated from a stored hash. The icon can be customized like any other icon in filament. 

```
CopyIconColumn::make('copy')
->copyableState(fn (Model $record): string => 'https://www.mydomainname.com/' $record['hash'])
->copyMessage('Custom link was copied to clipboard')
->icon('heroicon-o-clipboard-document-list'),
```
