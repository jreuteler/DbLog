# DbLog
Silverstripe module that allows easy logging to database with backend-filtering for certain methods/messages etc. 

**Code example:**
```
  DBLogger::log($data, __METHOD__, SS_GENERAL);

  DBLogger::log('Invalid parameter given', __METHOD__, SS_ERROR);
```


**Logging Categories:**

* SS_ERROR
* SS_ACCESS
* SS_GENERAL
* SS_FILES
* SS_CONFIGURATION

