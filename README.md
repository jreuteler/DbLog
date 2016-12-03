# DbLog
Silverstripe module that allows easy logging to database with backend-filtering for certain methods/messages etc. 

**Code examples:**
```
  DBLogger::log($data, __METHOD__, SS_LOG_GENERAL);

  DBLogger::log('Invalid parameter given', __METHOD__, SS_LOG_ERROR);

  DBLogger::log('User tried to access prohibited content', __METHOD__, SS_LOG_ACCESS);

```


**Logging categories:**

* SS_LOG_ERROR
* SS_LOG_ACCESS
* SS_LOG_GENERAL
* SS_LOG_FILES
* SS_LOG_CONFIGURATION

