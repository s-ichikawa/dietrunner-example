# dietrunner-example

```
$ composer install                     
Installing dependencies from lock file (including require-dev)
...

$ ./vendor/bin/rr get-binary
...

$ ./rr serve                
[INFO] RoadRunner server started; version: 2.11.4, buildtime: 2022-10-06T14:42:40+0000
2022-10-27T23:39:13.978+0900    DEBUG   server          worker is allocated     {"pid": 3093, "internal_event_name": "EventWorkerConstruct"}
2022-10-27T23:39:13.978+0900    WARN    http            requested middleware does not exist     {"requested": "static"}
2022-10-27T23:39:13.979+0900    DEBUG   http            http server was started {"address": "0.0.0.0:8080"}
```

and browse localhost:8080
