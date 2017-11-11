After db connection call `enableQueryLog()` to activate queryLog();
~~~php
use Illuminate\Database\Capsule\Manager as Capsule;
Capsule::enableQueryLog();
~~~
to see query log after eloquent query or query build var_dump `getQueryLog()` function

~~~
User::all();
var_dump(Capsule::getQueryLog());
die();
~~~

