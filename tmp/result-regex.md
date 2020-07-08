# Regex to convert Envato to PHP
Regex for response:
```regexp
(\w+) \(([\S, ]+)\): (\w+(?>[\w \(\)\?]*)),
```

Regex to replace
```
/**
 * $3
 */
public $2 \$$1;

```

# Regex to add null
```regexp
(public \?\w+ \$\w+)(;)
```

replace to
```regexp
$1 = null$2
```
