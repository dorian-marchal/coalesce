# `coalesce` & `coalescy`

Two "coalescy" php functions to used while waiting for the `??` operator :
- `coalesce` : simple null coalesce function for PHP
- `coalescy` : like `coalesce`, but return the first not falsy value.

### Installation

```
composer require coalesce/coalesce
```

### Usage

```php
$arr = [ 'foo' => 4, 'bar' => '' ];

coalesce($arr); // returns $arr
coalesce($arr['foo']); // returns 4
coalesce($arr['bar']); // returns ''
coalesce(null, '0', 42); // returns '0'
coalesce($arr['foobar']); // returns null
coalesce(0, $arr); // returns 0

coalescy($arr); // returns $arr
coalescy($arr['foo']); // returns 4
coalescy($arr['bar']); // returns null
coalesce(null, '0', 42); // returns 42
coalescy($arr['foobar']); // returns null
coalescy(0, $arr); // returns $arr
```
