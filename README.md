# `coalesce` & `coalescy`

Two "coalescy" php functions to used while waiting for the `??` operator :
- `coalesce` : simple null coalesce function for PHP
- `coalescy` : like `coalesce`, but returns the first not falsy value.

And two functions to get a potentially undefined element without throwing `E_NOTICE`
- `val` : returns an array element or null if the index is undefined
- `prop` : returns an object property or null if the index is undefined

### Installation

```
composer require coalesce/coalesce
```

### Usage

```php
$arr = [ 'foo' => 4, 'bar' => '' ];

// coalesce
coalesce($arr); // returns $arr
coalesce(false, $arr['foo']); // returns false
coalesce($arr['bar']); // returns ''
coalesce(null, '0', 42); // returns '0'
coalesce($arr['foobar']); // returns null (caution: this will throw a notice)
coalesce(0, $arr); // returns 0

// coalescy
coalescy($arr); // returns $arr
coalescy(false, $arr['foo']); // returns 4
coalescy($arr['bar']); // returns null
coalescy(null, '0', 42); // returns 42
coalescy($arr['foobar']); // returns null (caution: this will throw a notice)
coalescy(0, $arr); // returns $arr

// To avoid notices, you can use val :
val($arr, 'bar'); // returns '' ($arr['bar'])
val($arr, 'foobar'); // returns null (without throwing a notice)
```
