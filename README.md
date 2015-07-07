# coalesce

Simple Null Coalesce function for PHP while waiting for the `??` operator.

### Installation

```
composer require coalesce/coalesce
```

### Usage

```php
$n = null;
$arr = [ 'foo' => 4, 'bar' => '' ];

coalesce($arr); // returns $arr
coalesce($arr['foo']); // returns 4
coalesce($arr['bar']); // returns ''
coalesce($arr['foobar']); // returns null
coalesce($n, $arr); // returns $arr
```

