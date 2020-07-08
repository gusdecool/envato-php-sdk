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

